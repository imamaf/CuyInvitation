<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Wedding Proposer  a Wedding Category Bootstrap Responsive Website Template | Home :: w3layouts</title>    
<link href="{{ asset('assets/designC02/css/font-awesome.css') }}" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome css -->     
<link href="{{ asset('assets/designC02/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="{{ asset('assets/designC02/css/snow.css') }}" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<link href="{{ asset('assets/designC02/css/style.css') }}" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<link href="{{ asset('assets/designC02/css/style.php') }}" rel="stylesheet" type="text/css" /><!-- stylesheet -->
<link href="{{ asset('assets/designC02/css/lsb.css') }}" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Proposer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->
	<header>
		<div class="container">
			<!-- nav -->
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				{{-- <div class="logo"> --}}
					<h1><a href="{{ url('/') }}"><span class="fa fa-gift" style="color: #FF3E75"></span> CuyInvitation </a></h1>
				{{-- </div>	 --}}
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="gallery.html">Wedding Albums</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Icons</a></li>
									<li><a href="codes.html">Typography</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
						
					</nav>

				</div>
				<!-- /.navbar-collapse -->
			  </div>
			  <!-- /.container-fluid -->
			</nav> 
			<!-- //nav -->
		</div>
	</header>
	<!-- //header -->
	<!-- banner-slider -->
	<div class="w3ls_banner_section">
			<div class="snow-container">
			  <div class="snow foreground"></div>
			  <div class="snow foreground layered"></div>
			  <div class="snow middleground"></div>
			  <div class="snow middleground layered"></div>
			  <div class="snow background"></div>
			  <div class="snow background layered"></div>
			</div>
				<div class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
							
								  <div class="banner_agile-info">
									  <h3>We Make Your Dream True</h3>
									  <p>CREATIVE WEDDING PLANNER</p>
									   <div class="banner-mid-wthree"> <a href="index.html" class="hvr-buzz"> <img src="{{ asset('assets/images/designc02/couple.png') }}" alt="wp"/></a> </div>
								  </div>
							</li>
							<li>
								  <div class="banner_agile-info">
									  <h3>We are Getting Married</h3>
									  <p>CREATIVE WEDDING PLANNER</p>
									   <div class="banner-mid-wthree"> <a href="index.html" class="hvr-buzz"> <img src="{{ asset('assets/images/designc02/couple.png') }}" alt="wp"/></a> </div>
								  </div>
							</li>
							<li>
								
							 <div class="banner_agile-info">
								  <h3>We Make Your Dream True</h3>
								  <p>CREATIVE WEDDING PLANNER</p>
								   <div class="banner-mid-wthree"> <a href="index.html" class="hvr-buzz"> <img src="{{ asset('assets/images/designc02/couple.png') }}" alt="wp"/></a> </div>
							  </div>
							</li>
							

						</ul>
						
				<div class="clearfix"></div>
			</div>

			
		</div>
			<!--/story-->
				<div class="about_section">
					<div class="container">
						   <div class="wthree_title_agile">
						        <h2>Our <span>Story</span></h2>
								<p><i class="fa fa-heart-o" aria-hidden="true"></i></p>

								{{-- <p > {{ $template_customer }}</p> --}}
								
							</div>
						 <p class="sub_para">WE ARE GETTING MARRIED</p>
						 <div class="inner_w3l_agile_grids">
								<!-- Bottom to top-->
									<div class="col-md-6 team-grid">
										<!-- normal -->
										<div class="ih-item circle effect10 bottom_to_top">
											<div class="img"><img src="{{  empty($tmplt_custr) ? url('assets/images/designc02/a1.jpg') : url('storage' , $tmplt_custr->path_foto_pria) }}" alt="img" /></div>
											<div class="info">
												<h3>{{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_mempelai_pria }}</h3>
												
											</div>
										</div>
										<!-- end normal -->
										  <h4>{{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_mempelai_pria }}</h4>
										  <h1>Putra dari Bpk. {{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_orang_tua_pria_bapak }}  &amp; {{ empty($tmplt_custr) ? "Ibu Mislawati" : "Ibu ".$tmplt_custr->nama_orang_tua_pria_ibu }} </h1>
										  <div class="icons">
													<ul>
														<li><a href="#"><i class="fa fa-facebook"></i></a></li>
														<li class="team-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
													</ul>
												</div>
									</div>
									<div class="col-md-6 team-grid">
										<!-- normal -->
										<div class="ih-item circle effect10 bottom_to_top">
											<div class="img"><img src="{{ empty($tmplt_custr) ? url('assets/images/designc02/a2.jpg') : url('storage' , $tmplt_custr->path_foto_wanita)}}" alt="img" /></div>
											<div class="info">
												<h3>{{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_mempelai_wanita }}</h3>
												
											</div>
										</div>
										<!-- end normal -->
										 <h4>{{ empty($tmplt_custr) ? 'Bride' : $tmplt_custr->nama_mempelai_wanita }}</h4>
										<h1>Putri dari Bpk. {{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_orang_tua_wanita_bapak }}  &amp; {{ empty($tmplt_custr) ? "Ibu Mislawati" : "Ibu ".$tmplt_custr->nama_orang_tua_ibu }} </h1>
										  <div class="icons">
													<ul>
														<li><a href="#"><i class="fa fa-facebook"></i></a></li>
														<li class="team-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
													</ul>
												</div>
									</div>
									<div class="clearfix"></div>
						</div>
					</div>
					
  
                </div>
			<!--//story-->
			
	<!--/counter-->
<div class="agileinfo_counter_section">
  <div class="wthree_title_agile">
						        <h3 class="h-t">Wedding <span>Coming Soon</span></h3>
								<p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
								
							</div>
						 <p class="sub_para two">WE ARE GETTING MARRIED</p>
 <div class="wthree-counter-agile">
			   <!--timer-->
					<section class="examples">
							<div class="simply-countdown-losange" id="simply-countdown-losange"></div>
							<div class="clearfix"></div>
						</section>

				<!--//timer-->

			 </div>
<div class="clearfix"></div>
</div>
{{-- MODAL KOMENTAR  --}}
<!-- Modal -->
<div class="modal fade" id="modalKomentar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="{{url('/add-komentar')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="text" class="form-control" id="template_id" value="{{ empty($tmplt_custr) ? '' : $tmplt_custr->id }}" style="display:none" name="template_id">
		<div class="form-group">
			<label>Masukan Foto anda</label>
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn btn-default" style="width:220px">
						 <input type="file" id="imgInp1" name="path_foto" class="custom-file-input" required>
					</button>
				</span>
				<input type="text" class="form-control" readonly>
			</div>
			<img class="img-thumbnail" id="img-upload1" style="width : 200px; heigth: 200px" />
		</div>
		<div class="form-group">
			<label>Nama anda</label>
			<input type="text" class="form-control" id="nama" placeholder="Silahkan diisi" name="nama">
		</div>
		<div class="form-group">
			<label>Ucapan</label>
			<input type="text" class="form-control" id="deskripsi" placeholder="Silahkan diisi" name="deskripsi">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
	  </div>
	  </form>
    </div>
  </div>
</div>
<!--//counter-->
	<div class="banner-bottom">
				<!--//screen-gallery-->
				 <div class="wthree_title_agile">
								<h3>Congratulate <span>Them</span></h3>
								<p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
								<a style="font-size: 20px" data-toggle="modal" data-target="#modalKomentar">
									<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Kirim Ucapan
								</a>
							</div>
							{{-- <p class="sub_para">WE ARE GETTING MARRIED</p> --}}
							<div class="inner_w3l_agile_grids">
								<div class="sreen-gallery-cursual">
						       <div id="owl-demo" class="owl-carousel">
								@if(!empty($komentars))
								 @foreach ($komentars as $k)
							      <div class="item-owl">
										<div class="test-review">
											<img src="{{url('storage' , $k->path_foto) }}" class="img-responsive" alt=""/>
											<h5>{{ $k->nama }}</h5>
											<p>{{ $k->deskripsi }}</p>
										</div>
					                </div>
								 @endforeach
								@endif
								@if(empty($komentars))
							      <div class="item-owl">
					                		<div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s1.jpg') }}" class="img-responsive" alt=""/>
											  <h5>{{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_mempelai_pria }}</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s2.jpg') }}" class="img-responsive" alt=""/>
											  <h5>{{ empty($tmplt_custr) ? 'Bride' : $tmplt_custr->nama_mempelai_wanita }}</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s3.jpg') }}" class="img-responsive" alt=""/>
											  <h5>{{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_mempelai_pria }}</h5>
					                	    </div>
					                </div>
									 <div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s4.jpg') }}" class="img-responsive" alt=""/>
											  <h5>{{ empty($tmplt_custr) ? 'Bride' : $tmplt_custr->nama_mempelai_wanita }}</h5>
					                	    </div>
					                </div>
									<div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s1.jpg') }}" class="img-responsive" alt=""/>
											 <h5>{{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_mempelai_pria }}</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                		<div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s5.jpg') }}" class="img-responsive" alt=""/>
											   <h5>{{ empty($tmplt_custr) ? 'Bride' : $tmplt_custr->nama_mempelai_wanita }}</h5>
					                	    </div>
					                </div>
									 <div class="item-owl">
					                		<div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s3.jpg') }}" class="img-responsive" alt=""/>
											  <h5>{{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_mempelai_pria }}</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s4.jpg') }}" class="img-responsive" alt=""/>
											  <h5>{{ empty($tmplt_custr) ? 'Bride' : $tmplt_custr->nama_mempelai_wanita }}</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s1.jpg') }}" class="img-responsive" alt=""/>
											 <h5>{{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_mempelai_pria }}</h5>
					                	    </div>
					                </div>
									 <div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s2.jpg') }}" class="img-responsive" alt=""/>
											  <h5>{{ empty($tmplt_custr) ? 'Bride' : $tmplt_custr->nama_mempelai_wanita }}</h5>
					                	    </div>
					                </div>
									 <div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s3.jpg') }}" class="img-responsive" alt=""/>
											  <h5>{{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_mempelai_pria }}</h5>
					                	    </div>
					                </div>
									 <div class="item-owl">
					                	    <div class="test-review">
						                	  <img src="{{ asset('assets/images/designc02/s5.jpg') }}" class="img-responsive" alt=""/>
											 <h5>{{ empty($tmplt_custr) ? 'Bride' : $tmplt_custr->nama_mempelai_wanita }}</h5>
											 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi veritatis dignissimos consequuntur cumque voluptatem laborum. At, sint facere repellendus amet a labore earum quam porro iste tenetur, rerum tempore eaque.</p>
					                	    </div>
									</div>
								@endif
				              </div>
						<!--//screen-gallery-->
				</div>
		  </div>
 </div>
<!-- /property-grids -->
<div class="property-grids">
     <div class="agile-homes-w3l  grid">
                <div class="col-md-6 home-agile-left">
				   <figure class="effect-moses">
							<img src="{{ asset('assets/images/designc02/p1.jpg') }}" alt="" />
							<figcaption>
								<h4>Wedding Proposer</h4>
								<p>We Make Your Dream True</p>
							</figcaption>			
				</figure>

				</div>
				<div class="col-md-6 home-agile-text">
				   <h4>Akad Nikah</h4>
				   <p>{{ empty($tmplt_custr) ? 'Bride' : $tmplt_custr->deskripsi }}</p>
				    <div class="date">
					   <h5><i class="fa fa-calendar" aria-hidden="true"></i> <?= empty($tmplt_custr) ? 'March 20 2021' :  date('d F Y', strtotime($tmplt_custr->tgl_akad))?></h5>
					   <h5><i class="fa fa-clock-o" aria-hidden="true"></i> <?= empty($tmplt_custr) ? '12.00pm to s/d':  date('H:i', strtotime($tmplt_custr->tgl_akad))?> to s/d</h5>
				   </div>
						<div class="icon_wthree"><img src="{{ asset('assets/images/designc02/ring.png') }}" alt="" /></div>
				</div>
				<div class="clearfix"></div>	
				 
				<div class="col-md-6 home-agile-text">
				   <h4>Resepsi Nikah</h4>
				   	<p>{{ empty($tmplt_custr) ? 'Bride' : $tmplt_custr->deskripsi }}</p>
				   <div class="date">
					   <h5><i class="fa fa-calendar" aria-hidden="true"></i> <?= empty($tmplt_custr) ? '12.00pm to s/d':  date('d F Y', strtotime($tmplt_custr->tgl_resepsi))?></h5>
					   <h5><i class="fa fa-clock-o" aria-hidden="true"></i> <?= empty($tmplt_custr) ? '12.00pm to s/d':  date('H:i', strtotime($tmplt_custr->tgl_resepsi))?> to s/d</h5>
				   </div>
				   <div class="icon_wthree"><i class="fa fa-cutlery" aria-hidden="true"></i></div>

				</div>
				<div class="col-md-6 home-agile-left">
						 <figure class="effect-moses">
							<img src="{{ asset('assets/images/designc02/p2.jpg') }}" alt="" />
							<figcaption>
								<h4>Wedding Proposer</h4>
								<p>We Make Your Dream True</p>
							</figcaption>			
				</figure>
				</div>
				<div class="clearfix"></div>	
     </div>
</div>
<!-- //property-grids -->
{{-- 
<!-- /Events-->
			<div class="wthree-news text-center">
				<div class="container">
					<div class="wthree_title_agile">
						        <h3>Our <span>Events</span></h3>
								<p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
								
							</div>
						 <p class="sub_para">OUR WEDDING EVENTS</p>
						 <div class="inner_w3l_agile_grids">
					<div class="col-md-6 wthree-right">
						<div class="w3-agile-left">
							<div class="work-left">
								<h4>22 july</h4>
							</div>
							<div class="agileits-right text-left">
								<a href="single.html">News post-1</a>
								<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
									fugiat nulla pariatur.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="wel-right">
							<div class="content-item item-image1">
								<a href="single.html"><img src="{{ asset('assets/images/designc02/e1.jpg') }}" alt="" /></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 wthree-right no-marg">
						<div class="wel-right2">
							<div class="content-item item-image2">
								<a href="single.html"><img src="{{ asset('assets/images/designc02/e2.jpg') }}" alt="" /></a>
							</div>
						</div>
						<div class="w3-agile-left2">
							<div class="work-left">
								<h4>02 Aug</h4>
							</div>
							<div class="agileits-right text-left">
								<a href="single.html">News post-2</a>
								<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
									fugiat nulla pariatur.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6 wthree-right">
						<div class="w3-agile-left">
							<div class="work-left">
								<h4>12 Sep</h4>
							</div>
							<div class="agileits-right text-left">
								<a href="single.html">News post-3</a>
								<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
									fugiat nulla pariatur. </p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="wel-right ">
							<div class="content-item item-image1">
								<a href="single.html"><img src="{{ asset('assets/images/designc02/e3.jpg') }}" alt="" /></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 wthree-right no-marg">
						<div class="wel-right2">
							<div class="content-item item-image2">
								<a href="single.html"><img src="{{ asset('assets/images/designc02/e4.jpg') }}" alt="" /></a>
							</div>
						</div>
						<div class="w3-agile-left2">
							<div class="work-left">
								<h4>15 Nov</h4>
							</div>
							<div class="agileits-right text-left">
								<a href="single.html">News post-4</a>
								<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
									fugiat nulla pariatur.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
            <!-- //Events--> --}}
            
    <!--/story-->
        <div class="w3l_inner_section">
            <div class="container">
                    <div class="wthree_title_agile">
                        <h2>Wedding  <span>Albums</span></h2>
                        <p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                        
                    </div>
                    <p class="sub_para">WE ARE GETTING MARRIED</p>

    <div class="inner_w3l_agile_grids">
	@if(!empty($gallerys))
	 @foreach($gallerys as $glr)
	    <div class="col-md-4 w3_tabs_grid">
            <div class="grid">
                <a href="{{  url('storage' , $glr->path_foto) }}" class="lsb-preview" data-lsb-group="header">
                    <figure class="effect-winston">
                        <img src="{{  url('storage' , $glr->path_foto) }}" style="max-width : 400px; margin-top:20px" class="img-responsive" alt=" " />
                        <figcaption>
                            <p>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </p>
                        </figcaption>			
                    </figure>
                </a>
            </div>
		</div>
	 @endforeach
	@endif
	@if(empty($gallerys))
        <div class="col-md-4 w3_tabs_grid">
            <div class="grid">
                <a href="{{ asset('assets/images/designc02/g1.jpg') }}" class="lsb-preview" data-lsb-group="header">
                    <figure class="effect-winston">
                        <img src="{{ asset('assets/images/designc02/g1.jpg') }}" class="img-responsive" alt=" " />
                        <figcaption>
                            <p>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </p>
                        </figcaption>			
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-4 w3_tabs_grid">
            <div class="grid">
                <a href="{{ asset('assets/images/designc02/g2.jpg') }}" class="lsb-preview" data-lsb-group="header">
                    <figure class="effect-winston">
                        <img src="{{ asset('assets/images/designc02/g2.jpg') }}" class="img-responsive" alt=" " />
                        <figcaption>
                            <p>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </p>
                        </figcaption>			
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-4 w3_tabs_grid">
            <div class="grid">
                <a href="{{ asset('assets/images/designc02/g3.jpg') }}" class="lsb-preview" data-lsb-group="header">
                    <figure class="effect-winston">
                        <img src="{{ asset('assets/images/designc02/g3.jpg') }}" class="img-responsive" alt=" " />
                        <figcaption>
                            <p>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </p>
                        </figcaption>			
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub">
            <div class="grid">
                <a href="{{ asset('assets/images/designc02/g4.jpg') }}" class="lsb-preview" data-lsb-group="header">
                    <figure class="effect-winston">
                        <img src="{{ asset('assets/images/designc02/g4.jpg') }}" class="img-responsive" alt=" " />
                        <figcaption>
                            <p>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </p>
                        </figcaption>			
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub">
            <div class="grid">
                <a href="{{ asset('assets/images/designc02/g5.jpg') }}" class="lsb-preview" data-lsb-group="header">
                    <figure class="effect-winston">
                        <img src="{{ asset('assets/images/designc02/g5.jpg') }}" class="img-responsive" alt=" " />
                        <figcaption>
                            <p>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </p>
                        </figcaption>			
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub">
            <div class="grid">
                <a href="{{ asset('assets/images/designc02/g6.jpg') }}" class="lsb-preview" data-lsb-group="header">
                    <figure class="effect-winston">
                        <img src="{{ asset('assets/images/designc02/g6.jpg') }}" class="img-responsive" alt=" " />
                        <figcaption>
                            <p>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </p>
                        </figcaption>			
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-4 w3_tabs_grid">
            <div class="grid">
                <a href="{{ asset('assets/images/designc02/g7.jpg') }}" class="lsb-preview" data-lsb-group="header">
                    <figure class="effect-winston">
                        <img src="{{ asset('assets/images/designc02/g7.jpg') }}" class="img-responsive" alt=" " />
                        <figcaption>
                            <p>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </p>
                        </figcaption>			
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-4 w3_tabs_grid">
            <div class="grid">
                <a href="{{ asset('assets/images/designc02/g9.jpg') }}" class="lsb-preview" data-lsb-group="header">
                    <figure class="effect-winston">
                        <img src="{{ asset('assets/images/designc02/g9.jpg') }}" class="img-responsive" alt=" " />
                        <figcaption>
                            <p>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </p>
                        </figcaption>			
                    </figure>
                </a>
            </div>
        </div>
        <div class="col-md-4 w3_tabs_grid">
            <div class="grid">
                <a href="{{ asset('assets/images/designc02/g2.jpg') }}" class="lsb-preview" data-lsb-group="header">
                    <figure class="effect-winston">
                        <img src="{{ asset('assets/images/designc02/g2.jpg') }}" class="img-responsive" alt=" " />
                        <figcaption>
                            <p>
                                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </p>
                        </figcaption>			
                    </figure>
                </a>
            </div>
		</div>
	@endif
        <div class="clearfix"> </div>

    </div>
            </div>
            

        </div>
		<!--//story-->
<!--/bottom-->
<div class="agileinfo_bottom_section">

<div class="snow-container two">
			  <div class="snow foreground"></div>
			  <div class="snow foreground layered"></div>
			  <div class="snow middleground"></div>
			  <div class="snow middleground layered"></div>
			  <div class="snow background"></div>
			  <div class="snow background layered"></div>
			</div>
  <div class="agile-w3l-sec">
              <h3>The best gift will be your participation, thanks to all</h3>
			  <p>{{ empty($tmplt_custr) ? 'Groom' : $tmplt_custr->nama_mempelai_pria }} <span>&</span> {{ empty($tmplt_custr) ? 'Bride' : $tmplt_custr->nama_mempelai_wanita }}</p>
			  <div class="banner-mid-wthree"> <a href="index.html" class="hvr-buzz"> <i class="fa fa-heart-o" aria-hidden="true"></i></a> </div>
  	</div>

</div>
 
<!--//bottom-->
	<!-- footer -->
<div class="agile-footer">
		<div class="container">
			<div class="aglie-info-logo">
			
				<div class="banner-mid-wthree"> <a href="index.html" class="hvr-buzz"> <img src="{{ asset('assets/images/designc02/couple.png') }}" alt="wp"/></a> </div>
			</div>
			<ul class="aglieits-nav">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="gallery.html">Wedding Albums</a></li>
				<li><a href="icons.html">Icons</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
<div class="w3_agileits_social_media">
					<ul>
						
						<li><a href="#" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			<div class="copy-right">
				<p>© 2020 Wedding Proposer. All rights reserved | Design by <a href="/">CuyInvitation</a></p>
			</div>
		</div>
	</div>
	<input type="text" id="time" style="display:none" value="{{ empty($tmplt_custr) ? '' : $tmplt_custr->tgl_akad }}" name="lname"/>
	<!-- //footer -->
	
	<style>

	/*-- /header --*/
	.w3ls_banner_section {
		background: url(<?= '/storage/'.$tmplt_custr->banner ?>) no-repeat 0px 0px;
		background-size: cover;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		-ms-background-size: cover;
		min-height:710px;
		position: relative;
		text-align: center;
	}
	</style>
    

	<script type="text/javascript" src="{{ asset('assets/designC02/js/jquery-2.1.4.min.js') }}"></script><!-- Required-js -->
	<script src="{{ asset('assets/designC02/js/bootstrap.min.js') }}"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/designC02/js/responsiveslides.min.js') }}"></script>
     <script src="{{ asset('assets/designC02/js/lsb.min.js') }}"></script>
    <script>
      $(window).load(function () {
        $.fn.lightspeedBox();
      });
	</script>
            <!-- //main slider-banner -->
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							 <!-- js -->

	<!-- //main slider-banner --> 	
	<!-- Countdown-Timer-JavaScript -->
			<script src="{{ asset('assets/designC02/js/simplyCountdown.js') }}"></script>
			<script>
				var date =  $('#time').val();
				var dateReplace = date.replace( /(\d{4})-(\d{2})-(\d{2})/, "$2/$3/$1");
				if(date == '') {
					d= new Date(new Date().getTime() + 948 * 120 * 120 * 2000);
				} else {
					d = new Date(dateReplace);
				}
				simplyCountdown('.simply-countdown-one', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
				});

				// inline example
				simplyCountdown('.simply-countdown-inline', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					time: d.getTime(),
					inline: true
				});

				//jQuery example
				$('#simply-countdown-losange').simplyCountdown({
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					time: d.getTime(),
					hours: d.getHours(),
				    minutes: d.getMinutes(),
     				seconds: d.getSeconds(),
					enableUtc: false
				});
			</script>
		<!-- //Countdown-Timer-JavaScript -->
 <!-- required-js-files-->
							<link href="{{ asset('assets/designC02/css/owl.carousel.css') }}" rel="stylesheet">
							    <script src="{{ asset('assets/designC02/js/owl.carousel.js') }}"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :5,
									itemsDesktop : [768,4],
									itemsDesktopSmall : [414,3],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination : true,
									
							      });
								  
							    });
							    </script>
								 <!--//required-js-files-->

	<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="{{ asset('assets/designC02/js/move-top.js') }}"></script>
			<script type="text/javascript" src="{{ asset('assets/designC02/js/easing.js') }}"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
	<!-- //here ends scrolling icon -->	
	
	{{-- JS Foto Ucapan --}}
	<script>
		function readURL(input , from) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				if(from == "img1") {
					$('#img-upload1').attr('src', e.target.result);
				} else if (from == "img2") {
					$('#img-upload2').attr('src', e.target.result);
				}
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#imgInp1").change(function() {
		readURL(this , "img1");
	});
	$("#imgInp2").change(function() {
		readURL(this , "img2");
	});
	</script>
    

</body>
</html>