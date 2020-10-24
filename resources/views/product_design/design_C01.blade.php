<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design C01</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="{{ asset('assets/css/style-c01.css') }}" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet"><!-- fontawesome css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="{{ asset('/js/sal.js/dist/sal.css') }}">
    <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <link href="{{ asset('css/maps.css') }}" rel="stylesheet" >
	<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
    
</head>
<body class="bodyx">
    <div class="headbg" id="home">
        <div class="overlay">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 bag1 text-center">
                    <div class="judul-1" data-sal="flip-up" data-sal-duration="800">Save The Date</div>
                    <div class="judul-2" data-sal="flip-up" data-sal-duration="800" data-sal-delay="200">wedding of</div>
                    <div class="judul-1" data-sal="flip-up" data-sal-duration="800" data-sal-delay="400">Henry Fernandez &amp; Laura Basuki Kirana</div>
                    <div class="judul-3" data-sal="flip-up" data-sal-duration="800" data-sal-delay="600">On February 02, 2020</div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 pad-nol">
                    {{--  --}}
                </div>
            </div>
        </div>
    </div>
    <div class="bag2">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 text-left" data-sal="slide-right" data-sal-duration="800">
                    <div class="bag2-judul1 text-uppercase">mempelai pria</div>
                    <div class="bag2-judul2"> Henry Fernandez</div>
                    <div class="bag2-judul3">Putra Pertama Bpk. Ahmad Suryadi  &amp; Ibu Mislawati </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center" data-sal="slide-left" data-sal-duration="800">
                <img src="{{url('assets/images/designc01/male.png') }}"alt="">
            </div>
        </div>
    </div>
    <div class="bag2">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center" data-sal="slide-right" data-sal-duration="800">
                <img src="{{ url('assets/images/designc01/female.png') }}" alt="">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 text-right" data-sal="slide-left" data-sal-duration="800">
                    <div class="bag2-judul1 text-uppercase">mempelai wanita</div>
                    <div class="bag2-judul2">Laura Basuki Kirana</div>
                    <div class="bag2-judul3">Putri Pertama Bpk. Taufik Romadhon &amp; Ibu Gina Rizka</div>
            </div>
            
        </div>
    </div>
    <p id="demo"></p>
    

    <div class="bag3">
        <div class="row justify-content-center text-center">
            <div class="col-3" data-sal="slide-down" data-sal-duration="800">
                <div class="d-flex justify-content-center py-3">
                    <div class="box-jam">
                        <div class="mb-auto py-3 judul-box">DAYS</div>
                        <div class="bodi-box" id="days"></div>
                    </div>
                </div>
            </div>
            <div class="col-3" data-sal="slide-down" data-sal-duration="800" data-sal-delay="200">
                <div class="d-flex justify-content-center py-3">
                    <div class="box-jam">
                        <div class="mb-auto py-3 judul-box">HOURS</div>
                        <div class="bodi-box" id="hours"></div>
                    </div>
                </div>
            </div>
            <div class="col-3" data-sal="slide-down" data-sal-duration="800" data-sal-delay="400">
                <div class="d-flex justify-content-center py-3">
                    <div class="box-jam">
                        <div class="mb-auto py-3 judul-box">MINUTE</div>
                        <div class="bodi-box" id="minutes"></div>
                    </div>
                </div>
            </div>
            <div class="col-3" data-sal="slide-down" data-sal-duration="800" data-sal-delay="600">
                <div class="d-flex justify-content-center py-3">
                    <div class="box-jam">
                        <div class="mb-auto py-3 judul-box">SECONDS</div>
                        <div class="bodi-box" id="seconds">39</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bag4">
        <h1 class="judul-bag4">Detail Acara</h1> <br> <br>
        <div class="row">
            <div class="col-12" data-sal="slide-right" data-sal-duration="800">
                <img src="{{url('assets/images/designc01/image-akad.png')}}" class="img-akad" alt="">
            </div>
            <div class="col-12 spasi" data-sal="slide-up" data-sal-duration="800">
                <div class="d-flex justify-content-end py-3">
                    <div class="box-akad">
                        <div class="bag4-judul py-2">Akad</div>
                        <div class="bag4-tempat py-2">
                            Minggu, <?php echo date('d F Y', strtotime('1994-02-15'))?> <br>
                            08.00 s/d selesai <br>
                            Mason Pine Hotel Bandung <br>
                            ( Pine Garden Area ) <br> 
                        <br>
                            Merupakan suatu kehormatan apabila <br>
                            Bapak/Ibu/Saudara/i dapat hadir <br>
                            untuk memberikan doa restu 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12" data-sal="slide-down" data-sal-duration="1200">
                <div class="d-flex justify-content-end py-3">

                <img src="{{url('assets/images/designc01/image-resepsi.png')}}" class="img-akad" alt="">
                </div>
            </div>
            <div class="col-12" data-sal="slide-right" data-sal-duration="800">
                {{-- <div class="d-flex justify-content-end py-3"> --}}
                    <div class="box-akad">
                        <div class="bag4-judul py-2">Resepsi</div>
                        <div class="bag4-tempat py-2">
                            Minggu, 02 Februari 2020 <br>
                            11.00 s/d selesai <br>
                            Mason Pine Hotel Bandung <br>
                            ( Pine Garden Area ) <br> 
                        <br>
                            Merupakan suatu kehormatan apabila <br>
                            Bapak/Ibu/Saudara/i dapat hadir <br>
                            untuk memberikan doa restu 
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    <div class="bag7">
        <h1 class="judul-bag4">Galeri</h1> <br> <br>
        <div class="row text-center padcol">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="{{url('assets/images/designc01/galeri-1.jpg')}}" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="{{url('assets/images/designc01/galeri-2.jpg')}}" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="{{url('assets/images/designc01/galeri-3.jpg')}}" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="{{url('assets/images/designc01/galeri-4.jpg')}}" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="{{url('assets/images/designc01/galeri-5.jpg')}}" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="{{url('assets/images/designc01/galeri-6.jpg')}}" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="{{url('assets/images/designc01/galeri-7.jpg')}}" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="{{url('assets/images/designc01/galeri-8.jpg')}}" alt="">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="{{url('assets/images/designc01/galeri-9.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="bag8bg">
        <div class="col-12">
            <h2 class="judul-bag8"><b>Akan Hadir?</b></h2>
            <br>
            <p>Silahkan tekan tombol dibawah ini untuk <br>
            mengkonfirmasi kehadiran. <br> Terimakasih! </p>
            <br>
            <button class="btn btn-emas rounded-pill my-4">SAYA HADIR</button>
        </div>
    </div>
    <div class="penutup">
        Hendry
         &amp;
        Laura
    </div>
    <div id = "googleMap" style = "width:100%; height:600px;"></div>
</body>
</html>
<script src="{{asset('js/bootstrap.min.js') }}"></script>
<script src="{{asset('js/jQuery.scrollSpeed.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/sal.js/dist/sal.js')}}"></script>


<script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

<script src="js/maps.js"></script>
{{-- <script type ='text/javascript'>setCoords(-6.2218294,106.7804625,17)</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfAXqhEhpD17LucNYl4pDXEeqEBQTXoyQ&callback=initMap">
</script> --}}
<script>
    sal({
        once: false
    });
</script>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-8.5830695,116.3202515),
    zoom:18,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-8.5830695,116.3202515),
      map: peta
  });

}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script>
// Set the date we're counting down to
var dataDate = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);
console.log('data date' , dataDate);
var countDownDate = new Date(dataDate).getTime();


// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("days").innerHTML = days ;
  document.getElementById("hours").innerHTML = hours; 
  document.getElementById("minutes").innerHTML = minutes; 
  document.getElementById("seconds").innerHTML = seconds; 
//   + "d " + hours + "h "
//   + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>