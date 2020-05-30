@extends('layouts.master')


@section('title')
    Testimoni | CuyInvitation
@endsection

@section('header')
    Testimoni
@endsection

@section('cari')
Testimoni
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data (TESTIMONI)</h4>
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
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Rating</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach($testimonis as $result => $tmn)
                                <tr>
                                    <td>{{$result + $testimonis->firstitem()}}</td>
                                    <td>{{$tmn->nama}}</td>
                                    <td>{{$tmn->deskripsi}}</td>
                                    <td>{{$tmn->rating}}</td>
                                    <td>
                                        <a href="#" class="btn btn-view open_modal_view" value="{{$tmn->id}}"><i class="far fa-eye"></i><a>
                                        <a data-toggle="modal" value="{{$tmn->id}}" href="#" class="btn btn-edit open_modal_update"><i class="far fa-edit"></i><a>
                                        <a  data-toggle="modal" href="#" value="{{$tmn->id}}"  class="btn btn-delete open_modal_delete"><i class="far fa-trash-alt"></i><a>
                                    </td>
                                </tr>
                             @endforeach
                            </tbody>
                        </table>
                        {{ $testimonis->links() }}
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
                         <input type="text" readOnly class="form-control" id="nama_view" placeholder="Nama" name="nama" value="">
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea readOnly class="form-control" id="deskripsi_view" name="deskripsi_Modal" rows="3"></textarea>
                    </div>
                    <div class="form-group">        
                         <input type="text" readOnly class="form-control" id="rating_view" placeholder="Email" name="email" value="">
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
                         <input type="text" class="form-control" id="nama_Modal" placeholder="Nama" name="nama_Modal" value="">
                     </div>
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi_Modal" name="deskripsi_Modal" rows="3"></textarea>
                    </div>
                    <div class="form-group">        
                         <input type="text" class="form-control" id="rating_Modal" placeholder="Rating" name="rating_Modal" value="">
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
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
    });
    $(document).on('click', '.open_modal_update', function() {
        var url = "/getTestimoniById";
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);
        $.get(url + '/' + tour_id, function(data) {
            //success data
            console.log('data : ', data);
            console.log('data action : ', $('#action'));
            $('#action').attr('action' , '/update-testimoni/' + tour_id);
            $('#nama_Modal').val(data.nama);
            $('#deskripsi_Modal').val(data.deskripsi);
            $('#rating_Modal').val(data.rating);
            $('#btn-save').val("update");
            $('#modalEdit').modal('show');
        });
    });
    $(document).on('click', '.open_modal_view', function() {
        var url = "/getTestimoniById";
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);
        $.get(url + '/' + tour_id, function(data) {
            //success data
            console.log('data : ', data);
            console.log('data action : ', $('#action'));
            $('#action').attr('action' , '/update-testimoni/' + tour_id);
            $('#nama_view').val(data.nama);
            $('#deskripsi_view').val(data.deskripsi);
            $('#rating_view').val(data.rating);
            $('#btn-save').val("update");
            $('#modalView').modal('show');
        });
    });
    $(document).on('click', '.open_modal_delete', function() {
        var tour_id = $(this).attr("value");
            console.log('id : ', tour_id);

            $('#action-info').attr('action' , '/delete-testimoni/' + tour_id);

            $('#modal-info').modal('show');
         });
</script>

@endsection