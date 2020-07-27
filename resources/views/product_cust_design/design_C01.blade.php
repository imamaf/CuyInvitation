<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design C01</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet"><!-- fontawesome css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="{{ asset('/js/sal.js/dist/sal.css') }}">





    <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <link href="{{ asset('css/maps.css') }}" rel="stylesheet" >







	<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
    <style>
        .bodyx {
            margin: 0;
            padding: 0;
        }
        .row {
            margin: 0;
        }
        @font-face {
            font-family: GreatVibes;
            src: url("{{ asset('assets/fonts/GreatVibes-Regular.ttf')}}");
        }
        .ft-great {
            font-family: 'GreatVibes';
        }
        @font-face {
            font-family: Poppins-Reg;
            src: url("{{ asset('assets/fonts/Poppins/Poppins-Regular.ttf')}}");
        }
        .ft-poppins-reg {
            font-family: 'Poppins-Reg';
        }
        .txt-gold {
            color: #9d7b48;
        }
        .headbg {
            width: 100%;
            background: url(<?= '/storage/'.$tmplt_custr->banner ?>)no-repeat center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-size: cover;
        }
        .bag1 {
            padding: 15vw 0 13vw;
        }
        .judul-1 {
            font-family: 'GreatVibes';
            /* background-color: black; */
            color: #9d7b48;
            font-size: 55px;
        }
        .judul-2 {
            font-family: 'Poppins-Reg';
            color: #9d7b48;
            font-size: 30px;
        }
        .judul-3 {
            font-family: 'Poppins-Reg';
            color: #9d7b48;
            font-size: 25px;
        }
        .bag2 {
            margin: 20px 120px 20px 120px;
        }
        .bag2-judul1 {
            font-family: 'Poppins-Reg';
            color: #5d5d5d;
            font-size: 35px;
        }
        .bag2-judul2 {
            font-family: 'GreatVibes';
            color: #9d7b48;
            font-size: 55px;
        }
        .bag2-judul3 {
            font-family: 'Poppins-Reg';
            color: #5d5d5d;
            font-size: 20px;
        }
        .bag3{
            margin: 70px 200px 70px 200px;
        }
        .box-jam {
            height: 190px;
            width: 190px;
            /* border: 2px solid blue; */
            border-radius: 5%;
            -webkit-box-shadow: 4px 7px 13px -3px rgba(0,0,0,0.75);
            -moz-box-shadow: 4px 7px 13px -3px rgba(0,0,0,0.75);
            box-shadow: 4px 7px 13px -3px rgba(0,0,0,0.75);
        }
        .bodi-box {
            color: #9d7b48;
            font-family: 'Poppins-Reg';
            font-size: 100px;
            font-weight: 900;
            margin-top: -20px;
        }
        .judul-box {
            color: #5d5d5d;
            font-family: 'Poppins-Reg';
            font-size: 20px;
        }
        .bag8bg {
            text-align: center;
            margin: 70px 100px;
            /* width: 100%; */
            background: url("{{ asset('assets/images/designc01/image-kehadiran.png')}}")no-repeat center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-size: cover;
        }
        .judul-bag8 {
            padding: 20px 0;
            font-family: 'Poppins-Reg';
            font-weight: bolder;
            color: #5d5d5d;
        }
        .btn-emas {
            color: #fff;
            background-color:#9d7b48;
            border-color: #9d7b48;
        }
        .penutup {
            font-family: 'GreatVibes';
            color: #9d7b48;
            font-size: 55px;
            text-align: center;
            margin-bottom: 50px;
        }
        @media (max-width: 992px) {
            .bag3{
                margin: 20px 150px 20px 150px !important;
            }
            .bodi-box {
                font-size: 70px !important;
            }
            .box-jam {
                height: 150px !important;
                width: 150px!important;
                border-radius: 5%;
            }
            .bag7 {
                margin: 70px 20px !important;
            }
            .bag8bg {
                margin: 70px 20px !important;
            }
            .bag4 {
                margin: 70px 60px !important;
            }
            .box-akad {
                margin-top: -15vw !important;
                width: 450px !important;
                height: 290px !important;
            }
            .img-akad {
                max-width: 450px !important;
            }
            .bag4-judul {
                font-size: 27px !important;
            }
            .bag4-tempat {
                font-size: 16px !important;
            }
        }
        @media (max-width: 780px) {
            .judul-1 {
                font-size: 35px;
            }
            .judul-2 {
                font-size: 15px;
            }
            .judul-3 {
                font-size: 15px;
            }
            .bag2-judul1 {
                font-size: 22px !important;
            }
            .bag2-judul2 {
                font-size: 32px !important;
            }
            .bag2-judul3 {
                font-size: 16px !important;
            }
            .bag3{
                margin: 20px 100px 20px 100px !important;
            }
            .bodi-box {
                font-size: 50px !important;
            }
            .box-jam {
                height: 120px !important;
                width: 150px!important;
                border-radius: 5%;
            }
            .judul-box {
                font-size: 15px;
            }
            .bag7 {
                margin: 70px 20px !important;
            }
            .bag8bg {
                margin: 70px 20px !important;
            }
            .img-akad {
                max-width: 400px !important;
            }
            .bag4-judul {
                font-size: 25px;
            }
            .bag4-tempat {
                font-size: 15px;
            }
        }
        @media (max-width: 575px) {
            .headbg {
                /* background: url("{{ asset('assets/images/designc01/banner-p.png')}}")no-repeat center; */
            width: 100%;
            background: url(<?= '/storage/'.$tmplt_custr->banner ?>)no-repeat center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            background-size: cover;
            }
            .overlay {
                background-color: #00000085;
                z-index: 1;
            }
            .judul-1 {
                color: white !important;
                font-size: 35px;
            }
            .judul-2 {
                color: white !important;
                font-size: 15px;
            }
            .judul-3 {
                color: white !important;
                font-size: 15px;
            }
            .bag2 {
                margin: 20px 20px 20px 20px !important;
            }
            .bag2-judul1 {
                text-align: center;
                font-size: 25px !important;
            }
            .bag2-judul2 {
                text-align: center;
                font-size: 35px !important;
            }
            .bag2-judul3 {
                text-align: center;
                font-size: 18px !important;
            }
            .bag3{
                margin: 20px 20px 20px 20px !important;
            }
            .bodi-box {
                font-size: 30px !important;
            }
            .box-jam {
                height: 80px !important;
                width: 80px!important;
                border-radius: 5%;
            }
            .judul-box {
                font-size: 10px;
            }
            .bag7 {
                margin: 70px 20px !important;
            }
            .bag8bg {
                margin: 70px 20px !important;
            }
            .bag4 {
                margin: 70px 20px !important;
            }
            .img-akad {
                max-width: 100% !important;
            }
            .bag4-judul {
                font-size: 22px !important;
            }
            .bag4-tempat {
                font-size: 13px !important;
            }
            .box-akad {
                margin-top: -8vw !important;
                width: 100% !important;
                height: 230px !important;
            }
        }
        
        /*  */

        
        .ft-55 {
            font-size: 55px;
        }
        .ft-45 {
            font-size: 45px;
        }
        .ft-25 {
            font-size: 25px;
        }
        .ft-30 {
            font-size: 30px;
        }

        .bag4 {
            /* margin: 70px 200px; */
            margin-left: 150px;
            margin-right: 150px;
        }
        .judul-bag4 {
            color: #5d5d5d;
            font-family: 'Poppins-Reg';
            font-size: 55px;
            text-align: center;
            font-weight: bolder;
        }

        .box-akad {
            margin-top: -15vw;
            width: 600px;
            height: 36      0px;
            z-index: 1;
            background-color: #fff;
            text-align: center;
            -webkit-box-shadow: 9px 9px 18px -1px rgba(0,0,0,0.75);
            -moz-box-shadow: 9px 9px 18px -1px rgba(0,0,0,0.75);
            box-shadow: 9px 9px 18px -1px rgba(0,0,0,0.75);
        }
        .img-akad {
            max-width: 600px;
        }
        .pad-nol {
            padding: 0px 0px;
        }
        
        .bag7 {
            margin: 70px 100px;
        }
        .padcol div {
            padding: 7px 7px;
        }

        .bag4-judul {
            font-family: 'Poppins-Reg';
            font-weight: 900;
            color: #5d5d5d;
            font-size: 30px;
        }
        .bag4-tempat {
            font-family: 'Poppins-Reg';
            color: #black;
            font-size: 20px;
        }
        .spasi {
            margin-bottom: 50px;
        }
        
    </style>
</head>
<body class="bodyx">
    <div class="headbg" id="home">
        <div class="overlay">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 bag1 text-center">
                    <div class="judul-1" data-sal="flip-up" data-sal-duration="800">Save The Date</div>
                    <div class="judul-2" data-sal="flip-up" data-sal-duration="800" data-sal-delay="200">wedding of</div>
                    <div class="judul-1" data-sal="flip-up" data-sal-duration="800" data-sal-delay="400">{{ empty($tmplt_custr) ? "Henry Fernandez" : $tmplt_custr->nama_mempelai_pria }} &amp; {{ empty($tmplt_custr) ? "Laura Basuki Kirana" : $tmplt_custr->nama_mempelai_wanita }}</div>
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
                    <div class="bag2-judul2"> {{ empty($tmplt_custr) ? "Henry Fernandez" : $tmplt_custr->nama_mempelai_pria }}</div>
                    <div class="bag2-judul3">Putra Pertama Bpk. {{ empty($tmplt_custr) ? "Ahmad Suryadi" : $tmplt_custr->nama_orang_tua_pria_bapak }}  &amp; {{ empty($tmplt_custr) ? "Ibu Mislawati" : "Ibu ".$tmplt_custr->nama_orang_tua_pria_ibu }} </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center" data-sal="slide-left" data-sal-duration="800">
                <img src="<?php echo empty($tmplt_custr) ? url('assets/images/designc01/male.png') : url('storage' , $tmplt_custr->path_foto_pria)  ?>" alt="">
            </div>
        </div>
    </div>
    <div class="bag2">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-center" data-sal="slide-right" data-sal-duration="800">
                <img src="<?php echo empty($tmplt_custr) ? url('assets/images/designc01/female.png') : url('storage' , $tmplt_custr->path_foto_wanita)  ?>" alt="">
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 text-right" data-sal="slide-left" data-sal-duration="800">
                    <div class="bag2-judul1 text-uppercase">mempelai wanita</div>
                    <div class="bag2-judul2">{{ empty($tmplt_custr) ? "Laura Basuki Kirana" : $tmplt_custr->nama_mempelai_wanita }}</div>
                    <div class="bag2-judul3">Putri Pertama Bpk. {{ empty($tmplt_custr) ? "Taufik Romadhon" : $tmplt_custr->nama_orang_tua_wanita_bapak }} &amp; {{ empty($tmplt_custr) ? "Ibu Gina Rizka" : "Ibu ".$tmplt_custr->nama_orang_tua_wanita_ibu }}</div>
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
        @if(empty($gallerys))
         <!-- KONDISI TIDAK ADA DATA  -->
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
            @endif
            @if(!empty($gallerys))
            <!-- KONDISI ADA DATA  -->
                    @foreach($gallerys as $glr)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <img src="<?php echo url('storage' , $glr->path_foto)?>" alt="">
                    </div>
                 @endforeach
            @endif
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
    {{ empty($tmplt_custr) ? "Henry" : $tmplt_custr->nama_mempelai_pria }}
         &amp;
    {{ empty($tmplt_custr) ? "Laura" : $tmplt_custr->nama_mempelai_wanita }}
    </div>
    <div id = "map" style = "width:100%; height:600px;"></div>
</body>
</html>
<script src="{{asset('js/bootstrap.min.js') }}"></script>
<script src="{{asset('js/jQuery.scrollSpeed.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/sal.js/dist/sal.js')}}"></script>


<script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

<script src="js/maps.js"></script>
<script type ='text/javascript'>setCoords(-6.251,106.586444)</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfAXqhEhpD17LucNYl4pDXEeqEBQTXoyQ&callback=initMap">
</script>
<script>
    sal({
        once: false
    });
</script>

<script>
// Set the date we're counting down to
var dataDate =  <?php echo !empty($tmplt_custr) ? json_encode($tmplt_custr->tgl_akad) : json_encode("Jan 5, 2021 15:37:25") ?>;
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