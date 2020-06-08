<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto_gallery;
use App\Template_customer;
use App\User;

class AdminTemplateCustomerController extends Controller
{

    //   --------------------  CONTROLLER TEMPLATE CUSTOMER --------------
         // DATATABLE Template Customer
         public function viewTemplateCustomer()
         {
            $userDropdown = User::whereHas('role', function($query){
                $query->where('kode_role', '=', 'CSR');
            })->get();
             $template_customer = Template_customer::paginate(5);       
             return view('admin.template_customer.template_customer' , ['template_customer' => $template_customer , 'userDropdown' => $userDropdown] );
         }
         // GET TEMPLATE CLIENT BY ID
        public function getTemplateCustomerByIndex(Request $request)
        {
            $data = Template_customer::find($request->id);
            return $data;
        }
         // GET Foto Gallery BY ID
        public function getFotoGalleryByIndex(Request $request)
        {
            $data = Foto_gallery::where('template_id' , $request->id)->get();
            return $data;
        }

        // ADD TEMPLATE CUSTOMER
        public function addTemplateCustomer(Request $request)
        {
            $dir_foto_pria = $request->file('path_foto_pria')->store('foto mempelai pria');
            $dir_foto_wanita = $request->file('path_foto_wanita')->store('foto mempelai wanita');
           $template_customer = Template_customer::create([
                'user_id' => $request->user_id,
                'kode_template' => $request->kode_template,
                'links'=> $request->links ,
                'nama_mempelai_pria'=> $request->nama_mempelai_pria,
                'nama_mempelai_wanita'=> $request->nama_mempelai_wanita,
                'nama_orang_tua_pria_bapak'=> $request->nama_orang_tua_pria_bapak,
                'nama_orang_tua_pria_ibu'=> $request->nama_orang_tua_pria_ibu,
                'nama_orang_tua_wanita_bapak'=> $request->nama_orang_tua_wanita_bapak,
                'nama_orang_tua_wanita_ibu'=> $request->nama_orang_tua_wanita_ibu,
                'lokasi_akad'=> $request->lokasi_akad,
                'tgl_akad'=> $request->tgl_akad,
                'tgl_resepsi'=> $request->tgl_resepsi,
                'path_foto_pria'=> $dir_foto_pria,
                'path_foto_wanita'=> $dir_foto_wanita,
                'path_video'=> $request->path_video,
                'deskripsi'=> $request->deskripsi,
            ]);
            $files = $request->file('path_foto');
            if($request->file('path_foto'))
            {
                foreach ($files as $file) {
                   $image =  $file->store('template_customer');
                    Foto_gallery::create([
                        'user_id' => $template_customer->user_id,
                        'template_id' => $template_customer->id,
                        'path_foto'=> $image ,
                    ]);
                }
            }

            return redirect('/template-customer')->with('status' , 'Data berhasil di update');
        }  

        // UPDATE TEMPLATE CUSTOMER
        public function updateTemplateCustomer(Request $request , Template_customer $template_customer)
        {

            //     Template_customer::where('id' , $testimoni->id )->update([
            //     'nama' => $request->nama_Modal,
            //     'deskripsi'=> $request->deskripsi_Modal ,
            //     'rating'=> $request->rating_Modal,
            // ]);
            $files = $request->file('path_foto');
            if($request->hasFile('path_foto'))
            {
                foreach ($files as $file) {
                    $file->store('template_customer');
                    Foto_gallery::where('user_id' , $template_customer->id )->where('template_id' ,  $template_customer->kode_template)->update([
                        'path_foto'=> $file ,
                    ]);
                }
            }

            return redirect('/testimoni')->with('status' , 'Data berhasil di update');
        }  
    //
}
