@extends('layouts.master')


@section('title')
Komentar Ucapan | CuyInvitation
@endsection

@section('header')
Komentar Ucapan
@endsection

@section('cari')
Komentar Ucapan
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Data (Komentar Ucapan)</h4>
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
                {{-- <button data-toggle="modal" data-target="#modalTambah" type="button" class="btn btn-primary">Tambah</button> --}}
                <div class="table-responsive">
                    <table class="table table-hover scroll-horizontal-vertical w-100" id="datatables">
                        <thead class=" text-primary">
                            {{-- <th>No</th>9 --}}
                            <th>Acara Pernikahan</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Ucapan</th>
                            <th>Status</th>
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
                            <input type="text" readOnly class="form-control" id="linksModal" placeholder="Link" name="linksModal">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="emailModal" placeholder="Email" name="emailModal">
                        </div>
                        <div class="form-group">
                            <input type="text" readOnly class="form-control" id="teleponModal" placeholder="Telepon" name="teleponModal">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Aktifkan</button>
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
                            <input type="text" required class="form-control" id="links_Modal" placeholder="Link" name="links_Modal">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control" id="email_Modal" placeholder="Email" name="email_Modal">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control" id="telepon_Modal" placeholder="Telepon" name="telepon_Modal">
                        </div>
                        <div class="form-group">
                            <label>Image Banner 1</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" required id="imgInp2" name="banner_1" class="custom-file-input" required>
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img class="img-thumbnail" id='img-upload2' style="width : 200px; heigth: 200px" />
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" id="aktif_flagModal" name="aktif_flagModal">
                                <option value="Y">Aktif</option>
                                <option value="T">Tidak Aktif</option>
                            </select>
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

    
</style>


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
            { data: 'nama_pasangan', name: 'nama_pasangan', width : '20%' },
            { data: 'nama', name: 'nama' ,  width : '10%' },
            { data: 'path_foto', name: 'path_foto',  width : '20%' },
            { data: 'deskripsi', name: 'deskripsi', width : '20%' },
            {data:'aktif_flag',name:'aktif_flag',orderble : false, searcable : false},
            { 
                data: 'action',
                name: 'action' ,
                orderble : false,
                searcable : false ,
                width : '25%'
            },

        ]
    });
</script>

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
                    $('#img-upload2').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgInp2").change(function() {
            readURL(this);
        });

        $(document).on('click', '.open_modal_update', function() {
            var url = "/getCompanyById";
            var tour_id = $(this).attr("value");
                console.log('id : ', tour_id);
            $.get(url + '/' + tour_id, function(data) {
                //success data
                console.log('data : ', data);
                console.log("$('#links')", $('#linksModal'));
                $('#action').attr('action' , '/update-web-company/' + tour_id);
                $('#telepon_Modal').val(data.telepon);
                $('#links_Modal').val(data.links);
                $('#email_Modal').val(data.email);
                $('#aktif_flagModal').val(data.aktif_flag);
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
            var url = "/getCompanyById";
            var tour_id = $(this).attr("value");
                console.log('id : ', tour_id);
            $.get(url + '/' + tour_id, function(data) {
                //success data
                console.log('data : ', data);
                $('#teleponModal').val(data.telepon);
                $('#linksModal').val(data.links);
                $('#emailModal').val(data.email);
                $('#aktif_flagModal').val(data.aktif_flag);
                $('#btn-save').val("update");
                $('#modalView').modal('show');
            })
        });
    
</script>

@endsection

