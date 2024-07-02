@extends('layouts.app')

@section('content')
<style>
    .card a {
        text-decoration: none;
        color: inherit; /* Pilih warna teks sesuai kebutuhan */
    }
</style>

<div class="container mt-5">
    <!-- Section SUV -->
    <div class="sedan">
        <h1 class="text-center mb-3">MPV</h1>
        <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <a href="{{ url('Alphar') }}">
                        <img src="{{ asset('assets/mobil_2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title ">Toyota Alphard</h5>
                            <p class="card-text">Rp1.381 - 1.682 Milyar</p>
                        </div>
                    </a>
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
