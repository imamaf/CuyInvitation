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

<!-- Modal Tambah -->
<section>
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('/create-web-company')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="links" placeholder="Link" name="links" value="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telepon" placeholder="Telepon" name="telepon" value="">
                        </div>
                        <div class="form-group">
                            <label>Image Banner 1</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInp" name="banner_1" class="custom-file-input" required>
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img class="img-thumbnail" id='img-upload' style="width : 200px; heigth: 200px" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>

<!-- Modal UPDATE -->
<section>
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="action" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
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
                        <div class="form-group">
                            <label>Image Banner 1</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" id="imgInp" name="banner_1" class="custom-file-input" required>
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img class="img-thumbnail" id='img-upload' style="width : 200px; heigth: 200px" />
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" id="aktif_flagModal" name="aktif_flagModal">
                                <option value="Y">Aktif</option>
                                <option value="T">Tidak Aktif</option>
                            </select>
                        </div> -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgInp").change(function() {
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
                $('#action').attr('action' , '/update-web-company/' + tour_id);
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
                $('#modalEdit').modal('show');
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
    
</script>

@endsection