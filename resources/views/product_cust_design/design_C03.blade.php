<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title> <?= $tmplt_custr->nama_panggilan_pria ?>&<?= $tmplt_custr->nama_panggilan_wanita ?> A Wedding Category Bootstrap Responsive WebSite Template| Home :: w3layouts</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Lois-Clark Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
      addEventListener("load", function () {
      	setTimeout(hideURLbar, 0);
      }, false);
      
      function hideURLbar() {
      	window.scrollTo(0, 1);
      }
    </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="{{ asset('assets/designC03/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    {{-- <link href="{{ asset('assets/designC03/css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css" media="all"> --}}
    <!-- //font-awesome icons -->
    <link href="{{ asset('assets/designC03/css/jquery-sakura.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/designC03/css/flexslider.css') }}" type="text/css" media="screen" />
    <!--stylesheets-->
    <link href="{{ asset('assets/designC03/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <!--gallery-->
    <link href="{{ asset('assets/designC02/css/lsb.css') }}" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
    <!--//gallery-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">

  </head>
  <body>
    <div class="header-outs" id="header">
      <div class="header-w3layouts">
        <div class="container">
          <!--//navigation section -->
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="hedder-up " >
              <h1><a class="navbar-brand" href="index.html"><?= $tmplt_custr->nama_panggilan_pria ?> & <?= $tmplt_custr->nama_panggilan_wanita ?> <span> Wedding</span></a></h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a href="about.html" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                  <a href="story.html" class="nav-link">Story</a>
                </li>
                <li class="nav-item">
                  <a href="gallery.html" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="nav-link " href="typography.html">Typography</a>
                    <a href="blog.html" class="nav-link">Blog</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="contact.html" class="nav-link">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="clearfix"> </div>
        </div>
      </div>
      <!--//navigation section -->
      <div class="banner-slide-img text-center">
        <div class="banner-bride-name">
          <h4><?= $tmplt_custr->nama_panggilan_pria ?> & <?= $tmplt_custr->nama_panggilan_wanita ?></h4>
        </div>
        <div class="banner-groom-name">
          <h4>Wedding Event</h4>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <!--banner -->
    <!--about-->
    <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="row">
          <div class="col-lg-6 agile-left-side-img ">
            <div class="mb-lg-5 mb-md-4 mb-3 jst-wthree-text">
              <h2>Wedding Story</h2>
            </div>
            <p class="mb-lg-4 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etLorem ipsum dolor sit amet, consectetur</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etLorem ipsum dolor sit amet, consectetur etLorem ipsum dolor sit amet, consectetur</p>
          </div>
          <div class="offset-lg-2 col-lg-4 abut-img-grids">
            <div class="wedding-graph">
              <div class="bride-right-agile">
                <img src="{{ asset('assets/images/designc03/ab3.jpg') }}" class="img-thumbnail" alt="">
              </div>
              <div class="wed-both">
                <img src="{{ asset('assets/images/designc03/ab1.jpg') }}" class="img-thumbnail" alt="">
              </div>
              <div class="groom-left-agile">
                <img src="{{ asset('assets/images/designc03/ab2.jpg') }}" class="img-thumbnail" alt="">
              </div>
            </div>
            <h2 class="navbar-brand" style="margin:30px">{{ $tmplt_custr->nama_mempelai_pria }} <span> & </span> {{ $tmplt_custr->nama_mempelai_wanita}} </h2>
          </div>
        </div>
      </div>
    </section>
    <!--//about-->
    <!--Wedding-day -->
    <section class="date py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Save The Date</h3>
        <div class="examples ">
          <div class="simply-countdown simply-countdown-one"></div>
        </div>
      </div>
    </section>
    <!--//Wedding-day -->
    <!--Wedding Journal-->
    <section class="wedding-journal py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Wedding Journal</h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6 blog-grid-flex">
                  <div class="clients-color">
                    <img src="{{ asset('assets/images/designc03/blog3.jpg') }}" class="img-thumbnail" alt="">
                    <div class="blog-txt-info">
                      <h4 class="mt-2"><a href="#">The reception</a></h4>
                      <div class="news-date my-3">
                        <ul>
                          <li><span class="far fa-calendar-check"></span><a href="#">12/4/2019</a></li>
                        </ul>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 blog-grid-flex">
                  <div class="clients-color">
                    <img src="{{ asset('assets/images/designc03/blog2.jpg') }}" class="img-thumbnail" alt="">
                    <div class="blog-txt-info">
                      <h4 class="mt-2"><a href="#">Wedding rings</a></h4>
                      <div class="news-date my-3">
                        <ul>
                          <li><span class="far fa-calendar-check"></span><a href="#">12/4/2019</a></li>
                        </ul>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                    </div>
                  </div>
                </div>

            </div>
        </div>
      </div>
    </section>
    <!--//Wedding Journal-->
    <!--friends & honors -->
    <section class="honors py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">friends & honors</h3>
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="row ">
                <div class="col-lg-3 clients-news-agile text-center">
                  <img src="{{ asset('assets/images/designc03/c1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-9 ">
                  <div class="clients-w3layouts-txt">
                    <h6 class="mb-2">Bridesmaid</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                    <h4 class="mt-3">Sam Deo</h4>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="row no-gutters">
                <div class="col-lg-3 clients-news-agile text-center">
                  <img src="{{ asset('assets/images/designc03/c2.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-9">
                  <div class="clients-w3layouts-txt">
                    <h6 class="mb-2">Bridesmaid</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                    <h4 class="mt-3">Rosly Son</h4>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 clients-news-agile text-center">
                  <img src="{{ asset('assets/images/designc03/c3.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-9 ">
                  <div class="clients-w3layouts-txt">
                    <h6 class="mb-2">Groomsmen</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                    <h4 class="mt-3">Sam Deo</h4>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 clients-news-agile text-center">
                  <img src="{{ asset('assets/images/designc03/c4.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-9 ">
                  <div class="clients-w3layouts-txt">
                    <h6 class="mb-2">Bridesmaid</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                    <h4 class="mt-3">Joly Kev</h4>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="row no-gutters">
                <div class="col-lg-3 clients-news-agile text-center">
                  <img src="{{ asset('assets/images/designc03/c5.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-9 ">
                  <div class="clients-w3layouts-txt">
                    <h6 class="mb-2">Groomsmen</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                    <h4 class="mt-3">Max Willson</h4>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!--//friends & honors -->
 <!--Gallery-->
      <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Gallery</h3>
            <div class="row grid gallery-info">
               <div class="col-lg-4 col-md-4 col-sm-4 gallery-grids p-0">
                 @foreach ($gallerys as $g)
                 <figure class="effect-selena">
                    <img src="{{ url('storage', $g->path_foto)}}" alt="img15"/>
                    <figcaption>
                       <h6><?= $tmplt_custr->nama_panggilan_pria ?><span> & </span> <?= $tmplt_custr->nama_panggilan_wanita ?></h6>
                       <p>Wedding </p>
                       <a href="{{ url('storage', $g->path_foto)}}" class="lsb-preview" data-lsb-group="header" data-title="">
                       </a>
                    </figcaption>
                 </figure>
                     
                 @endforeach
               </div>
            </div>
         </div>
      </section>
      <!--//Gallery-->
    <!--Crazy Movements-->
    <section class="crazy-move-pic py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Crazy Memories</h3>
        <div class="crazy-movements">
          <ul id="flexiselDemo3">
            <li><img src="{{ asset('assets/images/designc03/d2.jpg') }}" alt="" class="image-fluid"></li>
            <li><img src="{{ asset('assets/images/designc03/d3.jpg') }}" alt="" class="image-fluid"></li>
            <li><img src="{{ asset('assets/images/designc03/d4.jpg') }}" alt="" class="image-fluid"></li>
            <li><img src="{{ asset('assets/images/designc03/d5.jpg') }}" alt="" class="image-fluid"></li>
          </ul>
          <div class="clearfix"> </div>
        </div>
      </div>
    </section>
    <!--//Crazy Movements-->
    <!-- footer -->
    <footer class="py-lg-4 py-md-3 py-sm-3 py-3">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <div class="groom-w3layouts-footer text-center">
          <img src="{{ asset('assets/images/designc03/ff1.png') }}" alt="" class="image-fluid">
        </div>
        <div class="bride-groom-names text-center mt-lg-4 mt-3">
          <h4><a href="index.html"><?= $tmplt_custr->nama_panggilan_pria ?> & <?= $tmplt_custr->nama_panggilan_wanita ?></a></h4>
        </div>
        <div class="icons-footer text-center mt-lg-5 mt-md-4 mt-3">
          <ul>
            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fas fa-envelope"></span></a></li>
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
          </ul>
        </div>
        <div class="copy-agile-right text-center pt-lg-4 pt-3">
          <p> 
            © 2018 <?= $tmplt_custr->nama_panggilan_pria ?> & <?= $tmplt_custr->nama_panggilan_wanita ?>. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
          </p>
        </div>
      </div>
    </footer>
    	<input type="text" id="time" style="display:none" value="{{ $tmplt_custr->tgl_akad }}" name="lname"/>
    <!--//footer -->
    <!--js working-->
    <script src="{{ asset('assets/designC03/js/jquery-2.2.3.min.js') }}"></script>
    <!--//js working-->
    <script src="{{ asset('assets/designC03/js/jquery-sakura.min.js') }}"></script>
    <script>
      $(window).load(function () {
          $('body').sakura();
      });
    </script>
     <!-- gallery -->
    <script src="{{ asset('assets/designC02/js/lsb.min.js') }}"></script>
    <script>
      $(window).load(function () {
        $.fn.lightspeedBox();
      });
    </script>
    <!-- //gallery -->
    <!-- flexisel image slider -->
    <script src="{{ asset('assets/designC03/js/jquery.flexisel.js') }}"></script>
    <script>
      $(window).load(function() {
          $("#flexiselDemo3").flexisel({
              visibleItems: 4,
              itemsToScroll: 1,         
              autoPlay: {
                  enable: true,
                  interval: 5000,
                  pauseOnHover: true
              }        
          });
             
          
      });
    </script>
    <!--// flexisel image slider -->
    <!--friends-honors FlexSlider -->
    <!-- FlexSlider -->
    <script defer src="{{ asset('assets/designC03/js/jquery.flexslider.js') }}"></script>
    {{-- <script>
      $(function(){
        SyntaxHighlighter.all();
      });
      $(window).load(function(){
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider){
            $('body').removeClass('loading');
          }
        });
      });
    </script> --}}
    <!-- //friends-honors FlexSlider -->
    <script src="{{ asset('assets/designC03/js/simplyCountdown.js') }}"></script>
    <script>
      /**
       * WARNING: I set this coundtown to be running until the end of times.
       * So when you'll init the plugin, follow how it's done in plugin documentation.
       */
    	var date =  $('#time').val();
			var dateReplace = date.replace( /(\d{4})-(\d{2})-(\d{2})/, "$2/$3/$1");
      var d = new Date(dateReplace);
        // d.setDate(d.getDate() + 19);
      
        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            hours: d.getHours(),
		    minutes: d.getMinutes(),
        	seconds: d.getSeconds(),
            enableUtc: false
        });
    </script>
    <!-- start-smoth-scrolling -->
    <script src="{{ asset('assets/designC03/js/move-top.js') }}"></script>
    <script src="{{ asset('assets/designC03/js/easing.js') }}"></script>
    <script>
      jQuery(document).ready(function ($) {
      	$(".scroll").click(function (event) {
      		event.preventDefault();
      		$('html,body').animate({
      			scrollTop: $(this.hash).offset().top
      		}, 900);
      	});
      });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- here stars scrolling icon -->
    <script>
      $(document).ready(function () {
      
      	var defaults = {
      		containerID: 'toTop', // fading element id
      		containerHoverID: 'toTopHover', // fading element hover id
      		scrollSpeed: 1200,
      		easingType: 'linear'
      	};
      
      
      	$().UItoTop({
      		easingType: 'easeOutQuart'
      	});
      
      });
    </script>
    <!-- //here ends scrolling icon -->
    <!--bootstrap working-->
    <script src="{{ asset('assets/designC03/js/bootstrap.min.js') }}"></script>
    <!-- //bootstrap working-->
  </body>
</html>