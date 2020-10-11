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
                <button data-toggle="modal" data-target="#myModalAdd1" type="button" onclick="resetForm()" class="btn btn-primary">Tambah</button>    
                    <div class="table-responsive">
                    <table class="table table-hover scroll-horizontal-vertical w-100" id="datatables">
                            <thead class=" text-primary">
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Rating</th>
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

<!-- Modal Tambah -->
<section>
    <div class="modal fade" id="myModalAdd1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('/create-testimoni')}}" method="POST" enctype="multipart/form-data">
                        
                        @csrf

                        <div class="form-group">
                            <label for="country">Pilih User</label>
                            <select class="form-control" placeholder="userId" name="userId" value="" id="userId">
                               <option value="">...</option>
                               @foreach($userDropdown as $usr)
                               <option value="{{ $usr->id }}"> {{ $usr->name }} </option>
                               @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Image Banner 1</label>
                            <br>
                            <div class="input-group center-form">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" accept="image/*" id="imgInp"  name="pathPhoto" class="custom-file-input" style="z-index: 1" required>
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img class="img-thumbnail" id='img-upload' style="width : 200px; heigth: 200px" />
                        </div>
                        {{-- <div class="form-group">
                            <input type="text" class="form-control" id="pathPhoto" placeholder="pathPhoto" name="pathPhoto" value="">
                        </div> --}}
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="deskripsi" placeholder="deskripsi" name="deskripsi" value="">
                        </div>
                        <div>
                            <label for="rating">Rating</label>
                        </div>
                        <div class="stars">
                            <input class="star star-5" id="star-5" type="radio" name="rating" value="5"/>
                            <label class="star star-5" for="star-5"></label>
                            <input class="star star-4" id="star-4" type="radio" name="rating" value="4"/>
                            <label class="star star-4" for="star-4"></label>
                            <input class="star star-3" id="star-3" type="radio" name="rating" value="3"/>
                            <label class="star star-3" for="star-3"></label>
                            <input class="star star-2" id="star-2" type="radio" name="rating" value="2"/>
                            <label class="star star-2" for="star-2"></label>
                            <input class="star star-1" id="star-1" type="radio" name="rating" value="1"/>
                            <label class="star star-1" for="star-1"></label>
                        </div>
                        {{-- <div class="form-group">
                            <input type="text" class="form-control" id="rating" placeholder="rating" name="rating" value="">
                        </div> --}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>

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
                    <button type="submit" class="btn btn-primary ">Konfirmasi</button>
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
    var datatable = $('#datatables').DataTable({
        processing: true,
        serverSide: true,
         ordering   : true,
        ajax : {
                url : '{!! url()->current()  !!}'    
        },
        columns: [
            { data: 'nama', name: 'nama' },
            { data: 'deskripsi', name: 'deskripsi' },
            { data: 'rating', name: 'rating' },
            { 
                data: 'action',
                name: 'action' ,
                orderble : false,
                searcable : false ,
            },

        ]
    });
</script>

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

<style>
    div.stars {
    width: 270px;
    display: inline-block;
    }

    input.star { display: none; }

    label.star {
    float: right;
    padding: 10px;
    font-size: 36px;
    color: #444;
    transition: all .2s;
    }

    input.star:checked ~ label.star:before {
    content: '\f005';
    color: #FD4;
    transition: all .25s;
    }

    input.star-5:checked ~ label.star:before {
    color: #FE7;
    text-shadow: 0 0 20px #952;
    }

    input.star-1:checked ~ label.star:before { color: #F62; }

    label.star:hover { transform: rotate(-15deg) scale(1.3); }

    label.star:before {
    content: '\f006';
    font-family: FontAwesome;
    }
</style>
@endsection