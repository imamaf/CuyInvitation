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
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <!-- <th>Link</th> -->
                                <th>Harga</th>
                                <th>Images</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach($template_company as $templateCompany)
                                    <tr>
                                        <td>{{$templateCompany->nama_template}}</td>
                                        <td>{{str_limit($templateCompany->deskripsi_template, $limit = 30, $end = '...')}}</td>
                                        <!-- <td>{{$templateCompany->url_gambar}}</td> -->
                                        <td>{{$templateCompany->harga_template}}</td>
                                        <td>{{str_limit($templateCompany->url_gambar, $limit = 30, $end = '...')}}</td>
                                        <td>
                                            <a data-toggle="modal" href="#" class="btn btn-view open_modal_view" value="{{$templateCompany->id}}"><i class="far fa-eye"></i><a>
                                            <a data-toggle="modal" value="{{$templateCompany->id}}" href="#" class="btn btn-edit open_modal_update"><i class="far fa-edit"></i><a>
                                            <a data-toggle="modal" href="#" value="{{$templateCompany->id}}"  class="btn btn-delete open_modal-delete"><i class="far fa-trash-alt"></i><a>
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
                            <label>Gambar</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        <!-- <label for="imageModal">Browse...</label> -->
                                        Browse...<input type="file" accept="image/x-png,image/gif,image/jpeg" id="imageModal" name="banner_1" class="custom-file-input" style="z-index: 1">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img class="img-thumbnail" id='img-upload' style="width : 150px; heigth: 150px" />
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
                    console.log(e.target.result);
                    $('#img-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageModal").change(function() {
            readURL(this);
        });

        $(document).on('click', '.open_modal_update', function() {
            var url = "/companyTemplateDetail";
            var id = $(this).attr("value");
            $.get(url + '/' + id, function(data) {
                //success data
                $('#action').attr('action' , '/companyTemplateDetail/' + id);
                $('#templateNameModal').val(data.nama_template);
                $('#descriptionModal').val(data.deskripsi_template);
                $('#priceModal').val(data.harga_template);
                $('#img-upload').attr('src', "{{Storage::url('')}}"+data.url_gambar.replace("public/",""));
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