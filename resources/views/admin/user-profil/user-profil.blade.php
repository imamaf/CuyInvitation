@extends('layouts.master')


@section('title')
    Dashboard | CuyInvitation
@endsection

@section('header')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <h5 class="card-title">Detail Profil</h5> 
                    <form>
                    <div class="container-fluid">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="inputPassword" value="">
                            </div>
                        </div>
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="inputPassword" value="">
                            </div>
                        </div>

                            <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="inputPassword" value="">
                            </div>
                        </div>
                            <label for="inputPassword" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="inputPassword" value="">
                            </div>
                        </div>
                    </form>
                        <button  data-toggle="modal" data-target="#ModalAddAlumni" type="button" class="btn btn-primary">Edit</button>
                        <button  data-toggle="modal" data-target="#ModalAddAlumni" type="button" class="btn btn-primary">Ganti Password</button>
        </div>
    </div>
    <section>
<!-- Modal -->
<div class="modal fade" id="ModalAddAlumni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('/add-alumni')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Upload Image</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    Browse… <input type="file" id="imgInp" name="path_foto" class="custom-file-input" required>
                                </span>
                            </span>
                            <input type="text" class="form-control" readonly>
                        </div>
                   
                        <img src="" class="img-thumbnail"  id='img-upload' style="width : 150px; heigth: 150px"/>
                     
                    
                        <img class="img-thumbnail"  id='img-upload' style="width : 150px; heigth: 150px"/>
                        </div>
                            <div class="form-group">
                            <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="tempat_lahir" placeholder="tempat lahir" name="tempat_lahir" value="">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="tgl_lahir" placeholder="tanggal lahir" name="tgl_lahir" value="">
                        </div>
                        <div class="form-group">
                           
                            <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat" value="">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="no_handphone" placeholder="no.handphone" name="no_hp" value="">
                        </div>
                        <div class="form-group">
                           
                            <input type="text" class="form-control" id="jurusan_prodi" placeholder="jurusan" name="jurusan_prodi" value="">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="th_masuk" placeholder="tahun masuk" name="th_masuk" value="">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="th_lulus" placeholder="tahun lulus" name="th_lulus" value="">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="status" placeholder="status" name="status" value="">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="tempat_bekerja" placeholder="tempat bekerja" name="tempat_bekerja" value="">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-control" id="waktu_lulus_bekerja" placeholder="waktu lulus kerja" name="waktu_lulus_bekerja" value="">
                        </div>
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

@endsection