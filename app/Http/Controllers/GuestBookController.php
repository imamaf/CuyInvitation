<?php

namespace App\Http\Controllers;

use App\GuestBook;
use App\Template_customer;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class GuestBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Data Tables
    public function datatable()
    {
        $id = auth()->user()->id;
        $user = User::with(['role'])->where('id' , $id)->get();
        $dropdown = Template_customer::select('user_id','nama_panggilan_pria','nama_panggilan_wanita')->get();
        if(request()->ajax())
        {
           if($user[0]->role->kode_role == 'SA') {
            $query = DB::table('guestbook')
            ->Join('template_customer', 'guestbook.template_id', '=', 'template_customer.user_id')
            ->select('guestbook.*', 'template_customer.nama_panggilan_pria', 'template_customer.nama_panggilan_wanita');

        } else {
            $query = DB::table('guestbook')
            ->Join('template_customer', 'guestbook.template_id', '=', 'template_customer.user_id')
            ->where('template_customer.user_id', '=', $id)
            ->select('table_guestbook.*', 'template_customer.nama_panggilan_pria', 'template_customer.nama_panggilan_wanita');
        }
        return Datatables::of($query)
            ->editColumn('hubungan',function($query){
                if ($query->hubungan == '1') {
                    return "Orang Tua";
                } else if ($query->hubungan == '2') {
                    return "Saudara Laki-Laki/Perempuan";
                } else if ($query->hubungan == '3') {
                    return "Keluarga Mempelai Pria";
                } else if ($query->hubungan == '4') {
                    return "Keluarga Mempelai Wanita";
                } else {
                    return "Sahabat/Teman";
                }

            })
            ->editColumn('status_kehadiran', function($query) {
                    return $query->status_kehadiran == 'H' ? 'Hadir' : 'Tidak Hadir';
                })
            ->addColumn('Aksi', function($query) {
                return '
                        <a data-toggle="modal" href="#" class="btn btn-view open_modal_view" value="'.$query->id.'"><i class="far fa-eye"></i></a>
                        <a data-toggle="modal" value="'.$query->id.'" href="#" class="btn btn-edit open_modal_update"><i class="far fa-edit"></i></a>
                        <a data-toggle="modal" href="#" value="'.$query->id.'" class="btn btn-delete open_modal-delete"><i class="far fa-trash-alt"></i></a>
                    ' ;
            })
            ->addColumn('nama_pasangan', function($query) {
                return $query->nama_panggilan_pria.' - ' . $query->nama_panggilan_wanita;
            })
            ->escapeColumns([])
            ->make(true);
        }
        return view('admin.Guest-book.GuestBook', ['user' => $user, 'dropdown' => $dropdown]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = GuestBook::with('template_customer.subItems')->find($request->id);
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , GuestBook $guestBook)
    {
        GuestBook::where('id',$guestBook->id)->update([
            'template_id' => $request->template_id,
            'nama_tamu' => $request->nama_tamu,
            'alamat' => $request->alamat,
            'hubungan' => $request->hubungan,
            'status_kehadiran' => $request->status_kehadiran,
        ]);
        Alert::success('Berhasil' , 'Data Berhasil Diubah' );
        return redirect('/guestbook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = GuestBook::findOrFail($id);
        $item->delete();
        Alert::success('Berhasil' , 'Data Berhasil Dihapus' );
        return redirect('/guestbook');
    }
}
