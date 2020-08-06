<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto_gallery;
use App\Template_customer;
use App\User;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class AdminTemplateCustomerController extends Controller
{

    //   --------------------  CONTROLLER TEMPLATE CUSTOMER --------------
         // DATATABLE Template Customer
        public function viewTemplateCustomer()
        {
        $id = auth()->user()->id;
        $user = User::with(['role'])->where('id' , $id)->get();
        if(request()->ajax())
        {
            $query = DB::table('template_customer');
            return Datatables::of($query)
                ->addColumn('links_preview', function($query) {
                    return '
                <a href="'.$query->links.'" >'.$query->links.'</a>
                    ' ;
                })
                ->addColumn('action', function($query) {
                    return '
                    <a data-toggle="modal" href="#" class="btn btn-view open_modal_view" value="'.$query->id.'"><i class="far fa-eye"></i></a>
                    <a data-toggle="modal" value="'.$query->id.'" href="#" class="btn btn-edit open_modal_update"><i class="far fa-edit"></i></a>
                    <a data-toggle="modal" href="#" value="'.$query->id.'" class="btn btn-delete open_modal-delete"><i class="far fa-trash-alt"></i></a>
                    ' ;
                })->make();
        }
           $userDropdown = User::whereHas('role', function($query){
                $query->where('kode_role', '=', 'CSR');
            })->get();
             $template_customer = Template_customer::paginate(5);       
        return view('admin.template_customer.template_customer', ['template_customer' => $template_customer , 'user' =>$user,  'userDropdown' => $userDropdown] );
        //
         }
        public function getTemplateCustomerByIndex(Request $request)
        {
            $data = Template_customer::find($request->id);
            return $data;
        }

        // ADD TEMPLATE CUSTOMER
        public function addTemplateCustomer(Request $request)
        {
            $dir_banner = $request->file('banner')->store('foto_banner_cust');
            $dir_foto_pria = $request->file('path_foto_pria')->store('foto_mempelai_pria');
            $dir_foto_wanita = $request->file('path_foto_wanita')->store('foto_mempelai_wanita');
            $link_preview = url('/').'/design_'.$request->kode_template.'/'.$request->nama_panggilan_pria.'-'.$request->nama_panggilan_wanita;
           $template_customer = Template_customer::create([
                'user_id' => $request->user_id,
                'kode_template' => $request->kode_template,
                'links'=> $link_preview ,
                'banner'=> $dir_banner ,
                'nama_panggilan_pria'=> $request->nama_panggilan_pria,
                'nama_mempelai_pria'=> $request->nama_mempelai_pria,
                'nama_panggilan_wanita'=> $request->nama_panggilan_wanita,
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
                'latitude'=> $request->latitude,
                'longitude'=> $request->longitude,
                'aktif_flag'=> 'Y',
            ]);
            $files = $request->file('path_foto');
            if($request->file('path_foto'))
            {
                foreach ($files as $file) {
                   $image =  $file->store('template_customer_gallery');
                    Foto_gallery::create([
                        'user_id' => $template_customer->user_id,
                        'template_id' => $template_customer->id,
                        'path_foto'=> $image ,
                    ]);
                }
            }
            Alert::success('Berhasil' , 'Data Berhasil Ditambahkan' );
            return redirect('/template-customer');
        }  

        // UPDATE TEMPLATE CUSTOMER
        public function updateTemplateCustomer(Request $request , Template_customer $template_customer)
        {
            // dd($request);
            $link_preview = url('/').'/design_'.$request->kode_template.'/'.$request->nama_panggilan_pria.'-'.$request->nama_panggilan_wanita;
            if(!empty($request->banner)){
                $dir_banner = $request->file('banner')->store('foto_banner_cust');
                Template_customer::where('id' ,  $template_customer->id)->update([
                    'banner'=> $dir_banner
                ]);
            }
            if(!empty($request->path_foto_pria)){
                $dir_foto_pria = $request->file('path_foto_pria')->store('foto_mempelai_pria');
                Template_customer::where('id' ,  $template_customer->id)->update([
                    'path_foto_pria'=> $dir_foto_pria,
                ]);
            }
            if(!empty($request->path_foto_wanita)){
                $dir_foto_wanita = $request->file('path_foto_wanita')->store('foto_mempelai_wanita');
                Template_customer::where('id' ,  $template_customer->id)->update([
                    'path_foto_wanita'=> $dir_foto_wanita,
                ]);
            }
            Template_customer::where('id' ,  $template_customer->id)->update([
                'user_id' => $request->user_id,
                'kode_template' => $request->kode_template,
                'links'=> $link_preview ,
                'nama_panggilan_pria'=> $request->nama_panggilan_pria,
                'nama_mempelai_pria'=> $request->nama_mempelai_pria,
                'nama_panggilan_wanita'=> $request->nama_panggilan_wanita,
                'nama_mempelai_wanita'=> $request->nama_mempelai_wanita,
                'nama_orang_tua_pria_bapak'=> $request->nama_orang_tua_pria_bapak,
                'nama_orang_tua_pria_ibu'=> $request->nama_orang_tua_pria_ibu,
                'nama_orang_tua_wanita_bapak'=> $request->nama_orang_tua_wanita_bapak,
                'nama_orang_tua_wanita_ibu'=> $request->nama_orang_tua_wanita_ibu,
                'lokasi_akad'=> $request->lokasi_akad,
                'tgl_akad'=> $request->tgl_akad,
                'tgl_resepsi'=> $request->tgl_resepsi,
                'path_video'=> $request->path_video,
                'deskripsi'=> $request->deskripsi,  
                'latitude'=> $request->latitude,
                'longitude'=> $request->longitude,    
            ]);
            $filesUpdate = $request->file('path_foto_update');
            // dd($filesUpdate);
            $gallleryId = $request->command_gallery;
            if(!empty($gallleryId) ){
                if(!empty($filesUpdate)) {
                    for ($i=0; $i < count($gallleryId); $i++) {
                        for($i = 0; $i < count($filesUpdate); $i++){
                            // $image =  $filesUpdate[$i]->store('template_customer');
                            // $image2 =  $filesUpdate[1]->store('template_customer');
                            // dd($image[0] . ' - ' . $image[1]);
                           if($gallleryId[0]) {
                               if($filesUpdate[0]) {
                               Foto_gallery::where('id' , $gallleryId[0])->update([
                                'user_id' => $template_customer->user_id,
                               'template_id' => $template_customer->id,
                               'path_foto'=> $filesUpdate[0]->store('template_customer_gallery') ,
           
                               ]);
                               }
                               
                           } 
                           if ($gallleryId[1] || $filesUpdate[1]){
                            //    dd($gallleryId[1]);
                               Foto_gallery::where('id' , $gallleryId[1])->update([
                                'user_id' => $template_customer->user_id,
                               'template_id' => $template_customer->id,
                               'path_foto'=> $filesUpdate[1]->store('template_customer_gallery')  ,
           
                               ]);
                           } 
                           if ($gallleryId[2]){
                               Foto_gallery::where('id' , $gallleryId[2])->update([
                                'user_id' => $template_customer->user_id,
                               'template_id' => $template_customer->id,
                               'path_foto'=> '3' ,
           
                               ]);
                           }
                       }
                           // } 
       
                           // if(!empty($foto_gallery)){
                           //     // Storage::delete($foto_gallery->path_foto);
                           //     $foto_gallery->delete();
       
                           // }
                       }       

                }
            }
            
            $files = $request->file('path_foto');
            if ($files > 0) {
                foreach($files as $file){
                    $image =  $file->store('template_customer');
                    Foto_gallery::create([
                        'user_id' => $template_customer->user_id,
                        'template_id' => $template_customer->id,
                        'path_foto'=> $image ,
                    ]);
                }
            }
        //      if(!empty($files)) {
        //         foreach($files as $file){
        //         $image =  $file->store('template_customer');
        //         Foto_gallery::create([
        //             'user_id' => $template_customer->user_id,
        //             'template_id' => $template_customer->id,
        //             'path_foto'=> $image ,
        //         ]);
        //         }
                
        // }
            Alert::success('Berhasil' , 'Data Berhasil Diubah' );
            return redirect('/template-customer');
         }

    public function deleteTempateCustomer(Template_customer $template_customer) {
        Foto_gallery::where('template_id', $template_customer->id)->get()->each->delete();
        $template_customer->delete();
        Alert::success('Berhasil' , 'Data Berhasil Dihapus' );
        return redirect('/template-customer');
    }

    //
}
