<?php

namespace App\Http\Controllers;
use App\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {

        $companys = Company::where('aktif_flag', 'A')->first();
        return view('index', ['companys' => $companys]);
        
    }
    //
}
