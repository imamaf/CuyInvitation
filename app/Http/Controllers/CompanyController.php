<?php

namespace App\Http\Controllers;
use App\Company;
use App\User;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $user_testimonis = User::with(['testimoni'])->get();
        $companys = Company::where('aktif_flag', 'Y')->first();
        $data = ['companys' => $companys , 'user_testimonis' => $user_testimonis];
        return !is_null($companys)?view('index', $data):'';
        
    }

    public function getCompanyByIndex(Request $request) {
        $data = Company::find($request->id);
        return $data;
    }
    //
}
