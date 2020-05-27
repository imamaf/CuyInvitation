@extends('layouts.master')


@section('title')
    List User | CuyInvitation
@endsection

@section('header')
    List User
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data (List User)</h4>
                    <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                  <!-- STATUS MESSAGE -->
                  @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (session('error') || !empty($notFound) )
                    <div class="alert alert-danger" role="alert">
                       <?php echo !empty($error) ? $error:$notFound ?>
                    </div>
                    @endif  
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                            @foreach($users as $result => $usr)
                                <tr>
                                    <td>{{$result + $users->firstitem()}}</td>
                                    <td>{{$usr->user_attribut->nama}}</td>
                                    <td>{{$usr->user_attribut->no_hp}}</td>
                                    <td>{{$usr->email}}</td>
                                    <td>{{$usr->role->kode_role}}</td>
                                    <td>
                                        <a href="#" class="btn btn-view"><i class="far fa-eye"></i><a>
                                        <a id="editButton" data-toggle="modal" value="{{$usr->id}}" href="#" class="btn btn-edit open_modal"><i class="far fa-edit"></i><a>
                                        <a href="#" class="btn btn-delete"><i class="far fa-trash-alt"></i><a>
                                    </td>
                                </tr>
                           @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Tambah -->
<section>
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
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
                        <img class="img-thumbnail"  id='img-upload' style="width : 200px; heigth: 200px"/>
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/update-list-user/{{$usr->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama_Modal" placeholder="Nama" name="nama_Modal">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="no_hp_Modal" placeholder="No Hp" name="no_hp_Modal">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email_Modal" placeholder="Email" name="email_Modal">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Role</label>
                            <select class="form-control" id="role_Modal" name="role_Modal">
                                <option value="SA">Super Admin</option>
                                <option value="CSR">Customer</option>
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

@endsection


@section('scripts')

<script> 
    $(document).on('click', '.open_modal', function() {
        var url = "/getUserById";
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);
        $.get(url + '/' + tour_id, function(data) {
            //success data
            console.log('data : ', data);
            $('#nama_Modal').val(data.name);
            $('#no_hp_Modal').val(data.user_attribut.no_hp);
            $('#email_Modal').val(data.email);
            $('#role_Modal').val(data.role.kode_role);
            $('#btn-save').val("update");
            $('#modalEdit').modal('show');
        })
    });
</script>

@endsection