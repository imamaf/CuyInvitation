<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplateCompany;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminTemplateCompany extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next){
            if (Auth::user()){
                $id = auth()->user()->id;
                $user = User::with(['user_attribut' , 'role'])->find($id);
                if($user->role->kode_role == 'SA') {
                    return $next($request);
                } else if($user->role->kode_role == 'CSR') {
                    return redirect('/');
                }
            }
               return abort(404);
            });
    }

        public function index()
        {
        $id = auth()->user()->id;
        $user = User::with(['role'])->where('id' , $id)->get();
        if(request()->ajax())
        {
            $query = DB::table('template_company');
            return Datatables::of($query)
                ->addColumn('action', function($query) {
                    return '
                    <a data-toggle="modal" href="#" class="btn btn-view open_modal_view" value="'.$query->id.'"><i class="far fa-eye"></i></a>
                    <a data-toggle="modal" value="'.$query->id.'" href="#" class="btn btn-edit open_modal_update"><i class="far fa-edit"></i></a>
                    <a data-toggle="modal" href="#" value="'.$query->id.'" class="btn btn-delete open_modal_delete"><i class="far fa-trash-alt"></i></a>
                    ' ;
                })->make();
        }
        return view('admin.templatecompany' , ['user' => $user]);
        //
         }

    public function getTemplateById(Request $request) {
        $data = TemplateCompany::find($request->id);
        return $data;
    }

    public function updateTemplate(Request $request) {
        // dd($request->file('banner_1'));
        $request_banner = $request->file('banner_1');
        $path_banner = '';
        $dataFind = TemplateCompany::where('id', $request->id);
        if ($request_banner != null) {
            $path_banner = $request_banner->store('template_company');
            Storage::delete($dataFind->get()->first()->url_gambar);
        } else {
            $path_banner = $dataFind->get()->first()->url_gambar;
        }
        $data = $dataFind->update([
            'nama_template' => $request->templateNameModal,
            'url_gambar' => $path_banner,
            'harga_template' => $request->priceModal,
            'link' => $request->linkModal,
            'deskripsi_template' => $request->descriptionModal
        ]);
        Alert::success('Berhasil' , 'Data Berhasil Diubah' );
        return redirect('/templatecompany');
    }

    public function addTemplate(Request $request) {
        $path_banner = $request->file('banner_1_add')->store('template_company');
        $data = TemplateCompany::create([
            'nama_template' => $request->templateNameAdd,
            'url_gambar' => $path_banner,
            'harga_template' => $request->priceAdd,
            'link' => $request->link,
            'deskripsi_template' => $request->descriptionAdd
        ]);
        Alert::success('Berhasil' , 'Data Berhasil Ditambahkan' );
        return redirect('/templatecompany');
    }

    public function deleteTemplate(TemplateCompany $templateCompany){
        Storage::delete($templateCompany->url_gambar);
        $templateCompany->delete();
        Alert::success('Berhasil' , 'Data Berhasil Dihapus' );
        return redirect('/templatecompany');
    }
    //
}
