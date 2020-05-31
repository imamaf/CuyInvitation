<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template_customer;
use App\Foto_gallery;

class TemplateCustomerController extends Controller
{
    public function index_tempalet_1(){
        return view('product_design.design_C01');
    }

    public function get_template_1(string $search_cust_pria , string $search_cust_wanita){
        $template_customer = Template_customer::where('nama_mempelai_pria' ,'LIKE' ,"%".$search_cust_pria."%")->where('nama_mempelai_wanita', 'LIKE' , "%".$search_cust_wanita."%")->where('kode_template' , 'C01')->first();
    //    dd($template_customer);
        $gallerys = null;
        if(!empty($template_customer)) {
            $gallerys = Foto_gallery::where('template_id' , $template_customer->id)->where('user_id',  $template_customer->user_id)->get();
        }
        $data =['template_customer' => $template_customer ,'gallerys' => $gallerys ];
        // dd($gallerys);
        return !is_null($gallerys) ? view('product_design.design_C01' , $data ) : view('product_design.design_C01' , $data );
    }
}
