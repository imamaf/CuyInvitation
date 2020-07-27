<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto_gallery;

class GalleryController extends Controller
{
    //
    public function getGalleryByTemplateId(Request $request) {
        $data = Foto_gallery::where('template_id' , $request->id)->get();
        return $data;
    }
}
