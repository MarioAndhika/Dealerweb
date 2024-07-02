@extends('layouts.app')

@section('content')

<style>
    .card a {
        text-decoration: none;
        color: inherit; /* Pilih warna teks sesuai kebutuhan */
    }
</style>

<div class="container my-5" style="color: black;">
    <div class="main-content-box">
        <!-- Section SEDAN -->
        <div class="sedan">
            <h1 class="text-center mb-3">SEDAN</h1>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <a href="{{ url('mg5gt') }}">
                            <img src="{{ asset('assets/mobil_2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title ">MG 5 GT</h5>
                                <p class="card-text">Rp347.9 - 407.9 Juta</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <a href="{{ url('bmw') }}">
                            <img src="{{ asset('assets/mobil_2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title ">BMW 320i</h5>
                                <p class="card-text">Rp837 Jt - 1.145 Milyar</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <a href="{{ url('Lexus ls') }}">
                            <img src="{{ asset('assets/mobil_2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title ">Lexus LS 500h</h5>
                                <p class="card-text">Rp3.535 Milyar</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section SEDAN COUPE -->
        <div class="sedan-coupe mt-5">
            <h1 class="text-center mb-3">SEDAN COUPE</h1>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <a href="{{ url('mercedes') }}">
                            <img src="{{ asset('assets/mobil_2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title ">Mercedes-Benz AMG GT R Coupe</h5>
                                <p class="card-text">Rp837 Jt - 1.145 Milyar</p>
                            </div>
                        </a>
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
        <p class="text-center mt-3">&copy; 2024 Dealer Mobil. All rights reserved.</p>
    </div>
</footer>

@endsection
