<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template_customer;
use App\Foto_gallery;
use App\Komentar;

class TemplateCustomerController extends Controller
{
    public function index_tempalet_1(){
        return view('product_design.design_C01');
    }

    public function get_template_1(string $search_cust_pria , string $search_cust_wanita){
        $tmplt_custr = Template_customer::where('nama_panggilan_pria' ,'LIKE' ,"%".$search_cust_pria."%")->where('nama_panggilan_wanita', 'LIKE' , "%".$search_cust_wanita."%")->where('kode_template' , 'C01')->first();
        $gallerys = null;
        if(!empty($tmplt_custr)) {
            $gallerys = Foto_gallery::where('template_id' , $tmplt_custr->id)->where('user_id',  $tmplt_custr->user_id)->get();
        }
        $data =['tmplt_custr' => $tmplt_custr ,'gallerys' => $gallerys ];

        return !is_null($gallerys) ? view('product_design.design_C01' , $data ) : view('product_design.design_C01' , $data );
    }
    
    public function index_tempalet_2(){
        return view('product_design.design_C02');
    }
    
    public function get_template_2(string $search_cust_pria , string $search_cust_wanita){
        $tmplt_custr = Template_customer::where('nama_panggilan_pria' ,'LIKE' ,"%".$search_cust_pria."%")->where('nama_panggilan_wanita', 'LIKE' , "%".$search_cust_wanita."%")->where('kode_template' , 'C02')->first();
        $gallerys = null;
        if(!empty($tmplt_custr)) {
            $gallerys = Foto_gallery::where('template_id' , $tmplt_custr->id)->where('user_id',  $tmplt_custr->user_id)->get();
            $komentars = Komentar::where('template_id' , $tmplt_custr->id)->get();
        } else {
            return 'not found';
        }
        $data =['tmplt_custr' => $tmplt_custr ,'gallerys' => $gallerys , 'komentars' => $komentars ];

        return !is_null($gallerys) ? view('product_design.design_C02' , $data ) : view('product_design.design_C02' , $data );
    }

    public function index_tempalet_3(){
        return view('product_design.design_C03');
    }

    public function get_template_3(string $search_cust_pria , string $search_cust_wanita)
    {
        $tmplt_custr = Template_customer::where('nama_panggilan_pria' ,'LIKE' ,"%".$search_cust_pria."%")->where('nama_panggilan_wanita', 'LIKE' , "%".$search_cust_wanita."%")->where('kode_template' , 'C03')->first();
        $gallerys = null;
        if(!empty($tmplt_custr)) {
            $gallerys = Foto_gallery::where('template_id' , $tmplt_custr->id)->where('user_id',  $tmplt_custr->user_id)->get();
            $komentars = Komentar::where('template_id' , $tmplt_custr->id)->get();
        } else {
            return 'not found';
        }
        $data =['tmplt_custr' => $tmplt_custr ,'gallerys' => $gallerys , 'komentars' => $komentars ];

        return !is_null($gallerys) ? view('product_cust_design.design_C03' , $data ) : view('product_cust_design.design_C03' , $data );
    }
}
