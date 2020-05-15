<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\User;
use App\Company;

class DashboardController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::with(['role'])->where('id' , $id)->get();
        if($user[0]->role->kode_role == 'SA') {
            return view('admin.dashboard' , ['user' => $user]);
        } else {
            return view('index');
        }
    }

    public function viewUserDetail()
    {
        return view('admin.user-profil.user-profil');
    }
    
    public function viewWebCompany()
    {
        $companys = Company::paginate(2);
        return view('admin.web-company.web-company' , ['companys' => $companys]);
    }


    public function createWebCompany(Request $request)
    {
        $path_banner_1 = $request->file('banner_1')->store('banner');
            Company::create([
            'links' => $request->links,
            'telepon'=> $request->telepon ,
            'email'=> $request->email,
            'banner_1'=>$path_banner_1,
            'aktif_flag' =>'T',
        ]);
        return redirect('/web-company')->with('status' , 'Data berhasil di tambah');
    }

    public function updateWebCompany(Request $request , Company $company)
    {
          $path_banner_1 = $request->file('banner_1')->store('banner');
            Company::wheere('id' , $company->id )->update([
            'links' => $request->links,
            'telepon'=> $request->telepon ,
            'email'=> $request->email,
            'banner_1'=>$path_banner_1,
            'aktif_flag' => $request->aktif_flag,
        ]);
        return redirect('/web-company')->with('status' , 'Data berhasil di update');
    }
}
