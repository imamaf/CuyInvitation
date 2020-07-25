@extends('layouts.master')


@section('title')
    Template Company | CuyInvitation
@endsection

@section('header')
    Template Company
@endsection

@section('content')
<section>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data Template (Company)</h4>
                    <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                <button data-toggle="modal" data-target="#modalTambah" type="button" class="btn btn-primary">Tambah</button>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Nama</th>
                                {{-- <th>Link</th> --}}
                                <th>Harga</th>
                                <th>Images</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach($template_company as $templateCompany)
                                    <tr>
                                        <td>{{$templateCompany->nama_template}}</td>
                                        <!-- <td>{{$templateCompany->url_gambar}}</td> -->
                                        <td>{{$templateCompany->harga_template}}</td>
                                        <td>{{str_limit($templateCompany->url_gambar, $limit = 30, $end = '...')}}</td>
                                        <td>{{str_limit($templateCompany->deskripsi_template, $limit = 30, $end = '...')}}</td>
                                        <td>
                                            <a data-toggle="modal" href="#" class="btn btn-view open_modal_view" value="{{$templateCompany->id}}"><i class="far fa-eye"></i><a>
                                            <a data-toggle="modal" value="{{$templateCompany->id}}" href="#" class="btn btn-edit open_modal_update"><i class="far fa-edit"></i><a>
                                            <a data-toggle="modal" href="#" value="{{$templateCompany->id}}"  class="btn btn-delete open_modal_delete"><i class="far fa-trash-alt"></i><a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Tambah -->
<section>
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="templateCompanyModalAdd" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="templateCompanyModalAdd">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('/addCompanyTemplate')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="templateNameAdd" placeholder="Nama Template" name="templateNameAdd">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="descriptionAdd" placeholder="Deskripsi" name="descriptionAdd">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="priceAdd" placeholder="Harga" name="priceAdd">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="linkAdd" placeholder="Link Preview" name="link">
                        </div>
                        <div class="form-group">
                            <label>Image Banner 1</label>
                            <br>
                            <div class="input-group center-form">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" accept="image/*" id="imageModalAdd"  name="banner_1_add" class="custom-file-input" style="z-index: 1" required>
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img class="img-thumbnail" id='img-upload-add' style="width : 200px; heigth: 200px" />
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
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="templateCompanyModalEdit" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="templateCompanyModalEdit">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="action" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <input type="text" class="form-control" id="templateNameModal" placeholder="Nama Template" name="templateNameModal">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="descriptionModal" placeholder="Deskripsi" name="descriptionModal">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="priceModal" placeholder="Harga" name="priceModal">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="linkModal" placeholder="Link Preview" name="linkModal">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <br>
                            <div id="imageGroupEdit" class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        <!-- <label for="imageModal">Browse...</label> -->
                                        Browse...<input type="file" accept="image/*" id="imageModalEdit" name="banner_1" class="custom-file-input" style="z-index: 1">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img class="img-thumbnail" id='img-upload-edit' style="width : 200px; heigth: 200px" />
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
                            <button type="submit" class="btn btn-primary" id="btn-save-edit">Save</button>
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

        function readURL(input, from) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    if (from == 'edit') {
                        $('#img-upload-edit').attr('src', e.target.result);
                    }
                    else if (from == 'add') {
                        $('#img-upload-add').attr('src', e.target.result);
                    }
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageModalEdit").change(function() {
            readURL(this, 'edit');
        });
        $("#imageModalAdd").change(function() {
            readURL(this, 'add');
        });

        $(document).on('click', '.open_modal_update', function() {
            var url = "/companyTemplate";
            var id = $(this).attr("value");
            $.get(url + '/' + id, function(data) {
                //success data
                $('#action').attr('action' , '/companyTemplate/' + id);
                $('#templateNameModal').val(data.nama_template).prop('disabled', false);
                $('#descriptionModal').val(data.deskripsi_template).prop('disabled', false);
                $('#priceModal').val(data.harga_template).prop('disabled', false);
                $('#linkModal').val(data.link).prop('disabled', false);
                $('#img-upload-edit').attr('src', "{{Storage::url('')}}"+data.url_gambar.replace("public/","")).prop('disabled', false);
                $('#imageModalEdit').prop('disabled', false);
                $('#imageGroupEdit').prop('hidden', false);
                $('#btn-save-edit').val("update").prop('hidden', false);
                $('#modalEdit').modal('show');
            })
        });

        $(document).on('click', '.open_modal_view', function() {
            var url = "/companyTemplate";
            var id = $(this).attr("value");
            $.get(url + '/' + id, function(data) {
                //success data
                // $('#action').attr('action' , '/companyTemplateDetail/' + id);
                $('#templateNameModal').val(data.nama_template).prop('disabled', true);
                $('#descriptionModal').val(data.deskripsi_template).prop('disabled', true);
                $('#priceModal').val(data.harga_template).prop('disabled', true);
                $('#linkModal').val(data.link).prop('disabled', true);
                $('#img-upload-edit').attr('src', "{{Storage::url('')}}"+data.url_gambar.replace("public/","")).prop('disabled', true);
                $('#imageModalEdit').prop('disabled', true);
                $('#imageGroupEdit').prop('hidden', true);
                $('#btn-save-edit').val("update").prop('hidden', true);
                $('#modalEdit').modal('show');
            })
        });

        $(document).on('click', '.open_modal_delete', function() {
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);

            $('#action-info').attr('action' , '/deleteCompanyTemplate/' + tour_id);

            $('#modal-info').modal('show');
         });
    });
</script>
@endsection