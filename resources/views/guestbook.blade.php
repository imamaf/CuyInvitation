<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('../assets/img/logo-title.svg') }}">
    <title>GuestBook | CuyInvitation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- bootstrap css -->
    <link href="{{ asset('assets/css/guestbook-style.css') }}" rel='stylesheet' type='text/css' />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</head>

<body>
<div class="guestbook">
    <div class="row">
        <div class="col-md-5 col-sm-12">
            <div class="sidenav">
                <div class="login-main-text">
                    <h2>Selamat Datang di Pernikahan</h2>
                    <p>Tommy & Kharin</p>
                    <div class="logo">
                        <img src="../assets/img/logo-putih.svg" alt="">
                    </div>
                    <div class="banner-img">
                        <img src="../assets/img/img-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-sm-12">
            
                <div class="login-logo">
                    <img src="../assets/img/logo-hijau.svg" alt="">
                </div>
                <div class="content-login">
                    <form>
                        <p>Silahkan masukan data kehadiran kamu</p>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Undangan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="hubungan" placeholder="Hubungan" style="font-size:12px">
                                <option value="" selected disabled>Hubungan</option>
                                <option value="">Keluarga</option>
                                <option value="">Teman Dekat</option>
                                <option value="">Teman SD</option>
                                <option value="">Teman SMP</option>
                                <option value="">Teman SMK</option>
                                <option value="">Teman Kuliah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" id="alamat" placeholder="Pesan Ucapan"></textarea>
                        </div>
                    </form>
                </div>
                <div class="login-button">
                    <button type="submit" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">HADIR</button>
                </div>
                <div class="login-footer">
                    <p>© Copyright cuyinvitation 2020. All Rights Reserved.</p>
                </div>
            
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-logo">
                    <img src="../assets/img/logo-hijau.svg" alt="">
                </div>
                <div class="modal-text">
                    <h3>Horee!</h3>
                    <h5>Data berhasi disimpan</h5>
                    <div class="modal-text-p">
                        <p>Kamu akan mendapatkan souvenir 
                            dari petugas kami. Terima kasih
                        </p>
                    </div>
                </div>
                <div class="modal-close">
                    <button type="button" class="btn btn-ok" data-dismiss="modal">OK</button>
                </div>
                
            </div>
        </div>
    </div>
</div>



</body>
</html>