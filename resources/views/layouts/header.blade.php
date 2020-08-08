<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('../assets/img/favicon.png') }}">
    <title>@yield('title')</title>

    <!-- css files -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="{{ asset('assets/css/css_slider.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet"><!-- fontawesome css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" >

	{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
	  <!-- CSRF Token -->
	  <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- //css files -->

    <!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
</head>
<body id="myPage" data-spy="scroll" data-offset="60">

<!-- header -->
<header>
	<div class="top-head container">
		<div class="ml-auto text-right right-p">
			<ul>
				<li class="mr-3">
					<span class="fa fa-phone"></span>+6285695398738</li>
				<li>
					<span class="fa fa-envelope-open"></span> <a href="mailto:info@example.com">cuyinfo@gmail.com</a> </li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1><a href="{{ url('/') }}"><span class="fa fa-gift" style="color: #FF3E75"></span> CuyInvitation </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="nav-item active"><a href="{{ URL('/') }}">Home</a></li>
				<li class="nav-item"><a href="#services">Services</a></li>
				<li class="nav-item"><a href="#stats">Stats</a></li>
				<li class="nav-item"><a href="#design">Design</a></li>
				<li class="nav-item"><a href="#testi">Testimonials</a></li>
				@if(Auth::check())
					@if(Auth::user()->role->kode_role == 'SA')
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								Hi {{ Auth::user()->name}}
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard Admin </a>
								<a class="dropdown-item"  href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endif
					@if(Auth::user()->role->kode_role == 'CSR')
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								Hi {{ Auth::user()->name}}
								<span class="fa fa-envelope-open"></span>{{ auth()->user()->unreadNotifications->count() }}</a>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							@if(auth()->user()->unreadNotifications->count())
								@foreach (auth()->user()->unreadNotifications as $notif)
								<a class="dropdown-item" href="{{ url('/komentar-ucapan') }}">Pemberitahuan {{ $notif->data['komentar']['nama'] .' mengucapakan '. $notif->data['komentar']['deskripsi']  }} </a>
									
								@endforeach
							@else
								<a class="dropdown-item" href="{{ url('/komentar-ucapan') }}">No Pemberitahuan</span></a>
							@endif
							
								<a class="dropdown-item"  href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endif
				@endif
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<div class="content">
    @yield('content')
</div>

<!-- footer -->
<footer>
	<div class="footer-layer py-sm-5 pt-5 pb-3">
		<div class="container py-md-3">
			<div class="footer-grid_section text-center">
				<div class="footer-title mb-3">
					<a href="#"><span class="fa fa-gift" style="color: #FF3E75"></span> CuyInvitation</a>
				</div>
				<div class="footer-text">
					<p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat.
					 Lorem ipsum dolor sit amet, consectetur elit.</p>
				</div>
				<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					<li class="pinterest"><a href="#"><span class="fa fa-pinterest"></span></a></li>
					<li class="vimeo"><a href="#"><span class="fa fa-vimeo"></span></a></li>
				</ul>
			</div>
		</div>
		
	</div>
</footer>
<!-- //footer -->
</body>
</html>
<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script> -->
@stack('custom-scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>