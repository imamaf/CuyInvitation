@extends('layouts.master')


@section('title')
    Web Company | CuyInvitation
@endsection

@section('header')
    Web Company
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Data (Web Company)</h4>
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
                <button data-toggle="modal" data-target="#modalTambah" type="button" class="btn btn-primary">Tambah</button>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No</th>
                                <th>Link</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach($companys as $result => $cmp)
                                <tr>
                                    <td>{{$result + $companys->firstitem()}}</td>
                                    <td>{{$cmp->links}}</td>
                                    <td>{{$cmp->telepon}}</td>
                                    <td>{{$cmp->email}}</td>
                                    <td>{{$cmp->aktif_flag == 'A' ? 'Aktif' : 'Tidak Aktif'}}</td>
                                    <td>
                                        <a href="#" class="btn btn-view"><i class="far fa-eye"></i><a>
                                        <a data-toggle="modal" data-target="#modalEdit" href="#" class="btn btn-edit"><i class="far fa-edit"></i><a>
                                        <a href="#" class="btn btn-delete"><i class="far fa-trash-alt"></i><a>
                                    </td>
                                </tr>
                             @endforeach
                            </tbody>
                        </table>
                        {{ $companys->links() }}
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
@foreach($companys as $cmp)
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
                    <form action="/update-web-company/{{$cmp->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">        
                         <input type="text" class="form-control" id="links" placeholder="Link" name="links" value="{{$cmp->links}}">
                     </div>
                    <div class="form-group">        
                         <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{$cmp->email}}">
                     </div>
                    <div class="form-group">        
                         <input type="text" class="form-control" id="telepone" placeholder="Telepon" name="telepone" value="{{$cmp->telepone}}">
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
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>Aktif</option>
                    <option>Tidak Aktif</option>
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
    @endforeach
</section>

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
</script>

@endsection