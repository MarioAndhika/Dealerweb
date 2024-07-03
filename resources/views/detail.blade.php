@extends('layouts.app')

@section('content')
    <div class="container my-5 main-content-box">
        <div class="row">
            <div class="col-md-8">
                <div class="specification-section">
                    <h2 class="text-black">{{ $car->name }}</h2>
                    <img src="{{ asset('car/' . $car->image) }}" class="card-img-top" alt="...">
                </div>
                <div class="spec-section">
                    <div class="row text-center mb-4 mt-4">
                        <div class="col">
                            <div class="spec-box">
                                <img src="{{ asset('assets/transmission-spec.png') }}" class="card-img-top"
                                    style="width: 30px;" alt="...">
                                <p>{{ $car->transmision }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spec-box">
                                <img src="{{ asset('assets/fuel-type.png') }}" class="card-img-top" style="width: 30px;"
                                    alt="...">
                                <p>{{ $car->fuel }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spec-box">
                                <img src="{{ asset('assets/engine-size.png') }}" class="card-img-top" style="width: 30px;"
                                    alt="...">
                                <p>{{ $car->enggine }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spec-box">
                                <img src="{{ asset('assets/model-seats.png') }}" class="card-img-top" style="width: 30px;"
                                    alt="...">
                                <p>{{ $car->seat }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="detail-section">
                    <h3 class="text-secondary">Harga : Rp {{ number_format($car->price, 0, ',', '.') }}</h3>
                </div>

                <div class="detail-section">
                    <h3 class="text-black">Deskripsi</h3>
                    {!! $car->description !!}
                </div>
            </div>
            <div class="col-md-4">
                @if (Auth::check())
                    <div class="specification-section">
                        <h5 class="text-black">Form Checkout</h5>
                        <form method="POST" action="{{ route('car.process', $car->slug) }}">
                            @csrf
                            <input type="hidden" name="car_id" value="{{ $car->id }}">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama" name="name" required
                                    value="{{ Auth::user()->name }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nomor" class="form-label">Nomor WhatsApp <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="no_wa" id="nomor" required
                                    value="{{ Auth::user()->no_wa }}" @if (Auth::user()->no_wa) readonly @endif>
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">Alamat <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="address" id="kota" required
                                    value="{{ Auth::user()->address }}" @if (Auth::user()->address) readonly @endif>
                            </div>
                            <div class="mb-3">
                                <label for="waktu_beli" class="form-label">Tanggal Checkout</label>
                                <input type="date" name="checkout_date" required id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                                <select class="form-select" name="payment_method" id="metode_pembayaran" required>
                                    <option value="Tunai">Tunai</option>
                                    <option value="Kredit">Kredit</option>
                                </select>
                            </div>
                            @if (Auth::user()->role == 'Admin')
                                <button type="submit" class="btn btn-primary w-100" disabled>ADMIN DILARANG
                                    CHECKOUT!</button>
                            @else
                                <button type="submit" class="btn btn-primary w-100">Checkout Sekarang</button>
                            @endif
                        </form>
                    </div>
                @else
                    <div class="alert alert-info text-center">Silahkan login untuk checkout</div>
                @endif
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
            <p class="text-center mt-3">&copy; 2024 Dealer Mobil. All rights reserved.</p>
        </div>
    </footer>
@endsection
