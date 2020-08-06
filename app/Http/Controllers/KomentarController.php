<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\User;

class KomentarController extends Controller
{
        // DATATABLE Template Customer
    public function datatable()
    {  
    $id = auth()->user()->id;
    $user = User::with(['role'])->where('id' , $id)->get();
    if(request()->ajax())
    {
        if($user[0]->role->kode_role == 'SA') {
            $query = DB::table('komentar')
            ->leftJoin('template_customer', 'komentar.template_id', '=', 'template_customer.id');
            
        } else {            
            $query = DB::table('komentar')
            ->leftJoin('template_customer', 'komentar.template_id', '=', 'template_customer.id')
            ->where('template_customer.user_id', '=', $id);
        }
        return Datatables::of($query)
            ->editColumn('aktif_flag', function($query) {
                    return $query->aktif_flag == 'Y' ? 'Aktif' : 'Tidak Aktif';
                })
            ->editColumn('path_foto', function($query) {
                    return $query->path_foto ? '<img src="/storage/'.$query->path_foto.'" style="max-height: 40px;" />' : '';
                })
            ->addColumn('action', function($query) {
                return '
                    <input type="checkbox" checked data-toggle="toggle">
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
         Komentar::create([
             'template_id' => $request->template_id,
             'nama' => $request->nama,
             'path_foto' => $dir_foto,
             'deskripsi' => $request->deskripsi,
             'aktif_flag' => 'N',
         ]);
            
         return redirect(redirect()->back()->getTargetUrl());
    }
    //
}
