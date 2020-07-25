<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;

class KomentarController extends Controller
{
    public function addKomentar(Request $request)
    {   
        $dir_foto = '';
        if($request->path_foto != null) {
            $dir_foto = $request->file('path_foto')->store('foto by komentar');
         }
         Komentar::create([
             'template_id' => $request->template_id,
             'nama' => $request->nama,
             'path_foto' => $dir_foto,
             'deskripsi' => $request->deskripsi,
         ]);
            
         return redirect(redirect()->back()->getTargetUrl());
    }
    //
}
