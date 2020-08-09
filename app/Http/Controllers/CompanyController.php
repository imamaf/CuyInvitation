<?php

namespace App\Http\Controllers;
use App\Company;
use App\User;
use App\TemplateCompany;
use Illuminate\Support\Facades\DB;
use App\TemplateType;
use App\TemplateDesign;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $user_testimonis = User::with(['testimoni'])->get();
        $companys = Company::where('aktif_flag', 'Y')->first();

        $templateType = TemplateType::all();
        $templateDesign = TemplateDesign::all();

        $templateCompany = TemplateCompany::where('kode_type_template', 'WDDNG')->where('kode_template_design', 'MDRN')->get();
        $data = ['companys' => $companys , 'user_testimonis' => $user_testimonis, 'template_company' => $templateCompany , 'templateType' => $templateType , 'templateDesign' => $templateDesign];
        return !is_null($companys)?view('index', $data):'';
        
    }

    public function getCompanyByIndex(Request $request) {
        $data = Company::find($request->id);
        return $data;
    }

    public function filterDesign(Request $request) {
        $companys = Company::where('aktif_flag', 'Y')->first();
        $user_testimonis = User::with(['testimoni'])->get();
        $templateCompany = DB::table('template_company')
            ->Join('template_type', 'template_company.kode_type_template', '=', 'template_type.kode_type_template')
            ->Join('template_design', 'template_company.kode_template_design', '=', 'template_design.kode_template_design')
            ->where('template_company.kode_type_template', '=', $request->filterType)
            ->where('template_company.kode_template_design', '=', $request->filterDesign)
            ->get();
                   $data = ['companys' => $companys , 'user_testimonis' => $user_testimonis, 'template_company' => $templateCompany];
        // dd($data);
                   return  redirect('/#design')->with( ['template_company' => $templateCompany]);
            // ->select('komentar.*', 'template_customer.nama_panggilan_pria', 'template_customer.nama_panggilan_wanita');
        // $templateCompany = TemplateCompany::all();
        // dd($query);
        // return ;
    }
    //
}
