@extends('layouts.master')


@section('title')
Buku Tamu | CuyInvitation
@endsection

@section('header')
Buku Tamu
@endsection

@section('cari')
Buku Tamu
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Data (Buku Tamu)</h4>
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
                            <tr>
                            {{-- <th>No</th>9 --}}
                                <th>Acara Pernikahan</th>
                                <th>Nama Tamu</th>
                                <th>Alamat</th>
                                <th>Hubungan</th>
                                <th>Kehadiran</th>
                                <th>Aksi</th>
                            </tr>
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
                    <form>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Acara Pernikahan</label>
                        <input type="text" readOnly class="form-control" id="acara_pernikahan_view" placeholder="Nama" name="nama" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nama Tamu</label>
                        <input type="text" readOnly class="form-control" id="nama_tamu_view" placeholder="Nama" name="nama" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea readOnly class="form-control" id="alamat_view" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Hubungan</label>
                        <input type="text" readOnly class="form-control" id="hubungan_view" placeholder="hubungan" name="hubungan" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Kehadiran</label>
                        <input type="text" readOnly class="form-control" id="status_kehadiran_view" placeholder="kehadiran" name="kehadiran" value="">
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- modal update --}}
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
                    @if(auth()->user()->role->kode_role  =="SA" )
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Acara Pernikahan</label>
                        <select class="form-control" placeholder="Acara Pernikahan" name="template_id" value="" id="template_id">
                            @foreach($dropdown as $usr)
                               <option value="{{ $usr->user_id }}"> {{ $usr->nama_panggilan_pria }} - {{ $usr->nama_panggilan_wanita }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nama Tamu</label>
                        <input type="text" class="form-control" id="nama_tamu" placeholder="Nama" name="nama_tamu" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Hubungan dengan Mempelai</label>
                        <select type="text" class="form-control" name="hubungan" id="hubungan" placeholder="Hubungan">
                                <option value="1">Orang Tua</option>
                                <option value="2">Saudara Laki-Laki/Perempuan</option>
                                <option value="3">Keluarga Mempelai Pria</option>
                                <option value="4">Keluarga Mempelai Wanita</option>
                                <option value="5">Sahabat/Teman</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Status Kehadiran</label>
                            <select type="text" class="form-control" name="status_kehadiran" id="status_kehadiran" placeholder="Status Kehadiran">
                                <option value="H">Hadir</option>
                                <option value="TH">Tidak Hadir</option>
                            </select>
                     </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary ">Konfirmasi</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>




@section('message')
    menghapus data ini
@endsection

@section('url')
 /delete-guestbook/
@endsection
@include('layouts.modal-info.modal-info')

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
            processing : true,
            serverSide : true,
            ordering   : true,
            ajax : {
                url: '{!! url()->current() !!}',
            },
            columns: [
                    { data: 'nama_pasangan', name: 'nama_pasangan', width : '15%' },
                    { data: 'nama_tamu', name: 'nama_tamu' ,  width : '10%' },
                    { data: 'alamat', name: 'alamat',  width : '30%' },
                    { data: 'hubungan', name: 'hubungan',  width : '10%' },
                    { data: 'status_kehadiran', name: 'status_kehadiran',  width : '10%' },
                    {
                        data      : 'Aksi',
                        name      : 'Aksi',
                        width     : '25%',
                        orderable : false,
                        searcable : false
                    },
            ]
        })
    </script>

    {{-- script untuk delete --}}
    <script>
        $(document).ready(function() {
            $(document).on('click', '.open_modal-delete', function() {
            var tour_id = $(this).attr("value");
                console.log('id : ', tour_id);

                $('#action-info').attr('action' , '/delete-guestbook/' + tour_id);

                $('#modal-info').modal('show');
                });

            function submit() {
                $( "#target" ).submit();
            }
        });
    </script>

    {{-- script view --}}
    <script>
        $(document).on('click', '.open_modal_view', function() {
        var url = "/getid";
        var tour_id = $(this).attr("value");
        $.get(url + '/' + tour_id, function(data) {
            var nilai = data.template_customer;
            var names_pria = nilai.map(function(item) {
                return item['nama_panggilan_pria'];
            });
            var names_wanita = nilai.map(function(item) {
                return item['nama_panggilan_wanita'];
            });
            var kehadiran = (data.status_kehadiran == "H") ? "Hadir": "Tidak Hadir";
            var hubungan =  (data.hubungan == '1')? "Orang tua": (data.hubungan == '2')? "Saudara Laki-Laki/Perempuan":(data.hubungan == '3')? "Keluarga Mempelai Pria":(data.hubungan == '4')? "Keluarga Mempelai Wanita":"Sahabat/Teman";
            console.log(hubungan);
            $('#action').attr('action' , '/getid/' + tour_id);
            $('#acara_pernikahan_view').val(names_pria.toString()+" - "+names_wanita.toString());
            $('#nama_tamu_view').val(data.nama_tamu);
            $('#alamat_view').val(data.alamat);
            $('#hubungan_view').val(hubungan);
            $('#status_kehadiran_view').val(kehadiran);
            $('#btn-save').val("update");
            $('#modalView').modal('show');
        });
    });
    </script>

    {{-- script update --}}
    <script>
        $(document).on('click', '.open_modal_update', function() {
            var url = "/getid";
            var tour_id = $(this).attr("value");
                console.log('id : ', tour_id);
            $.get(url + '/' + tour_id, function(data) {
                //success data
                console.log('data : ', data);
                console.log('data action : ', $('#action'));
                $('#action').attr('action' , '/update-guestbook/' + tour_id);
                $('#template_id').val(data.template_id);
                $('#nama_tamu').val(data.nama_tamu);
                $('#alamat').val(data.alamat);
                // $('#template_id').val(data.template_id);
                $('#hubungan').val(data.hubungan);
                $('#status_kehadiran').val(data.status_kehadiran);
                $('#btn-save').val("update");
                $('#modalEdit').modal('show');
            })
        });
    </script>

    <script>

    </script>
@endsection
