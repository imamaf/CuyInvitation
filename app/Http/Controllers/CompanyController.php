<?php

namespace App\Http\Controllers;
use App\Company;
use App\User;
use App\TemplateCompany;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $user_testimonis = User::with(['testimoni'])->get();
        $companys = Company::where('aktif_flag', 'Y')->first();
        $templateCompany = TemplateCompany::all();
        $data = ['companys' => $companys , 'user_testimonis' => $user_testimonis, 'template_company' => $templateCompany];
        return !is_null($companys)?view('index', $data):'';
        
    }

    public function getCompanyByIndex(Request $request) {
        $data = Company::find($request->id);
        return $data;
    }

    public function filterDesign(Request $request) {
        dd($request);
        return ;
    }
    //
}
