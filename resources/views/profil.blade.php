@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <h2>Profil Pengguna</h2>
    <form>
        <hr>
        <div class="form-group row">
            <label for="inputNama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <span id="inputNama">{{ Auth::user()->name }}</span>
            </div>
        </div>
        <hr> <!-- Garis pembatas -->
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <span id="inputEmail">{{ Auth::user()->email }}</span>
            </div>
        </div>
        <hr> <!-- Garis pembatas -->
        <!-- Tambahkan kolom lain seperti Alamat, Telepon, dll. sesuai kebutuhan -->
        <!-- Contoh:
        <div class="form-group row">
            <label for="inputAlamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="inputAlamat" rows="3" placeholder="Masukkan alamat lengkap Anda">{{ Auth::user()->alamat }}</textarea>
            </div>
        </div>
        -->

    </form>
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
