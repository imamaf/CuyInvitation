<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplateCompany;

class DetailProdukController extends Controller
{
    //
    public function index()
    {
        return view('detailproduk');
    }

    public function getTemplateDetail(Request $request) {
        $templateDetail = TemplateCompany::where('id', $request->id)->get()->first();
        // dd($data);
        return view('detailproduk', compact('templateDetail'));
    }
}
