<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\User;
use App\Company;
use App\Testimoni;

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
        $companys = Company::where('aktif_flag', 'Y')->first();
        $user_testimonis = User::with(['testimoni'])->get();
        if($user[0]->role->kode_role == 'SA') {
            return view('admin.dashboard' , ['user' => $user]);
        } else {
            return view('index',['companys' => $companys , 'user_testimonis' => $user_testimonis]);
        }
    }

    public function viewUserDetail()
    {
        return view('admin.user-profil.user-profil');
    }
    //DATATABLE COMPANY
    public function viewWebCompany()
    {
        $companys = Company::paginate(5);
        return view('admin.web-company.web-company' , ['companys' => $companys]);
    }
    // DATATABLE TESTIMONI
    public function viewTestimoni()
    {
        $testimonis = Testimoni::paginate(5);
        return view('admin.testimoni.testimoni' , ['testimonis' => $testimonis]);
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
