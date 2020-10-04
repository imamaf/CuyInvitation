@extends('layouts.master')

   <script src="{{ asset('./assets/js/core/jquery.min.js') }}"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

@section('title')
Template Customer | CuyInvitation
@endsection

@section('header')
Template Customer
@endsection

@section('cari')
Template Customer
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Data (List Template Customer)</h4>
                <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
            </div>
            <div class="card-body">
             <!-- STATUS MESSAGE -->
                @if (session('status'))
                <p style="color:green">
                    {{ session('status') }}
                </p>
                @endif
                @if (session('error') || !empty($notFound) )
                <p style="color:red">
                    <?php echo !empty($error) ? $error:$notFound ?>
                </p>
                @endif  
                <button data-toggle="modal" data-target="#myModalAdd1" type="button" onclick="resetForm()" class="btn btn-primary">Tambah</button>
                <div class="table-responsive">
                    <table class="table table-hover scroll-horizontal-vertical w-100" id="datatables">
                        <thead class=" text-primary">
                            {{-- <th>No</th> --}}
                            <th>Kode</th>
                            <th>Nama Mempelai Pria</th>
                            <th>Nama Mempelai Wanita</th>
                            <th>Links Preview</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal VIEW -->
<section>
    <div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="links_view" placeholder="Link" name="links_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="nama_mempelai_pria_view" placeholder="Nama Mempelai Pria" name="nama_mempelai_pria_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="nama_mempelai_wanita_view" placeholder="Telepon" name="nama_mempelai_wanita_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="nama_orang_tua_pria_ibu_view" placeholder="Nama Orang Tua Pria(Ibu)" name="nama_orang_tua_pria_ibu_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="nama_orang_tua_pria_bapak_view" placeholder="Nama Orang Tua Pria(Bpk)" name="nama_orang_tua_pria_bapak_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="nama_orang_tua_wanita_bapak_view" placeholder="Nama Orang Tua Wanita(Bpk)" name="nama_orang_tua_wanita_bapak_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="nama_orang_tua_wanita_ibu_view" placeholder="Lokasi Akad" name="nama_orang_tua_wanita_ibu_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="tgl_akad_view" placeholder="Tanggal Akad" name="tgl_akad_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="tgl_resepsi_view" placeholder="Tanggal Resepsi" name="tgl_resepsi_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="path_foto_pria_view" placeholder="Foto Pria" name="path_foto_pria_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="path_foto_wanita_view" placeholder="Foto Wanita" name="path_foto_wanita_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="deskripsi_view" placeholder="Deskripsi" name="deskripsi_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="gedung_akad_view" placeholder="Gedung Akad" name="gedung_akad_view">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="gedung_resepsi_view" placeholder="Gedung Resepsi" name="gedung_resepsi_view">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                </div>
            </div>
        </div>
</section>

<!-- Modal TAMBAH-->
<section>
<form id="actionAddTemplateCustomer" action="{{url('add/template-customer')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="myModalAdd1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Biodata</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
               <fieldset style="display: block;">
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 1 / 4</h3>
                        <p>Lengkapi data berikut</p>
                     </div>
                        <div class="form-group">
                            <label>Banner</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInp3" name="banner" class="custom-file-input" required>
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img class="img-thumbnail" id="img-upload3" style="width : 200px; heigth: 200px" />
                        </div>
                        <div class="form-group">
                        <label> ID User </label>
                            <select class="form-control" id="user_id" name="user_id" value="">
                                @foreach ($userDropdown as $usrDrpdwn)
                                <option value="{{$usrDrpdwn->id}}">{{$usrDrpdwn->id}} - {{$usrDrpdwn->name}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                        <label> Kode Template </label>
                            <select class="form-control" id="kode_template" name="kode_template" value="">
                                <option>Pilih ...</option>
                                @foreach ($templateCompany as $item)
                                <option value="{{ $item->template_company_kode }}">{{ $item->nama_template }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <label for="tgl_akad">Tanggal Akad</label>
                            <div class="form-group">
                                <input type="text" name="tgl_akad" class="form-control" id="tgl_akad" style="background-color:white"/>
                                    <script>
                                        $('#tgl_akad').datetimepicker({ footer: true, modal: true, format:"yyyy-mm-dd HH:MM:ss", });
                                </script>
                              </div>
                        </div>
                        <div class="col-md-6">
                        <label for="npm">Tanggal Resepsi</label>
                        <div class="form-group">
                            <input type="text" name="tgl_resepsi" class="form-control" id="tgl_resepsi" style="background-color:white"/>
                                <script>
                                    $('#tgl_resepsi').datetimepicker({ footer: true, modal: true, format:"yyyy-mm-dd HH:MM:ss", });
                            </script>
                          </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="latitude" placeholder="Latitude" name="latitude">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="longitude" placeholder="Longitude" name="longitude">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="gedung_akad" placeholder="Nama Gedung Akad" name="gedung_akad">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="gedung_resepsi" placeholder="Nama Gedung Resepsi" name="gedung_resepsi">
                            </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="deskripsi" id="deskripsi"> </textarea>
                        </div>
                     <button type="button" class="btn btn-next">Next</button>
                  </div>
               </fieldset>
         </div>
      </div>
   </div>
</div>
{{-- STEPS 2 --}}
<div class="modal fade" id="myModalAdd2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Biodata (Pria)</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
               <fieldset style="display: block;">
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 2 / 4</h3>
                        <p>Lengkapi data berikut</p>
                     </div>
                        <div class="form-group">
                            <label>Foto Mempelai Pria</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInp1" name="path_foto_pria" class="custom-file-input" required>
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img class="img-thumbnail" id="img-upload1" style="width : 200px; heigth: 200px" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_panggilan_pria" placeholder="Nama Panggilan" name="nama_panggilan_pria">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_mempelai_pria" placeholder="Nama Lengkap" name="nama_mempelai_pria">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_pria_bapak" placeholder="Nama Bapak" name="nama_orang_tua_pria_bapak">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_pria_ibu" placeholder="Nama Ibu" name="nama_orang_tua_pria_ibu">
                        </div>
                    <button type="button" class="btn btn-previous btn-prev">Previous</button>
                     <button type="button" class="btn btn-next">Next</button>
                  </div>
               </fieldset>
         </div>
      </div>
   </div>
</div>
{{-- STEPS 3 --}}
<div class="modal fade" id="myModalAdd3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Biodata (Wanita)</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
               <fieldset style="display: block;">
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 3 / 4</h3>
                        <p>Lengkapi data berikut</p>
                     </div>
                        <div class="form-group">
                            <label>Foto Mempelai Wanita</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInp2" name="path_foto_wanita" class="custom-file-input" required>
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img class="img-thumbnail" id='img-upload2' style="width : 200px; heigth: 200px" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_panggilan_wanita" placeholder="Nama Panggilan" name="nama_panggilan_wanita">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_mempelai_wanita" placeholder="Nama Lengkap" name="nama_mempelai_wanita">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_wanita_bapak" placeholder="Nama Bapak" name="nama_orang_tua_wanita_bapak">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_wanita_ibu" placeholder="Nama Ibu" name="nama_orang_tua_wanita_ibu">
                        </div>
                    <button type="button" class="btn btn-previous btn-prev">Previous</button>
                     <button type="button" class="btn btn-next">Next</button>
                  </div>
               </fieldset>
         </div>
      </div>
   </div>
</div>
{{-- STEPS 4 --}}
<div class="modal fade" id="myModalAdd4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content" style="width:700px">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Biodata Pasangan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
               <fieldset style="display: block;">
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 4 / 4</h3>
                        <p>Lengkapi data berikut</p>
                     </div>
                       <div class="row">
                           <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <div   div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="path_foto[]"  class="custom-file-input" id="imgInpGallery1">
                                        <input type="text" class="form-control" id="command_gallery1" value="" name="command_gallery[]" style="display: none">
                                        <label class="custom-file-label" for="imgInpGallery1">Choose file</label>
                                    </div>
                                </div>
                                <a onclick="thisFileUpload('imgInpGallery1')">
                                    <img src="{{ asset('/assets/images/add-image.png') }}" class="img-thumbnail" id="img-uploadGallery1" style="width : 200px; heigth: 200px" />
                                </a>
                             </div>
                           </div>
                           <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <div   div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="path_foto[]"  class="custom-file-input" id="imgInpGallery2">
                                       <input type="text" class="form-control" id="command_gallery2" value="" name="command_gallery[]" style="display: none">
                                        <label class="custom-file-label" for="imgInpGallery2">Choose file</label>
                                    </div>
                                </div>
                                <a onclick="thisFileUpload('imgInpGallery2')">
                                    <img src="{{ asset('/assets/images/add-image.png') }}" class="img-thumbnail" id="img-uploadGallery2" style="width : 200px; heigth: 200px" />
                                </a>
                             </div>
                           </div>
                           <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <div   div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="path_foto[]"  class="custom-file-input" id="imgInpGallery3">
                                        <input type="text" class="form-control" id="command_gallery3" value="" name="command_gallery[]" style="display: none">
                                        <label class="custom-file-label" for="imgInpGallery3">Choose file</label>
                                    </div>
                                </div>
                                <a onclick="thisFileUpload('imgInpGallery3')">
                                    <img src="{{ asset('/assets/images/add-image.png') }}" class="img-thumbnail" id="img-uploadGallery3" style="width : 200px; heigth: 200px" />
                                </a>
                             </div>
                           </div>
                           <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <div   div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="path_foto[]"  class="custom-file-input" id="imgInpGallery4">
                                        <input type="text" class="form-control" id="command_gallery4" value="" name="command_gallery[]" style="display: none">
                                        <label class="custom-file-label" for="imgInpGallery4">Choose file</label>
                                    </div>
                                </div>
                                <a onclick="thisFileUpload('imgInpGallery4')">
                                    <img src="{{ asset('/assets/images/add-image.png') }}" class="img-thumbnail" id="img-uploadGallery4" style="width : 200px; heigth: 200px" />
                                </a>
                             </div>
                           </div>
                           <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <div   div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="path_foto[]"  class="custom-file-input" id="imgInpGallery5">
                                        <input type="text" class="form-control" id="command_gallery5" value="" name="command_gallery[]" style="display: none">
                                        <label class="custom-file-label" for="imgInpGallery5">Choose file</label>
                                    </div>
                                </div>
                                <a onclick="thisFileUpload('imgInpGallery5')">
                                    <img src="{{ asset('/assets/images/add-image.png') }}" class="img-thumbnail" id="img-uploadGallery5" style="width : 200px; heigth: 200px" />
                                </a>
                             </div>
                           </div>
                           <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <div   div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="path_foto[]"  class="custom-file-input" id="imgInpGallery6">
                                        <input type="text" class="form-control" id="command_gallery6" value="" name="command_gallery[]" style="display: none">
                                        <label class="custom-file-label" for="imgInpGallery6">Choose file</label>
                                    </div>
                                </div>
                                <a onclick="thisFileUpload('imgInpGallery6')">
                                    <img src="{{ asset('/assets/images/add-image.png') }}" class="img-thumbnail" id="img-uploadGallery6" style="width : 200px; heigth: 200px" />
                                </a>
                             </div>
                           </div>
                           <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <div   div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="path_foto[]"  class="custom-file-input" id="imgInpGallery7">
                                        <input type="text" class="form-control" id="command_gallery7" value="" name="command_gallery[]" style="display: none">
                                        <label class="custom-file-label" for="imgInpGallery7">Choose file</label>
                                    </div>
                                </div>
                                <a onclick="thisFileUpload('imgInpGallery7')">
                                    <img src="{{ asset('/assets/images/add-image.png') }}" class="img-thumbnail" id="img-uploadGallery7" style="width : 200px; heigth: 200px" />
                                </a>
                             </div>
                           </div>
                           <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <div   div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="path_foto[]"  class="custom-file-input" id="imgInpGallery8">
                                        <input type="text" class="form-control" id="command_gallery8" value="" name="command_gallery[]" style="display: none">
                                        <label class="custom-file-label" for="imgInpGallery8">Choose file</label>
                                    </div>
                                </div>
                                <a onclick="thisFileUpload('imgInpGallery8')">
                                    <img src="{{ asset('/assets/images/add-image.png') }}" class="img-thumbnail" id="img-uploadGallery8" style="width : 200px; heigth: 200px" />
                                </a>
                             </div>
                           </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <div   div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="path_foto[]"  class="custom-file-input" id="imgInpGallery9">
                                        <input type="text" class="form-control" id="command_gallery9" value="" name="command_gallery[]" style="display: none">
                                        <label class="custom-file-label" for="imgInpGallery9">Choose file</label>
                                    </div>
                                </div>
                                <a onclick="thisFileUpload('imgInpGallery9')">
                                    <img src="{{ asset('/assets/images/add-image.png') }}" class="img-thumbnail" id="img-uploadGallery9" style="width : 200px; heigth: 200px" />
                                </a>
                             </div>
                           </div>
                       </div>
                        <input type="text" class="form-control" value="add" style="display:none" id="command" name="command">
                        <input type="text" class="form-control" value="" style="display:none" id="command_gallery" name="command_gallery[]">
                     <button type="button" class="btn btn-previous btn-prev">Previous</button>
                     <button type="button" id="submitTambah" class="btn btn-simpan-add">Simpan</button>
                  </div>
               </fieldset>
         </div>
      </div>
   </div>
</div>
</form>

<style>
    .modal {
    overflow-y:auto;
    }
    @import url(https://fonts.googleapis.com/icon?family=Material+Icons);
@import url('https://fonts.googleapis.com/css?family=Raleway');

// variables
$base-color: cadetblue;
$base-font: 'Raleway', sans-serif;


.wrapper{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}

h1 {
  font-family: inherit;
  margin: 0 0 .75em 0;
  color: desaturate($base-color, 15%);
  text-align: center;
}

.box {
  display: block;
  /* min-width: 300px; */
  height: 300px;
  margin: 10px;
  background-color: white;
  border-radius: 5px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  overflow: hidden;
}

.upload-options {
  position: relative;
  height: 75px;
  background-color: $base-color;
  cursor: pointer;
  overflow: hidden;
  text-align: center;
  transition: background-color ease-in-out 150ms;
  &:hover {
    background-color: lighten($base-color, 10%);
  }
  & input {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }
  & label {
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    font-weight: 400;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    overflow: hidden;
    &::after {
      content: 'add'; 
      font-family: 'Material Icons';
      position: absolute;
      font-size: 2.5rem;
      color: rgba(230, 230, 230, 1);
      top: calc(50% - 2.5rem);
      left: calc(50% - 1.25rem);
      z-index: 0;
    }
    & span {
      display: inline-block;
      width: 50%;
      height: 100%;
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
      vertical-align: middle;
      text-align: center;
      &:hover i.material-icons {
        color: lightgray;        
      }
    }
  }
}


.js--image-preview {
  height: 225px;
  width: 100%;
  position: relative;
  overflow: hidden;
  background-image: url('');
  background-color: white;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  &::after {
    content: "photo_size_select_actual"; 
    font-family: 'Material Icons';
    position: relative;
    font-size: 4.5em;
    color: rgba(230, 230, 230, 1);
    top: calc(50% - 3rem);
    left: calc(50% - 2.25rem);
    z-index: 0;
  }
  &.js--no-default::after {
    display: none;
  }
  &:nth-child(2) {
    background-image: url('http://bastianandre.at/giphy.gif');
  }
}

i.material-icons {
  transition: color 100ms ease-in-out;
  font-size: 2.25em;
  line-height: 55px;
  color: white;
  display: block;
}

.drop {
  display: block;
  position: absolute;
  background: transparentize($base-color, .8);
  border-radius: 100%;
  transform:scale(0);
}

.animate {
  animation: ripple 0.4s linear;
}

@keyframes ripple {
    100% {opacity: 0; transform: scale(2.5);}
}
    </style>
</section>


<!-- SECTION MODAL DELETE -->
@section('message')
    menghapus data ini
@endsection

@section('url')
 /delete-user/
@endsection
@include('layouts.modal-info.modal-info')
<!-- END -->

@endsection
@section('scripts')
<script>
    var datatable = $('#datatables').DataTable({
        processing: true,
        serverSide: true,
         ordering   : true,
        ajax : {
                url : '{!! url()->current()  !!}'    
        },
        columns: [
            { data: 'kode_template', name: 'kode_template' ,  width : '10%' },
            { data: 'nama_mempelai_pria', name: 'nama_mempelai_pria', width : '20%' },
            { data: 'nama_mempelai_wanita', name: 'nama_mempelai_wanita',  width : '20%' },
            {
             data: 'links_preview',
             name: 'links_preview',
             orderable: false, 
             searchable: false
              },
            // {data:'',defaultContent:nama_mempelai_wanita},
            { 
                data: 'action',
                name: 'action' ,
                orderble : false,
                searcable : false ,
            },

        ]
    });
</script>

<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace("deskripsi");
  function thisFileUpload(fileId) {
    document.getElementById(fileId).click();
    }

   function resetForm(){
       this.resetFormGallery();
            console.log('resetForm')
                $('#img-upload1').attr('src', '');
                $('#img-upload2').attr('src', '');
                $('#img-upload3').attr('src', '');
                $('#links').val('');
                $('#user_id').val('');
                $('#kode_template').val('');
                $('#nama_panggilan_pria').val('');
                $('#nama_panggilan_wanita').val('');
                $('#nama_mempelai_pria').val('');
                $('#nama_mempelai_wanita').val('');
                $('#nama_orang_tua_pria_ibu').val('');
                $('#nama_orang_tua_pria_bapak').val('');
                $('#nama_orang_tua_wanita_bapak').val('');
                $('#nama_orang_tua_wanita_ibu').val('');
                $('#lokasi_akad').val('');
                $('#tgl_akad').val('');
                $('#tgl_resepsi').val('');
                $('#deskripsi').val('');
                $('#latitude').val('');
                $('#longitude').val('');
                $('#gedung_akad').val('');
                $('#gedung_resepsi').val('');
                $('#actionAddTemplateCustomer').attr('action' , '/add/template-customer/');
            }
            function resetFormGallery(){
                console.log('resetFormgallery')
              $('#command_gallery1').val('');
              $('#command_gallery2').val('');
              $('#command_gallery3').val('');
              $('#command_gallery4').val('');
              $('#command_gallery5').val('');
              $('#command_gallery6').val('');
              $('#command_gallery7').val('');
              $('#command_gallery8').val('');
              $('#command_gallery9').val('');
              $('#imgInpGallery1').attr('name', 'path_foto[]');
              $('#imgInpGallery2').attr('name', 'path_foto[]');
              $('#imgInpGallery3').attr('name', 'path_foto[]');
              $('#imgInpGallery4').attr('name', 'path_foto[]');
              $('#imgInpGallery5').attr('name', 'path_foto[]');
              $('#imgInpGallery6').attr('name', 'path_foto[]');
              $('#imgInpGallery7').attr('name', 'path_foto[]');
              $('#imgInpGallery8').attr('name', 'path_foto[]');
              $('#imgInpGallery9').attr('name', 'path_foto[]');
              $('#img-uploadGallery1').attr('src', '/assets/images/add-image.png');
              $('#img-uploadGallery2').attr('src', '/assets/images/add-image.png');
              $('#img-uploadGallery3').attr('src', '/assets/images/add-image.png');
              $('#img-uploadGallery4').attr('src', '/assets/images/add-image.png');
              $('#img-uploadGallery5').attr('src', '/assets/images/add-image.png');
              $('#img-uploadGallery6').attr('src', '/assets/images/add-image.png');
              $('#img-uploadGallery7').attr('src', '/assets/images/add-image.png');
              $('#img-uploadGallery8').attr('src', '/assets/images/add-image.png');
              $('#img-uploadGallery9').attr('src', '/assets/images/add-image.png');
        }

    $(document).ready(function() {
        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = label;

            if (input.length) {
                input.val(log);
            } else {
                if (log) alert(log);
            }

        });

        function readURL(input , from) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    console.log('frooom ' , from)
                    if(from == "img1") {
                        $('#img-upload1').attr('src', e.target.result);
                    } else if (from == "img2") {
                        $('#img-upload2').attr('src', e.target.result);
                    } else if (from == "img3") {
                        $('#img-upload3').attr('src', e.target.result);
                        // GALLERY
                    } else if (from == "imgGallery1") {
                        $('#img-uploadGallery1').attr('src', e.target.result);
                    } else if (from == "imgGallery2") {
                        $('#img-uploadGallery2').attr('src', e.target.result);
                    } else if (from == "imgGallery3") {
                        $('#img-uploadGallery3').attr('src', e.target.result);
                    } else if (from == "imgGallery4") {
                        $('#img-uploadGallery4').attr('src', e.target.result);
                    } else if (from == "imgGallery5") {
                        $('#img-uploadGallery5').attr('src', e.target.result);
                    } else if (from == "imgGallery6") {
                        $('#img-uploadGallery6').attr('src', e.target.result);
                    } else if (from == "imgGallery7") {
                        $('#img-uploadGallery7').attr('src', e.target.result);
                    } else if (from == "imgGallery8") {
                        $('#img-uploadGallery8').attr('src', e.target.result);
                    } else if (from == "imgGallery9") {
                        $('#img-uploadGallery9').attr('src', e.target.result);
                    }
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgInp1").change(function() {
            readURL(this , "img1");
        });
        $("#imgInp2").change(function() {
            readURL(this , "img2");
        });
        $("#imgInp3").change(function() {
            readURL(this , "img3");
        });
        $("#imgInpGallery1").change(function() {
            readURL(this , "imgGallery1");
        });
        $("#imgInpGallery2").change(function() {
            readURL(this , "imgGallery2");
        });
        $("#imgInpGallery3").change(function() {
            readURL(this , "imgGallery3");
        });
        $("#imgInpGallery4").change(function() {
            readURL(this , "imgGallery4");
        });
        $("#imgInpGallery5").change(function() {
            readURL(this , "imgGallery5");
        });
        $("#imgInpGallery6").change(function() {
            readURL(this , "imgGallery6");
        });
        $("#imgInpGallery7").change(function() {
            readURL(this , "imgGallery7");
        });
        $("#imgInpGallery8").change(function() {
            readURL(this , "imgGallery8");
        });
        $("#imgInpGallery9").change(function() {
            readURL(this , "imgGallery9");
        });

        $(document).on('click', '.open_modal_update', function() {
            resetFormGallery();
            var url = "/getTemplateCustomerById";
            var tour_id = $(this).attr("value");
            $.get(url + '/' + tour_id, function(data) {
                //success data
                console.log('id : ', data);
                $('#links').val(data.links);
                $('#img-upload3').attr('src', 'storage/' + data.banner);
                $('#img-upload1').attr('src', 'storage/' + data.path_foto_pria);
                $('#img-upload2').attr('src', 'storage/' + data.path_foto_wanita);
                $('#kode_template').val(data.kode_template);
                $('#user_id').val(data.user_id);
                $('#nama_panggilan_pria').val(data.nama_panggilan_pria);
                $('#nama_panggilan_wanita').val(data.nama_panggilan_wanita);
                $('#nama_mempelai_pria').val(data.nama_mempelai_pria);
                $('#nama_mempelai_wanita').val(data.nama_mempelai_wanita);
                $('#nama_orang_tua_pria_ibu').val(data.nama_orang_tua_pria_ibu);
                $('#nama_orang_tua_pria_bapak').val(data.nama_orang_tua_pria_bapak);
                $('#nama_orang_tua_wanita_bapak').val(data.nama_orang_tua_wanita_bapak);
                $('#nama_orang_tua_wanita_ibu').val(data.nama_orang_tua_wanita_ibu);
                $('#lokasi_akad').val(data.lokasi_akad);
                $('#latitude').val(data.latitude);
                $('#longitude').val(data.longitude);
                $('#tgl_akad').val(data.tgl_akad);
                $('#tgl_resepsi').val(data.tgl_resepsi);
                $('#gedung_akad').val(data.gedung_akad);
                $('#gedung_resepsi').val(data.gedung_resepsi);
                $('#gedung_resepsi').val('');
                var editor = CKEDITOR.instances['deskripsi'];  
                editor.setData(data.deskripsi);
                $('#command').val("update");
                $('#myModalAdd1').modal('show');
                $('#actionAddTemplateCustomer').attr('action' , '/update-template-customer/' + tour_id);
            })
            $.get('/getFotoGalleryById/' + tour_id, function(data) {
                //success data
                console.log('data : ', data);
                for (i = 0; i < data.length; ++i) {       
                    if(data[0] != undefined ){
                        $('#command_gallery1').val(data[0].id);
                         $('#imgInpGallery1').attr('name', 'path_foto_update[]');
                        $('#img-uploadGallery1').attr('src', 'storage/' + data[0].path_foto);
                    } 
                    if(data[1] != undefined ){
                        $('#img-uploadGallery2').attr('src', 'storage/' + data[1].path_foto);
                         $('#imgInpGallery2').attr('name', 'path_foto_update[]');
                        $('#command_gallery2').val(data[1].id);
                    } 
                    if(data[2] != undefined ){
                        $('#img-uploadGallery3').attr('src', 'storage/' + data[2].path_foto);
                         $('#imgInpGallery3').attr('name', 'path_foto_update[]');
                        $('#command_gallery3').val(data[2].id);
                    } 
                    if(data[3] != undefined ){
                        $('#img-uploadGallery4').attr('src', 'storage/' + data[3].path_foto);
                         $('#imgInpGallery4').attr('name', 'path_foto_update[]');
                        $('#command_gallery4').val(data[3].id);
                    } 
                    if(data[4] != undefined ){
                        $('#img-uploadGallery5').attr('src', 'storage/' + data[4].path_foto);
                         $('#imgInpGallery5').attr('name', 'path_foto_update[]');
                        $('#command_gallery5').val(data[4].id);
                    } 
                    if(data[5] != undefined ){
                        $('#img-uploadGallery6').attr('src', 'storage/' + data[5].path_foto);
                        $('#imgInpGallery6').attr('name', 'path_foto_update[]');
                        $('#command_gallery6').val(data[5].id);
                    } 
                    if(data[6] != undefined ){
                        $('#img-uploadGallery7').attr('src', 'storage/' + data[6].path_foto);
                        $('#imgInpGallery7').attr('name', 'path_foto_update[]');
                        $('#command_gallery7').val(data[6].id);
                    } 
                    if(data[7] != undefined ){
                        $('#img-uploadGallery8').attr('src', 'storage/' + data[7].path_foto);
                        $('#command_gallery8').val(data[7].id);
                    } 
                    if(data[8] != undefined ){
                        $('#img-uploadGallery9').attr('src', 'storage/' + data[8].path_foto);
                        $('#imgInpGallery9').attr('name', 'path_foto_update[]');
                        $('#command_gallery9').val(data[8].id);
                    } 
                }
            })

        });

        // onclick BUTTON SUBMIT TAMBAH
        $(document).on("click", ".btn-simpan-add", function(){
            var command = $('#command').val();
                document.getElementById("actionAddTemplateCustomer").submit(); 
        });

        $(document).on('click', '.open_modal-delete', function() {
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);

            $('#action-info').attr('action' , '/delete-template-customer/' + tour_id);

            $('#modal-info').modal('show');
         });
    });
    $(document).on('click', '.open_modal_view', function() {
            var url = "/getTemplateCustomerById";
            var tour_id = $(this).attr("value");
                console.log('id : ', tour_id);
            $.get(url + '/' + tour_id, function(data) {
                //success data
                console.log('data : ', data);
                $('#links_view').val(data.links);
                $('#nama_mempelai_pria_view').val(data.nama_mempelai_pria);
                $('#nama_mempelai_wanita_view').val(data.nama_mempelai_wanita);
                $('#nama_orang_tua_pria_ibu_view').val(data.nama_orang_tua_pria_ibu);
                $('#nama_orang_tua_pria_bapak_view').val(data.nama_orang_tua_pria_bapak);
                $('#nama_orang_tua_wanita_bapak_view').val(data.nama_orang_tua_wanita_bapak);
                $('#nama_orang_tua_wanita_ibu_view').val(data.nama_orang_tua_wanita_ibu);
                $('#lokasi_akad_view').val(data.lokasi_akad);
                $('#tgl_akad_view').val(data.tgl_akad);
                $('#tgl_resepsi_view').val(data.tgl_resepsi);
                $('#deskripsi_view').val(data.deskripsi);
                $('#gedung_akad_view').val(data.gedung_akad);
                $('#gedung_resepsi_view').val(data.gedung_resepsi);
                $('#btn-save').val("update");
                $('#modalView').modal('show');
            })
        });

$("div[id^='myModal']").each(function(){
  
  var currentModal = $(this);
  
  //click next
  currentModal.find('.btn-next').click(function(){
    currentModal.modal('hide');
    currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show'); 
  });
  
  //click prev
  currentModal.find('.btn-prev').click(function(){
    currentModal.modal('hide');
    currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
  });
  //click next
  currentModal.find('.btn-next').click(function(){
    currentModal.modal('hide');
    currentModal.closest("div[id^='myModalAdd']").nextAll("div[id^='myModalAdd']").first().modal('show'); 
  });
  
  //click prev
  currentModal.find('.btn-prev').click(function(){
    currentModal.modal('hide');
    currentModal.closest("div[id^='myModalAdd']").prevAll("div[id^='myModalAdd']").first().modal('show'); 
  });


});
function initImageUpload(box) {
  let uploadField = box.querySelector('.image-upload');

  uploadField.addEventListener('change', getFile);

  function getFile(e){
    let file = e.currentTarget.files[0];
    checkType(file);
  }
  
  function previewImage(file){
    let thumb = box.querySelector('.js--image-preview'),
        reader = new FileReader();

    reader.onload = function() {
      thumb.style.backgroundImage = 'url(' + reader.result + ')';
    }
    reader.readAsDataURL(file);
    thumb.className += ' js--no-default';
  }

  function checkType(file){
    let imageType = /image.*/;
    if (!file.type.match(imageType)) {
      throw 'Datei ist kein Bild';
    } else if (!file){
      throw 'Kein Bild gewählt';
    } else {
      previewImage(file);
    }
  }
  
}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
  let box = boxes[i];
  initDropEffect(box);
  initImageUpload(box);
}



/// drop-effect
function initDropEffect(box){
  let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
  
  // get clickable area for drop effect
  area = box.querySelector('.js--image-preview');
  area.addEventListener('click', fireRipple);
  
  function fireRipple(e){
    area = e.currentTarget
    // create drop
    if(!drop){
      drop = document.createElement('span');
      drop.className = 'drop';
      this.appendChild(drop);
    }
    // reset animate class
    drop.className = 'drop';
    
    // calculate dimensions of area (longest side)
    areaWidth = getComputedStyle(this, null).getPropertyValue("width");
    areaHeight = getComputedStyle(this, null).getPropertyValue("height");
    maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

    // set drop dimensions to fill area
    drop.style.width = maxDistance + 'px';
    drop.style.height = maxDistance + 'px';
    
    // calculate dimensions of drop
    dropWidth = getComputedStyle(this, null).getPropertyValue("width");
    dropHeight = getComputedStyle(this, null).getPropertyValue("height");
    
    // calculate relative coordinates of click
    // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
    x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
    y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
    
    // position drop and animate
    drop.style.top = y + 'px';
    drop.style.left = x + 'px';
    drop.className += ' animate';
    e.stopPropagation();
    
  }
}

    
</script>

@endsection