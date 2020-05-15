<?php

namespace App\Http\Controllers;
use App\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {

        $companys = Company::where('aktif_flag', 'Y')->first();
        return view('index', ['companys' => $companys]);
        
    }
    //
}
