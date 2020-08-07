@extends('layouts.header')

@section('title')
    Index | CuyInvitation
@endsection

@section('content')
    <div style="width: 100%;">
        <img src="../assets/images/footer.jpg" alt class="img-fluid img-header">
    </div>
    <div class="container">
        <div class="main-desc">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ url('storage' , $templateDetail->url_gambar)}}" alt class="img-fluid mx-auto d-block">
                </div>
                <div class="col-md-6">
                    <div class="title-detail">
                        <h5>{{$templateDetail->nama_template}}</h5>
                    </div>
                    <div class="produk-price">
                        <span class="new-price">
                            Rp. {{$templateDetail->harga_template}}
                        </span>
                    </div>
                    <div class="produk-desc">
                        <p>{{$templateDetail->deskripsi_template}}
                        </p>
                    </div>
                    <div class="float-right" style="margin-left:10px;">
                        <a href="{{ url($templateDetail->link) }}" class="btn-detail">Preview</a>
                    </div>
                    <div class="float-right">
                        <a href="https://wa.me/6281368922122?text=Hi *Cuy Invitation* agent, saya baru saja melihat website cuyinvitation.com" data-action="share/whatsapp/share" class="btn-detail">Pesan</a>
                    </div>
                    <div class="produk-share">
                        <h3>Share this product</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-pinterest-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection