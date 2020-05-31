<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Template_customer;

class TemplateCustomerController extends Controller
{
    public function index_tempalet_1(){
        return view('product_design.design_C01');
    }

    public function get_template_1(Template_customer $template_customer){
        return view('product_design.design_C01' , ['template_customer' => $template_customer]);
    }
}
