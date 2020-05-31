<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TemplateCompany;

class AdminTemplateCompany extends Controller
{
    public function index() {
        $data = TemplateCompany::all();
        return view('admin.templatecompany', ['template_company' => $data]);
    }

    public function getTemplateById(Request $request) {
        $data = TemplateCompany::find($request->id);
        return $data;
    }

    public function updateTemplate(Request $request) {
        // dd($request->file('banner_1'));
        $request_banner = $request->file('banner_1');
        $path_banner = '';
        $dataFind = TemplateCompany::where('id', $request->id);
        if ($request_banner != null) {
            $path_banner = $request_banner->store('banner');
        } else {
            $path_banner = $dataFind->get()->first()->url_gambar;
        }
        $data = $dataFind->update([
            'nama_template' => $request->templateNameModal,
            'url_gambar' => $path_banner,
            'harga_template' => $request->priceModal,
            'deskripsi_template' => $request->descriptionModal
        ]);
        return redirect('/templatecompany')->with('status' , 'Data berhasil di update');
    }
    //
}
