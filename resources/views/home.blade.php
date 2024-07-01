@extends('layouts.app')

@section('content')

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/hasil mobil.png') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/silde 2.png') }}" class="d-block w-100" alt="Slide 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Model Teratas -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="model mt-5">
                    <h3>Model Teratas</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('assets/c3.jpeg') }}" class="d-block w-100 h-auto" alt="Citroen C3">
                            <p>Citroen C3<br>Rp225 - 236 Juta</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/MG-5-GT.jpg') }}" class="d-block w-100 h-auto" alt="Mg 5 GT">
                            <p>Mg 5 GT<br>Rp347.9 - 407.9 Juta</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/bmw 320i.jpeg') }}" class="d-block w-100 h-auto" alt="Bmw 320i">
                            <p>Bmw 320i<br>Rp837 Jt - 1.145 Milyar</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('assets/mercedes.jpg') }}" class="d-block w-100 h-auto" alt="Mercedes-Benz AMG GT R Coupe">
                            <p>Mercedes-Benz AMG GT R Coupe<br>Rp837 Jt - 1.145 Milyar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Model Pilihan -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="model mt-5">
                    <h3>Model Pilihan</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('assets/Toyota Alp.jpeg')}}" class="d-block w-100" alt="...">
                            <p>Toyota Alphard<br>Rp1.381 - 1.682 Milyar</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('assets/Honda HR-V.jpeg')}}" class="d-block w-100" alt="...">
                            <p>Honda HR-V<br>Rp383.9 - 540.3 Juta</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('assets/Chery Omoda 5.jpeg')}}" class="d-block w-100" alt="...">
                            <p>Chery Tiggo 8 Pro<br>Rp528.5 - 558.5 Juta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Model Terbaru -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="model mt-5">
                    <h3>Model Terbaru</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('assets/livina.jpg')}}" class="d-block w-100" alt="...">
                            <p>Nissan Livina<br>Rp292.5 - 327 Juta</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('assets/slide2.jpg')}}" class="d-block w-100" alt="...">
                            <p>Lexus LS 500 Executive<br>Rp3.745 Milyar</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('assets/wuling Almaz.jpeg')}}" class="d-block w-100" alt="...">
                            <p>Wuling Almaz Hybrid<br>Rp476 Juta</p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{asset('assets/Mazda CX-30.jpg')}}" class="d-block w-100" alt="...">
                            <p>Mazda CX-30<br>Rp572.2 Juta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5" style="background-color: #333; color: white; padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Dealer Mobil</h3>
                    <p>Dealer Mobil adalah perusahaan yang bergerak di bidang penjualan mobil. Dealer Mobil menyediakan berbagai jenis mobil sesuai kebutuhan Anda.</p>
                </div>
                <div class="col-md-4">
                    <h3>Alamat</h3>
                    <p>Jl. Raya Kediri, No. 1, Kediri, Jawa Timur</p>
                </div>
                <div class="col-md-4">
                    <h3>Kontak</h3>
                    <p>Telepon: 08123456789</p>
                    <p>Email: info@dealermobil.com</p>
                </div>
            </div>
        </div>
    </footer>

@endsection
