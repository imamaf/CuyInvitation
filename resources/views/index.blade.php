<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
					<span class="fa fa-phone"></span>+62 856 9539 8738</li>
				<li>
					<span class="fa fa-envelope-open"></span> <a href="mailto:info@example.com">cuyinfo@gmail.com</a> </li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				@if(Auth::user())
				<h1> <a href="index.html"></span> Hi {{ Auth::user()->name}}</a></h1>
				@endif
				<h1> <a href="index.html"><span class="fa fa-gift"></span> Cuy Invitation </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="index.html">Home</a></li>
				<li class=""><a href="#about">About Us</a></li>
				<li class=""><a href="#services">Services</a></li>
				<li class=""><a href="#stats">Stats</a></li>
				<li class=""><a href="#testi">Testimonials</a></li>
				<li class=""><a href="#subscribe">Subscribe</a></li>
				@if(Auth::user())
				<li class=""><a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
				</li>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
				
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
									<input class="form-control" placeholder="Contact Number" name="number" type="text" required="">
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
									<button type="submit" Class="btn"> Get Started</button>
									<span>By registering, you agree to our <a href="#">Terms & Conditions.</a></span>
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

</body>
</html>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<!-- <script type="text/javascript" src="js/wow.min.js"></script> -->
<script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>