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
        $tmplt_custr = Template_customer::where('nama_panggilan_pria' ,$search_cust_pria)->where('nama_panggilan_wanita', $search_cust_wanita)->where('kode_template' , 'C01')->where('aktif_flag' , 'Y')->first();
        $gallerys = null;
        if(!empty($tmplt_custr)) {
            $gallerys = Foto_gallery::where('template_id' , $tmplt_custr->id)->where('user_id',  $tmplt_custr->user_id)->get();
        }
        $data =['tmplt_custr' => $tmplt_custr ,'gallerys' => $gallerys ];

        return !is_null($tmplt_custr) ? view('product_cust_design.design_C01' , $data ) : 'Not Found';
    }
    
    public function index_tempalet_2(){
        return view('product_design.design_C02');
    }
    
    public function get_template_2(string $search_cust_pria , string $search_cust_wanita){
        $tmplt_custr = Template_customer::where('nama_panggilan_pria' ,$search_cust_pria)->where('nama_panggilan_wanita', $search_cust_wanita)->where('kode_template' , 'C02')->where('aktif_flag' , 'Y')->first();
        $gallerys = null;
        if(!empty($tmplt_custr)) {
            $gallerys = Foto_gallery::where('template_id' , $tmplt_custr->id)->where('user_id',  $tmplt_custr->user_id)->get();
            $komentars = Komentar::where('template_id' , $tmplt_custr->id)->get();
        } else {
            return 'not found';
        }
        $data =['tmplt_custr' => $tmplt_custr ,'gallerys' => $gallerys , 'komentars' => $komentars ];

        return !is_null($tmplt_custr) ? view('product_cust_design.design_C02', $data ) : 'NOT FOUND';
    }

    public function index_tempalet_3(){
        return view('product_design.design_C03');
    }

    public function get_template_3(string $search_cust_pria , string $search_cust_wanita)
    {
        $tmplt_custr = Template_customer::where('nama_panggilan_pria' ,$search_cust_pria)->where('nama_panggilan_wanita', $search_cust_wanita)->where('kode_template' , 'C03')->where('aktif_flag' , 'Y')->first();
        $gallerys = null;
        if(!empty($tmplt_custr)) {
            $gallerys = Foto_gallery::where('template_id' , $tmplt_custr->id)->where('user_id',  $tmplt_custr->user_id)->get();
            $komentars = Komentar::where('template_id' , $tmplt_custr->id)->get();
        } else {
            return 'not found';
        }
        $data =['tmplt_custr' => $tmplt_custr ,'gallerys' => $gallerys , 'komentars' => $komentars ];

        return !is_null($tmplt_custr) ? view('product_cust_design.design_C03' , $data ) : 'NOT FOUND';
    }
}
