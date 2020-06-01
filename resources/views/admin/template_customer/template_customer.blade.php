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
                <!-- <button data-toggle="modal" data-target="#modalTambah" type="button" class="btn btn-primary">Tambah</button> -->
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


<!-- Modal UPDATE-->
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
         <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default btn-prev">Prev</button>
            <button type="button" class="btn btn-default btn-next">Next</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div> -->
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
                     <div class="form-group col">

                     <div class="row" id = "circle">
                        

                     </div>               
                     <button type="button" class="btn btn-previous btn-prev">Previous</button>
                     <button type="button" class="btn btn-submit-simpan">Simpan</button>
                  </div>
         </div>
      </div>
   </div>
</div>
</form>


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

<style>
.profile-pic {
    max-width: 200px;
    max-height: 200px;
    display: block;
}

.file-upload {
    display: none;
}
.circle {
    border-radius: 1000px !important;
    overflow: hidden;
    width: 128px;
    height: 128px;
    border: 8px solid rgba(255, 255, 255, 0.7);
    /* position: absolute; */
    top: 72px;
}
img {
    max-width: 100%;
    height: auto;
}
.p-image {
  /* position: absolute; */
  top: 167px;
  right: 30px;
  color: #666666;
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}
</style>


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

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img-upload1').attr('src', e.target.result);
                    $('#img-upload2').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgInp1").change(function() {
            readURL(this);
        });
        $("#imgInp2").change(function() {
            readURL(this);
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


                var url_gallery = "/getFotoGalleryById";

                $.get(url_gallery + '/' + tour_id, function(datagallery) {
                    var wrapper = document.getElementById("circle");
                    console.log( 'sss' , wrapper);
                    // sukses data gallery
                    console.log('datagallery  : ', datagallery);
                    var myHtml = '';
                    for (var i = 0; i < datagallery.length; i++) {
                        myHtml += '<div class="small-12 medium-2 large-2 columns"> <div class="circle"><img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg"></div><div class="p-image"><i class="fa fa-camera upload-button"></i> <input class="file-upload" type="file" accept="image/*"/> </div></div>';
                    }
                    console.log('inner HTML  : ', datagallery);

                    wrapper .innerHTML= myHtml;

                });

                $(document).on('click', '.btn-submit-simpan', function() {
                    console.log('button submit' );
                    $('#actionUpdate').attr('action' , '/update-template-customer/' + tour_id);
                    document.getElementById("actionUpdate").submit(); 
                });
            })
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
    
</script>

@endsection