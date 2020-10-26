@extends('layouts.master')


@section('title')
    User | CuyInvitation
@endsection

@section('header')
    User
@endsection

@section('cari')
User
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data (User)</h4>
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
                <div class="table-responsive">
                    <table class="table table-hover scroll-horizontal-vertical w-100" id="datatables">
                            <thead class=" text-primary">
                                {{-- <th>No</th> --}}
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Role</th>
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

@section('message')
    menghapus data ini
@endsection

@section('url')
 /delete-user/
@endsection

@include('layouts.modal-info.modal-info')

<!-- Modal View Detail -->
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
                         <input type="text" readOnly class="form-control" id="nama_view" placeholder="Nama" name="nama" value="">
                     </div>
                    <div class="form-group">        
                         <input type="text" readOnly class="form-control" id="email_view" placeholder="Email" name="email" value="">
                     </div>
                    <div class="form-group">        
                         <input type="text" readOnly class="form-control" id="no_hp_view" placeholder="No HP" name="no_hp" value="">
                     </div>
                    <div class="form-group">        
                         <input type="text" readOnly class="form-control" id="role_view" placeholder="Role" name="role_view" value="">
                     </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
                </form>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('/create-user')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">        
                         <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="">
                     </div>
                    <div class="form-group">        
                         <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="">
                     </div>
                    <div class="form-group">        
                         <input type="text" class="form-control" id="no_hp" placeholder="No HP" name="no_hp" value="">
                     </div>
                     
                     <div class="form-group">
                            <label for="exampleFormControlSelect1">Role</label>
                            <select class="form-control" id="role_ModalAdd" name="role_Modal">
                                <option value="SA">Super Admin</option>
                                <option value="CSR">Customer</option>
                            </select>
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

<!-- Modal UPDATE -->
<section>
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="action" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_Modal" placeholder="Nama" name="nama_Modal">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="no_hp_Modal" placeholder="No Hp" name="no_hp_Modal">
                        </div>
                        <!-- <div class="form-group">
                            <input type="text" class="form-control" id="email_Modal" placeholder="Email" name="email_Modal">
                        </div> -->

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Role</label>
                            <select class="form-control" id="role_Modal" name="role_Modal">
                                <option value="SA">Super Admin</option>
                                <option value="CSR">Customer</option>
                            </select>
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
            { data: 'name', name: 'name' ,  width : '10%' },
            { data: 'user_attribut.no_hp', name: 'no_hp',  width : '20%' },
            { data: 'email', name: 'email', width : '20%' },
            {data:'role.kode_role',name:'role.kode_role'},
            { 
                data: 'action',
                name: 'action' ,
                orderble : false,
                searcable : false ,
                width : '25%'
            },

        ],
        "initComplete": function () {

        }
    });
</script>


<script> 
    $(document).on('click', '.open-update', function() {
        var url = "/getUserById";
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);
        $.get(url + '/' + tour_id, function(data) {
            //success data
            console.log('data : ', data);
            console.log('data action : ', $('#action'));
            $('#action').attr('action' , '/update-list-user/' + tour_id);
            $('#nama_Modal').val(data.name);
            $('#no_hp_Modal').val(data.user_attribut.no_hp);
            $('#email_Modal').val(data.email);
            $('#role_Modal').val(data.role.kode_role);
            $('#btn-save').val("update");
            $('#modalEdit').modal('show');
        })
    });
    $(document).on('click', '.open_modal_view', function() {
        var url = "/getUserById";
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);
        $.get(url + '/' + tour_id, function(data) {
            //success data
            console.log('data : ', data);
            console.log('data action : ', $('#action'));
            $('#nama_view').val(data.name);
            $('#no_hp_view').val(data.user_attribut.no_hp);
            $('#email_view').val(data.email);
            $('#role_view').val(data.role.kode_role);
            $('#btn-save').val("update");
            $('#modalView').modal('show');
        })
    });
    $(document).on('click', '.open_modal-delete', function() {
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);

            $('#action-info').attr('action' , '/delete-list-user/' + tour_id);

            $('#modal-info').modal('show');
    });
</script>

@endsection