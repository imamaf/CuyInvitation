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
 /delete-komentar/
@endsection
@include('layouts.modal-info.modal-info')
<!-- END -->

@endsection

<style>

    .onoffswitch {
        position: relative; width: 90px;
        -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
    }
    .onoffswitch-checkbox {
        position: absolute;
        opacity: 0;
        pointer-events: none;
    }
    .onoffswitch-label {
        display: block; overflow: hidden; cursor: pointer;
        border: 2px solid #999999; border-radius: 20px;
    }
    .onoffswitch-inner {
        display: block; width: 200%; margin-left: -100%;
        transition: margin 0.1s ease-in 0s;
    }
    .onoffswitch-inner:before, .onoffswitch-inner:after {
        display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
        font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
        box-sizing: border-box;
    }
    .onoffswitch-inner:before {
        content: "ON";
        padding-left: 10px;
        background-color: #34A7C1; color: #FFFFFF;
    }
    .onoffswitch-inner:after {
        content: "OFF";
        padding-right: 10px;
        background-color: #EEEEEE; color: #999999;
        text-align: right;
    }
    .onoffswitch-switch {
        display: block; width: 18px; margin: 6px;
        background: #FFFFFF;
        position: absolute; top: 0; bottom: 0;
        right: 56px;
        border: 2px solid #999999; border-radius: 20px;
        transition: all 0.1s ease-in 0s; 
    }
    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
        margin-left: 0;
    }
    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
        right: 0px; 
    }
    
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
        $(document).on('click', '.open_modal-delete', function() {
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);

            $('#action-info').attr('action' , '/delete-komentar/' + tour_id);

            $('#modal-info').modal('show');
            });

        function submit() {
            $( "#target" ).submit();
        }
    });

    
</script>

@endsection

