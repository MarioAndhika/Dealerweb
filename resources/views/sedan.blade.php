@extends('layouts.app')

@section('content')

<div class="container my-5" style="color: black;">
    <div class="main-content-box">
        <!-- Section SEDAN -->
        <h1 class="text-center mb-5">SEDAN</h1>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card">
                    <a href="mg5gt.html">
                    <img src="{{asset('assets/MG-5-GT.jpg')}}" class="d-block w-100" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Mg 5 GT</h5>
                        <div class="card-text">
                            <ul class="list-unstyled text-center">
                                <hr>
                                <li>
                                    <span>Otomatis</span>
                                    <span>Transmisi</span>
                                </li>
                                <hr>
                                <li>
                                    <span>Bensin</span>
                                    <span>Bahan bakar</span>
                                </li>
                                <hr>
                                <li>
                                    <span>1498 cc</span>
                                    <span>Mesin</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <p>Rp347.9 - 407.9 Juta</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <a href="bmw.html">
                        <img src="{{asset('assets/bmw 320i.jpeg')}}" class="d-block w-100" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Bmw 320i</h5>
                        <div class="card-text">
                            <ul class="list-unstyled text-center">
                                <hr>
                                <li>
                                    <span>Otomatis</span>
                                    <span>Transmisi</span>
                                </li>
                                <hr>
                                <li>
                                    <span>Bensin</span>
                                    <span>Bahan bakar</span>
                                </li>
                                <hr>
                                <li>
                                    <span>1498 cc</span>
                                    <span>Mesin</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <p>Rp837 Jt - 1.145 Milyar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <a href="Lexus Ls.html">
                        <img src="{{asset('assets/slide2.jpg')}}" class="d-block w-100" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Lexus LS 500h</h5>
                        <div class="card-text">
                            <ul class="list-unstyled text-center">
                                <hr>
                                <li>
                                    <span>Otomatis</span>
                                    <span>Transmisi</span>
                                </li>
                                <hr>
                                <li>
                                    <span>Hybrid</span>
                                    <span>Bahan bakar</span>
                                </li>
                                <hr>
                                <li>
                                    <span>3456 cc</span>
                                    <span>Mesin</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <p>Rp3.535 Milyar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section SEDAN COUPE -->
        <h1 class="text-center mb-5">SEDAN COUPE</h1>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <a href="mercedes.html">
                        <img src="{{asset('assets/mercedes.jpg')}}" class="d-block w-100" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Mercedes-Benz AMG GT R Coupe</h5>
                        <div class="card-text">
                            <ul class="list-unstyled text-center">
                                <hr>
                                <li>
                                    <span>Otomatis</span>
                                    <span>Transmisi</span>
                                </li>
                                <hr>
                                <li>
                                    <span>Bensin</span>
                                    <span>Bahan bakar</span>
                                </li>
                                <hr>
                                <li>
                                    <span>2000 cc</span>
                                    <span>Mesin</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <p>Rp837 Jt - 1.145 Milyar</p>
                        </div>
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
