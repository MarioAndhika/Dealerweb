@extends('layouts.app')

@section('content')
    <!-- Slider -->
    @if (!$cat)
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/hasil mobil.png') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/silde 2.png') }}" class="d-block w-100" alt="Slide 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    @endif

    <!-- Model Teratas -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="model mt-5">
                    @forelse ($cars as $item)
                    <h3 class="text-black @if($cat) text-center mb-5 @else mb-3 @endif">{{ $item->name }}</h3>
                    <div class="row mb-4 @if($cat) justify-content-center @endif">
                            @forelse ($item->car as $car)
                            <div class="col-md-3">
                                <a href="{{ route('car.detail', $car->slug) }}" class="text-decoration-none">
                                    <div class="card card-body shadow-sm">
                                        <img src="{{ asset('car/' . $car->image) }}" class="d-block w-100 h-auto">
                                        <small class="text-muted">{{ $car->category->name }}</small>
                                        <p class="text-black">
                                            <b>{{ $car->name }}</b>
                                            <br>
                                            RP {{ number_format($car->price, 0, ',', '.') }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @empty
                            <div class="alert alert-warning">Kategori ini belum ada mobil!</div>
                            @endforelse
                        </div>
                        @empty
                            @if ($cat)
                                <div class="alert alert-warning text-center">Mobil dengan kategori ini belum tersedia!</div>
                            @else
                                <div class="alert alert-warning text-center">Mobil belum tersedia!</div>
                            @endif
                        @endforelse
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
                    <p>Dealer Mobil adalah perusahaan yang bergerak di bidang penjualan mobil. Dealer Mobil menyediakan
                        berbagai jenis mobil sesuai kebutuhan Anda.</p>
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
