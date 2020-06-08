@extends('layouts.master')


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
                <button data-toggle="modal" data-target="#myModalAdd1" type="button" class="btn btn-primary">Tambah</button>
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>No</th>
                            <th>Kode Template</th>
                            <th>Nama Pria</th>
                            <th>Nama Wanita</th>
                            <th>Links</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($template_customer as $result => $tmplt_cst)
                            <tr>
                                <td>{{$result + $template_customer->firstitem()}}</td>
                                <td>{{$tmplt_cst->kode_template}}</td>
                                <td>{{$tmplt_cst->nama_mempelai_pria}}</td>
                                <td>{{$tmplt_cst->nama_mempelai_wanita}}</td>
                                <td>{{$tmplt_cst->links}}</td>
                                <td>
                                    <a data-toggle="modal" href="#" class="btn btn-view open_modal_view" value="{{$tmplt_cst->id}}"><i class="far fa-eye"></i><a>
                                    <a data-toggle="modal" value="{{$tmplt_cst->id}}" href="#" class="btn btn-edit open_modal_update"><i class="far fa-edit"></i><a>
                                    <a data-toggle="modal" href="#" value="{{$tmplt_cst->id}}"  class="btn btn-delete open_modal-delete"><i class="far fa-trash-alt"></i><a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $template_customer->links() }}
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
            <h4 class="modal-title" id="myModalLabel">Biodata Pasangan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
               <fieldset style="display: block;">
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 1 / 2</h3>
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
                                <option value="C01">C01 - Template 1</option>
                                <option value="C02">C02 - Template 2</option>
                                <option value="C03">C03 - Template 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_mempelai_pria" placeholder="Nama Mempelai Pria" name="nama_mempelai_pria">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_mempelai_wanita" placeholder="Nama Mempelai Wanita" name="nama_mempelai_wanita">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_pria_bapak" placeholder="Nama Orang Tua Pria (Bpk)" name="nama_orang_tua_pria_bapak">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_pria_ibu" placeholder="Nama Orang Tua Pria (Ibu)" name="nama_orang_tua_pria_ibu">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_wanita_bapak" placeholder="Nama Orang Tua (Bpk)" name="nama_orang_tua_wanita_bapak">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_wanita_ibu" placeholder="Nama Orang Tua Wanita (Ibu)" name="nama_orang_tua_wanita_ibu">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="tgl_akad" placeholder="Tanggal Akad" name="tgl_akad">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="tgl_resepsi" placeholder="Tanggal Resepsi" name="tgl_resepsi">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi">
                        </div>
                     <button type="button" class="btn btn-next">Next</button>
                  </div>
               </fieldset>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModalAdd2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Foto Gallery</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 2 / 2</h3>
                        <p>Foto Gallery:</p>
                     </div>
                  </div>  
            <div class="col-md-12"> 
             <div class="wrapper">
                <div class="row"> 
                     <div class="col-md-4">
                        <div class="box">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[]" accept="image/*" />
                            </label>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="box">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[]" accept="image/*" />
                            </label>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="box">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[]" accept="image/*" />
                            </label>
                            </div>
                        </div>
                    </div>
                        
                     <div class="col-md-4">
                        <div class="box">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[]" accept="image/*" />
                            </label>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="box">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[]" accept="image/*" />
                            </label>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="box">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[]" accept="image/*" />
                            </label>
                            </div>
                        </div>
                    </div>
                        
                     <div class="col-md-4">
                        <div class="box">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[]" accept="image/*" />
                            </label>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="box">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[]" accept="image/*" />
                            </label>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="box">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[]" accept="image/*" />
                            </label>
                            </div>
                        </div>
                    </div>
                        
                    </div>
                    </div>
                </div>
                     <button type="button" class="btn btn-previous btn-prev">Previous</button>
                     <button type="button" id="submitTambah" class="btn btn-simpan-add">Simpan</button>
                  </div>
         </div>
      </div>
   </div>
</div>
</form>

<!-- Modal UPDATE-->
<section>
<form id="actionUpdate" action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Biodata Pasangan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
               <fieldset style="display: block;">
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 1 / 2</h3>
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
                            <input type="text" class="form-control" id="links_update" placeholder="Link" name="links_update">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_mempelai_pria_update" placeholder="Nama Mempelai Pria" name="nama_mempelai_pria_update">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_mempelai_wanita_update" placeholder="Telepon" name="nama_mempelai_wanita_update">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_pria_ibu_update" placeholder="Nama Orang Tua Pria(Ibu)" name="nama_orang_tua_pria_ibu_update">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_pria_bapak_update" placeholder="Nama Orang Tua Pria(Bpk)" name="nama_orang_tua_pria_bapak_update">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_wanita_bapak_update" placeholder="Nama Orang Tua Wanita(Bpk)" name="nama_orang_tua_wanita_bapak_update">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_orang_tua_wanita_ibu_update" placeholder="Lokasi Akad" name="nama_orang_tua_wanita_ibu_update">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="tgl_akad_update" placeholder="Tanggal Akad" name="tgl_akad_update">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="tgl_resepsi_update" placeholder="Tanggal Resepsi" name="tgl_resepsi_update">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="deskripsi_update" placeholder="Deskripsi" name="deskripsi_update">
                        </div>
                     <button type="button" class="btn btn-next">Next</button>
                  </div>
               </fieldset>
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Foto Gallery</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 2 / 2</h3>
                        <p>Foto Gallery:</p>
                     </div>
                  </div>  
            <div class="col-12"> 
             <div class="wrapper">
                <div class="row"> 
                        <div class="box col-4">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[1]" accept="image/*" />
                            </label>
                            </div>
                        </div>

                        <div class="box col-4">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[2]" accept="image/*" />
                            </label>
                            </div>
                        </div>

                        <div class="box col-4">
                            <div class="js--image-preview"></div>
                            <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" name="path_foto[3]" accept="image/*" />
                            </label>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                </div>
                     <button type="button" class="btn btn-previous btn-prev">Previous</button>
                     <button type="button" class="btn btn-submit-simpan">Simpan</button>
                  </div>
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
                    if(from == "img1") {
                        $('#img-upload1').attr('src', e.target.result);
                    } else if (from == "img2") {
                        $('#img-upload2').attr('src', e.target.result);
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

        $(document).on('click', '.open_modal_update', function() {
            var url = "/getTemplateCustomerById";
            var tour_id = $(this).attr("value");
                console.log('id : ', tour_id);
            $.get(url + '/' + tour_id, function(data) {
                //success data
                console.log('data : ', data);
                console.log("$('#links')", $('#linksModal'));
                $('#links_update').val(data.links);
                $('#nama_mempelai_pria_update').val(data.nama_mempelai_pria);
                $('#nama_mempelai_wanita_update').val(data.nama_mempelai_wanita);
                $('#nama_orang_tua_pria_ibu_update').val(data.nama_orang_tua_pria_ibu);
                $('#nama_orang_tua_pria_bapak_update').val(data.nama_orang_tua_pria_bapak);
                $('#nama_orang_tua_wanita_bapak_update').val(data.nama_orang_tua_wanita_bapak);
                $('#nama_orang_tua_wanita_ibu_update').val(data.nama_orang_tua_wanita_ibu);
                $('#lokasi_akad_update').val(data.lokasi_akad);
                $('#tgl_akad_update').val(data.tgl_akad);
                $('#tgl_resepsi_update').val(data.tgl_resepsi);
                $('#deskripsi_update').val(data.deskripsi);
                $('#btn-save').val("update");
                $('#myModal1').modal('show');


                // var url_gallery = "/getFotoGalleryById";

                // $.get(url_gallery + '/' + tour_id, function(datagallery) {
                //     var wrapper = document.getElementById("circle");
                //     console.log( 'sss' , wrapper);
                //     // sukses data gallery
                //     console.log('datagallery  : ', datagallery);
                //     var myHtml = '';
                //     for (var i = 0; i < datagallery.length; i++) {
                //         myHtml += '<div class="small-12 medium-2 large-2 columns"> <div class="circle"><img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg"></div><div class="p-image"><i class="fa fa-camera upload-button"></i> <input class="file-upload" type="file" accept="image/*"/> </div></div>';
                //     }
                //     console.log('inner HTML  : ', datagallery);

                //     wrapper.innerHTML= myHtml;

                // });
                 // onclick BUTTON SUBMIT UPDATE
                $(document).on('click', '.btn-submit-simpan', function() {
                    console.log('button submit' );
                    $('#actionUpdate').attr('action' , '/update-template-customer/' + tour_id);
                    document.getElementById("actionUpdate").submit(); 
                });
            })
        });

        // onclick BUTTON SUBMIT TAMBAH
        $(document).on("click", ".btn-simpan-add", function(){
            console.log('aa');
            document.getElementById("actionAddTemplateCustomer").submit(); 
        });

        $(document).on('click', '.open_modal-delete', function() {
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);

            $('#action-info').attr('action' , '/delete-web-company/' + tour_id);

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

  // js FOTO GALLERY
var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
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