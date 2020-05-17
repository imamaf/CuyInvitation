<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>CuyInvitation</title>

    <!-- css files -->
    <link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="assets/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="assets/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

	<script src="{{ asset('js/app.js') }}" defer></script>

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
					<span class="fa fa-phone"></span>+{{$companys->telepon}}</li>
				<li>
					<span class="fa fa-envelope-open"></span> <a href="mailto:info@example.com">{{$companys->email}}</a> </li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1><a href="index.html"><span class="fa fa-gift" style="color: #FF3E75"></span> Cuy Invitation </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="nav-item active"><a href="index.html">Home</a></li>
				<li class="nav-item"><a href="#services">Services</a></li>
				<li class="nav-item"><a href="#stats">Stats</a></li>
				<li class="nav-item"><a href="#design">Design</a></li>
				<li class="nav-item"><a href="#testi">Testimonials</a></li>
				<li class="nav-item"><a href="#subscribe">Subscribe</a></li>
				@if(Auth::user())
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Hi {{ Auth::user()->name}}
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
				@endif
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text-w3ls">
					<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Website & Undangan</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Pernikahan Digital</h4>
										<p class="w3ls_pvt-title my-3">Kirim e-invitation melalui WhatsApp/SMS/email otomatis serta fitur lengkap untuk mempermudah pernikahanmu.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Matrimonial Search.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Best Matching Couples</h4>
										<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante. Morbi at dui nisl.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Matrimonial Search.</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Best Matching Couples</h4>
										<p class="w3ls_pvt-title my-3">onec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus semper Nullam dui mi.
								 Vestibulum ante. Morbi at dui nisl.</p>
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="navigation">
							<div>
								<label for="slides_1"></label>
								<label for="slides_2"></label>
								<label for="slides_3"></label>
							</div>
						</div>
					</div>
					<!-- //banner slider-->
				</div>
				@if(!Auth::user())
				<div class="col-lg-5 col-md-8 px-lg-3 px-0">
					<div class="banner-form-w3 ml-lg-5">
						<div class="padding">
						<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
								<h5 class="mb-3">Register & Join our Matrimony</h5>
								<div class="form-style-w3layout">
									<input class="form-control" placeholder="Your Name" name="name" type="text" required="">
									<input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Your Email Id" name="email" type="email" required="">
									@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
									<input class="form-control" placeholder="Contact Number" name="no_hp" type="text" required="">
									<!-- <select>
									  <option value="0">Gender</option>
									  <option value="1">Male</option>
									  <option value="2">Female</option>
									  <option value="4">Transgender</option>
									</select> -->
                              		  <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
										@if ($errors->has('password'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
										<input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required>
									<button type="submit" Class="btn"> Get Started</button>
									<p>Have an account?<a href="{{ route('login') }}" style="color:#ff3e75"> Login here</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- services -->
<section class="services py-5" id="services">
	<div class="container">
		<h3 class="heading mb-5">Our Services</h3>
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-handshake-o"></span>
						</div>
						<div class="our-services-text">
							<h4>Invitation Card</h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-image"></span>
						</div>
						<div class="our-services-text">
							<h4>Bridal Cottage</h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-gavel"></span>
						</div>
						<div class="our-services-text">
							<h4>Catering Services</h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-info-circle"></span>
						</div>
						<div class="our-services-text">
							<h4>Wedding Decors</h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-hourglass"></span>
						</div>
						<div class="our-services-text">
							<h4>Florist Services </h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
				<div class="our-services-wrapper mb-60">
					<div class="services-inner">
						<div class="our-services-img">
							<span class="fa fa-paw"></span>
						</div>
						<div class="our-services-text">
							<h4>Matrimony Services</h4>
							<p>Proin varius pellentesque nunc tincidunt ante. Init id lacus</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->

<!-- stats section -->
<section class="stats-section-w3pvt" id="stats">
	<div class="py-5">
		<div class="container py-lg-5">
		<h3 class="heading mb-sm-5 mb-4">Our statistics</h3>
			<div class="row text-center">
				<div class="col-lg-3 col-6">
					<div class="w3layouts_stats_left w3_counter_grid">
						<div class="stats-icon">
							<span class="fa fa-credit-card"></span>
						</div>
						<p class="counter text-black">1568</p>
						<p class="para-text-w3ls">Happy Couples</p>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<div class="w3layouts_stats_left w3_counter_grid2">	
						<div class="stats-icon">
							<span class="fa fa-users"></span>
						</div>
						<p class="counter">1900</p>
						<p class="para-text-w3ls">Married Couples</p>
					</div>
				</div>
				<div class="col-lg-3 col-6 mt-lg-0 mt-4">
					<div class="w3layouts_stats_left w3_counter_grid1">	
						<div class="stats-icon">
							<span class="fa fa-dollar"></span>
						</div>
						<p class="counter">1422</p>
						<p class="para-text-w3ls">Registered</p>
					</div>
				</div>
				<div class="col-lg-3 col-6 mt-lg-0 mt-4">
					<div class="w3layouts_stats_left w3_counter_grid1">	
						<div class="stats-icon">
							<span class="fa fa-users"></span>
						</div>
						<p class="counter">400</p>
						<p class="para-text-w3ls">Media Followers</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //stats section -->

<!-- other services -->
<section class="other_services py-5" id="why">
	<div class="container py-lg-5 py-3">
		<h3 class="heading mb-sm-5 mb-4">Choose Your Design </h3>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="grid">
					<a href="#">
						<img src="assets/images/couple1.jpg" alt="" class="img-fluid" />
						<div class="info p-4">
							<h4 class="">Design C01</h4>
							<p class="mt-3">Rp. 200,000</p>
							<button class="btn btn-primary">See more</button>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-4">
				<div class="grid">
					<a href="#">
						<img src="assets/images/couple2.jpg" alt="" class="img-fluid" />
						<div class="info p-4">
							<h4 class="">Design C02</h4>
							<p class="mt-3">Rp. 250,000</p>
							<button class="btn btn-primary">See more</button>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
				<div class="grid">
					<a href="#">
						<img src="assets/images/couple3.jpg" alt="" class="img-fluid" />
						<div class="info p-4">
							<h4 class="">Design C03</h4>
							<p class="mt-3">Rp. 300,000</p>
							<button class="btn btn-primary">See more</button>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //other services -->

<!-- testimonials -->
<section class="testimonials" id="testi">
	<div class="layer py-lg-5">
		<div class="container py-5">
			<h3 class="heading mb-sm-5 mb-4">testimoni our customers</h3>
			<div class="text-center">
				<div class="row">
				@foreach($user_testimonis as $testimonis)
					@if(!empty($testimonis->testimoni))
					<div class="col-md-6">
						<div class="testi-w3pvt-grid">
							<p>
								<span class="fa fa-quote-left"></span>{{$testimonis->testimoni->deskripsi}}
								<span class="fa ml-2 fa-quote-right"></span>
							</p>
						</div>
						<div class="testi-pos">
							<img src="assets/images/ts1.jpg" alt="" class="img-fluid rounded-circle mb-3" />
							<h4>{{$testimonis->name}}</h4>
						</div>
					</div>
					@endif
				@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //testimonials -->

<!-- Team  -->
<section class="team pt-5" id="couples">
    <div class="container py-lg-5">
		<h3 class="heading mb-sm-5 mb-4">Happy Couples</h3>
        <div class="row">
			<div class="team-grid col-md-3 mb-5">
				<img src="assets/images/couple1.jpg" class="" alt="" />
				<div class="team-info text-center">
					<h3 class="e">Tommy & Kharin</h3>
					<span class="">Love Couple</span>
				</div>
			</div>
			<div class="team-grid col-md-3 mb-5">
				<img src="assets/images/couple2.jpg" class="" alt="" />
				<div class="team-info text-center">
					<h3 class="">Ade & Yessi</h3>
					<span class="">Love Couple</span>
				</div>
			</div>
			<div class="team-grid col-md-3 mb-5">
				<img src="assets/images/couple3.jpg" class="" alt="" />
				<div class="team-info text-center">
					<h3 class="">Taufik & Gina</h3>
					<span class="">Love Couple</span>
				</div>
			</div>
			<div class="team-grid col-md-3 mb-5">
				<img src="assets/images/couple4.jpg" class="" alt="" />
				<div class="team-info text-center">
					<h3 class="">Gilang & Dilla</h3>
					<span class="">Love Couple</span>
				</div>
			</div>
        </div>
    </div>
</section>
<!-- //Team -->

<!-- subscribe -->
<section class="subscribe" id="subscribe">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5 d-flex subscribe-left p-lg-5 py-sm-5 py-4">
				<div class="news-icon mr-3">
					<span class="fa fa-paper-plane" aria-hidden="true"></span>
				</div>
				<div class="text">
					<h3>Subscribe To Our Newsletter</h3>
				</div>
			</div>
			<div class="col-md-7 subscribe-right p-lg-5 py-sm-5 py-4">
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Enter your email here" required="">
					<button class="btn1"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
				</form>
				<p>we never share your email with anyone else</p>
			</div>
		</div>
	</div>
</section>
<!-- //subscribe -->

<!-- footer -->
<footer>
	<div class="footer-layer py-sm-5 pt-5 pb-3">
		<div class="container py-md-3">
			<div class="footer-grid_section text-center">
				<div class="footer-title mb-3">
					<a href="#"><span class="fa fa-gift" style="color: #FF3E75"></span> Cuy Invitation</a>
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
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<!-- <script type="text/javascript" src="js/wow.min.js"></script> -->
<script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>