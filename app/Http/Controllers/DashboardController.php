<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\User;
use App\Company;
use App\Testimoni;
use App\User_attribut;
use App\Role;
use App\Template_customer;
use App\Foto_gallery;
use Auth;

class DashboardController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    // CHECK AUTH BY ROLE
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::with(['role'])->where('id' , $id)->get();
        $userCount = User::with(['role'])->get();
        $wordCount = count($userCount);
        $companys = Company::where('aktif_flag', 'Y')->first();
        $user_testimonis = User::with(['testimoni'])->get();
        if($user[0]->role->kode_role == 'SA') {
            return view('admin.dashboard' , compact('wordCount'), ['user' => $user]);
        } else {
            return view('index',['companys' => $companys , 'user_testimonis' => $user_testimonis]);
        }
    }
// --------------------- CONTROLLER PAGE USER ADMIN DASHBOARD  ----------------------

    public function viewListUser()
    {
        $users = User::with(['user_attribut' , 'role'])->paginate(5);
        return view('admin.user-profil.list-member-user', ['users' => $users]);
    }

    //GET USER BY ID
    public function getUserByIndex(Request $request) {
        $data = User::with(['user_attribut' , 'role'])->find($request->id);
        return $data;
    }

    // UPDATE LIST USER
    public function updateListUser(Request $request , User $user)
    {
        User::where('id' , $user->id )->update([
            'name' => $request->nama_Modal,
        ]);

       User_attribut::where('user_id' , $user->id )->update([
            'nama' => $request->nama_Modal,
            'no_hp' => $request->no_hp_Modal,
        ]);

        Role::where('user_id' , $user->id )->update([
            'kode_role' => $request->role_Modal,
        ]);

        return redirect('/list-user')->with('status' , 'Data berhasil di update');
    }

    //Delete List User
    public function deleteListUser(User $user) {
        User::where('id', $user->id)->delete();
        User_attribut::where('user_id', $user->id)->delete();
        Role::where('user_id', $user->id)->delete();
        $user->delete();
        return redirect('/list-user')->with('status' , 'Data berhasil dihapus');
    }

    public function viewUserDetail()
    {
        return view('admin.user-profil.user-profil');
    }

 // --------------------- CONTROLLER PAGE COMPANY ADMIN DASHBOARD ----------------------

    //DATATABLE COMPANY
    public function viewWebCompany()
    {
        $companys = Company::paginate(5);
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
            Company::where('id' , $company->id )->update([
            'links' => $request->links_Modal,
            'telepon'=> $request->telepon_Modal ,
            'email'=> $request->email_Modal,
            'banner_1'=>$path_banner_1,
            'aktif_flag' => $request->aktif_flagModal,
        ]);
        return redirect('/web-company')->with('status' , 'Data berhasil di update');
    }

    // GET COMPANY BY ID
    public function getCompanyByIndex(Request $request)
    {
        $data = Company::find($request->id);
        return $data;
    }

    //Delete List User
    public function deleteWebCompany(Company $company) {
        $company->delete();
        return redirect('/web-company')->with('status' , 'Data berhasil dihapus');
    }

    
// --------------------- CONTROLLER PAGE TESTIMONI ADMIN DASHBOARD  ----------------------

     // DATATABLE TESTIMONI
    public function viewTestimoni()
    {
        $testimonis = Testimoni::paginate(5);
        return view('admin.testimoni.testimoni' , ['testimonis' => $testimonis]);
    }

    // GET COMPANY BY ID
    public function getTestimoniByIndex(Request $request)
    {
        $data = Testimoni::find($request->id);
        return $data;
    }

    // UPDATE TESTIMONI
    public function updateTestimoni(Request $request , Testimoni $testimoni)
    {
            Testimoni::where('id' , $testimoni->id )->update([
            'nama' => $request->nama_Modal,
            'deskripsi'=> $request->deskripsi_Modal ,
            'rating'=> $request->rating_Modal,
        ]);
        return redirect('/testimoni')->with('status' , 'Data berhasil di update');
    }

    //Delete List User
    public function deleteTestimoni(Testimoni $testimoni) 
    {
        $testimoni->delete();
        return redirect('/testimoni')->with('status' , 'Data berhasil dihapus');
    }

 // ---------------------  CONTROLLER SEARCH -------------
    public function Search(Request $request , string $pathSearch){
        $cari = $request->cari;
        $id = auth()->user()->id;
        //SEARCH USER
        if($pathSearch == 'User'){
            $users = User::with(['user_attribut' , 'role'])->where('name' , 'LIKE' ,"%".$cari."%")->paginate(5);
            if(count($users) == 0) {
                //MESSAGE DATA TIDAK DITEMUKAN
                return view('admin.user-profil.list-member-user', ['users' => $users])->with('notFound','Data Tidak ditemukan');
            }
            return view('admin.user-profil.list-member-user', ['users' => $users]);
        }
        // SEARCH WEB COMPANY
         else if ($pathSearch == 'Web Company') {
            $companys = Company::where('links' , 'LIKE' ,"%".$cari."%")->paginate(5);
            if(count($companys) == 0) {
                //MESSAGE DATA TIDAK DITEMUKAN
                return view('admin.web-company.web-company' , ['companys' => $companys])->with('notFound','Data Tidak ditemukan');
            }
            return view('admin.web-company.web-company' , ['companys' => $companys]);
        } 
        // SEARCH TESTIMONI
        else if ($pathSearch == 'Testimoni') {
            $testimonis = Testimoni::where('nama' , 'LIKE' ,"%".$cari."%")->paginate(5);
            if(count($testimonis) == 0) {
                //MESSAGE DATA TIDAK DITEMUKAN
                return view('admin.testimoni.testimoni' , ['testimonis' => $testimonis])->with('notFound','Data Tidak ditemukan');
            }
            return view('admin.testimoni.testimoni' , ['testimonis' => $testimonis]);
        }
    }
    
}
