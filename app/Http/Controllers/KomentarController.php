<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\User;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\NewItem;
use Notification;

// use Illuminate\Notifications\Notification;

class KomentarController extends Controller
{
        // DATATABLE Komentar
    public function datatable()
    {  
    $id = auth()->user()->id;
    $user = User::with(['role'])->where('id' , $id)->get();
    if(request()->ajax())
    {
        if($user[0]->role->kode_role == 'SA') {
            $query = DB::table('komentar')
            ->Join('template_customer', 'komentar.template_id', '=', 'template_customer.id')
            ->select('komentar.*', 'template_customer.nama_panggilan_pria', 'template_customer.nama_panggilan_wanita');
            
        } else {            
            $query = DB::table('komentar')
            ->Join('template_customer', 'komentar.template_id', '=', 'template_customer.id')
            ->where('template_customer.user_id', '=', $id)
            ->select('komentar.*', 'template_customer.nama_panggilan_pria', 'template_customer.nama_panggilan_wanita');
        }
        return Datatables::of($query)
            ->editColumn('deskripsi', function($query) {
                    if(strlen($query->deskripsi) > 40) {
                        return substr($query->deskripsi, 0, 30) . '........';
                    }
                    return $query->deskripsi;
                })
            ->editColumn('aktif_flag', function($query) {
                    return $query->aktif_flag == 'Y' ? 'Aktif' : 'Tidak Aktif';
                })
            ->editColumn('path_foto', function($query) {
                    return $query->path_foto ? '<img src="/storage/'.$query->path_foto.'" style="max-height: 40px;" />' : '';
                })
            ->addColumn('action', function($query) {
                $checked = '';
                if($query->aktif_flag == 'Y') {
                    $checked = 'checked';
                }
                return '
                    <form id="target" action="/approve-komentar" method="GET">
                    <input type="text" value="'.$query->id.'" name="id" style="display:none">
                    <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch'.$query->id.'" tabindex="0" onclick="submit()" '.$checked.'>
                            <label class="onoffswitch-label" for="myonoffswitch'.$query->id.'">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </form>  
                     <a data-toggle="modal" href="#" value="'.$query->id.'" class="btn btn-delete open_modal-delete"><i class="far fa-trash-alt"></i></a>

                    ' ;
            })
            ->addColumn('nama_pasangan', function($query) {
                return $query->nama_panggilan_pria.' - ' . $query->nama_panggilan_wanita;
            })
            ->escapeColumns([])
            ->make(true);
    }    
    return view('admin.komentar-ucapan.list_komentar' , ['user' => $user]);
    //
    }

    public function addKomentar(Request $request)
    {   
        $dir_foto = '';
        if($request->path_foto != null) {
            $dir_foto = $request->file('path_foto')->store('foto_komentar');
         }
        $id = auth()->user()->id;
        $user = User::with(['role'])->where('id' , $id)->get();
        $komentar = Komentar::create([
             'template_id' => $request->template_id,
             'nama' => $request->nama,
             'path_foto' => $dir_foto,
             'deskripsi' => $request->deskripsi,
             'aktif_flag' => 'N',
         ]);
          if(Notification::send($user, new NewItem($komentar))) {
              return back();
          }
            Alert::success('Berhasil' , 'Ucapan Berhasil Dikirim Menuggu di approve' );
         return redirect(redirect()->back()->getTargetUrl());
    }
    public function approveKomentar(Request $request)
    {   
        $aktif_flag = 'N';
        if($request->onoffswitch == 'on') {
            $aktif_flag = 'Y';
        }
        Komentar::where('id' ,  $request->id)->update([
        'aktif_flag' => $aktif_flag,
        ]);            
         return redirect('/komentar-ucapan');
    }
    public function deleteKomentar(Komentar $komentar)
    {
        Alert::success('Berhasil' , 'Data Berhasil Dihapus' );
        Storage::delete($komentar->path_foto);
        $komentar->delete();
        return redirect('/komentar-ucapan');
    }
}
