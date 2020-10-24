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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
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
                    <button type="submit" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">HADIR</button>
                </form>
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
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



</body>
</html>