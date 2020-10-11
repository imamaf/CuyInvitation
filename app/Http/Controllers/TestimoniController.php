<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Testimoni;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class TestimoniController extends Controller
{

// --------------------- CONTROLLER PAGE TESTIMONI ADMIN DASHBOARD  ----------------------

     // DATATABLE TESTIMONI

     public function viewTestimoni()
    {
    $id = auth()->user()->id;
    $userDropdown = User::whereHas('role', function($query){
                $query->where('kode_role', '=', 'CSR');
            })->get();
    $user = User::with(['role'])->where('id' , $id)->get();
        if(request()->ajax())
        {
            $query = DB::table('testimoni');
            return Datatables::of($query)
                ->addColumn('action', function($query) {
                    return '
                    <a data-toggle="modal" href="#" class="btn btn-view open_modal_view" value="'.$query->id.'"><i class="far fa-eye"></i></a>
                    <a data-toggle="modal" value="'.$query->id.'" href="#" class="btn btn-edit open_modal_update"><i class="far fa-edit"></i></a>
                    <a data-toggle="modal" href="#" value="'.$query->id.'" class="btn btn-delete open_modal_delete"><i class="far fa-trash-alt"></i></a>
                    ' ;
                })->make();
        }
        return view('admin.testimoni.testimoni' , ['user' => $user , 'userDropdown' => $userDropdown]);
        //
    }

    // GET COMPANY BY ID
    public function getTestimoniByIndex(Request $request)
    {
        $data = Testimoni::find($request->id);
        return $data;
    }

    public function addTestimoni(Request $request)
    {
            $path_foto = $request->file('pathPhoto')->store('testimoni');
            Testimoni::create([
            'user_id' =>  $request->userId,
            'nama' => $request->nama,
            'path_foto' => $path_foto,
            'deskripsi'=> $request->deskripsi ,
            'rating'=> $request->rating,
        ]);
        Alert::success('Berhasil' , 'Data Berhasil Ditambahkan' );
        return redirect('/testimoni');
    }

    // UPDATE TESTIMONI
    public function updateTestimoni(Request $request , Testimoni $testimoni)
    {
            Testimoni::where('id' , $testimoni->id )->update([
            'user_id' =>  $request->userId,
            'nama' => $request->nama_Modal,
            'deskripsi'=> $request->deskripsi_Modal ,
            'rating'=> $request->rating_Modal,
        ]);
        Alert::success('Berhasil' , 'Data Berhasil Diubah' );
        return redirect('/testimoni');
    }

    //Delete List User
    public function deleteTestimoni(Testimoni $testimoni)
    {
        $testimoni->delete();
        Alert::success('Berhasil' , 'Data Berhasil Dihapus' );
        return redirect('/testimoni');
    }

}
