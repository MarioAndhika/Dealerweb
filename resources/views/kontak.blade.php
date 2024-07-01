@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <!-- Informasi Kontak -->
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h2 class="card-title">Alamat dan Kontak Perusahaan</h2>
                    <p class="card-text">Kantor Amikom Ruko Permata Regensi Blok B-18, Jalan Haji Kelik
                        Srengseng, Kembangan, Jakarta Barat 11630 (Depan Hutan Kota Srengseng)</p>
                    <p class="card-text"><strong>Telepon:</strong> (021) 5890-8355 , 0812-9933-3913</p>
                    <p class="card-text"><strong>Customer Service:</strong></p>
                    <ul class="list-unstyled">
                        <li>CS #1 : 089187234567</li>
                        <li>CS #2 : 081350981234</li>
                        <li>CS #3 : 082123456789</li>
                        <li>CS #4 : 085132476809</li>
                    </ul>
                    <p class="card-text"><strong>Email:</strong> info@dealermobil.com</p>
                </div>
            </div>
        </div>

        <!-- Form Kontak -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">Form Kontak</h2>
                    <form action="/submit-contact-form" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Anda</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Anda</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="Tuliskan pesan Anda di sini" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
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
