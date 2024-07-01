@extends('layouts.app')

@section('content')
<div class="container my-5 main-content-box">
        <div class="row">
            <div class="col-md-8">
                <div class="specification-section">
                    <h2 class="text-black">Citroen C3</h2>
                    <img src="{{ asset('assets/c3.jpeg') }}" class="card-img-top" alt="...">
                </div>
                <div class="spec-section">
                    <div class="row text-center mb-4">
                        <div class="col">
                            <div class="spec-box">
                                <img src="{{ asset('assets/transmission-spec.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                                <p>Manual</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spec-box">
                                <img src="{{ asset('assets/fuel-type.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                                <p>Bensin</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spec-box">
                                <img src="{{ asset('assets/engine-size.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                                <p>1189 cc</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spec-box">
                                <img src="{{ asset('assets/model-seats.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                                <p>5 Tempat Duduk</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="price-section">
                    <h3 class="text-white">Harga Citroen C3</h3>
                    <div class="price-box">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card p-3 mb-3">
                                    <h5 class="card-title">Edisi C3 Monotone</h5>
                                    <p class="card-text">Harga Rp225 Juta</p>
                                    <p class="card-text">Manual 5 speed, 5 seats,1,198 cc, Bensin</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-3 mb-3">
                                    <h5 class="card-title">Edisi C3 Monotone</h5>
                                    <p class="card-text">Harga Rp225 Juta</p>
                                    <p class="card-text">Manual 5 speed, 5 seats,1,198 cc, Bensin</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card p-3 mb-3">
                                    <h5 class="card-title">Edisi C3 Monotone</h5>
                                    <p class="card-text">Harga Rp225 Juta</p>
                                    <p class="card-text">Manual 5 speed, 5 seats,1,198 cc, Bensin</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="review-section">
                    <p>Review Citroen c3</p>
                    <p>Citroen C3 merupakan mobil hatchback yang diproduksi oleh produsen mobil asal Prancis, Citroen. Mobil ini memiliki desain yang unik dan menarik serta dilengkapi dengan fitur-fitur modern dan canggih. Citroen C3 diluncurkan di Indonesia pada tahun 2022 dan mendapat sambutan yang cukup positif dari para penggemar mobil di Indonesia. Berikut adalah ulasan tentang Citroen C3 di Indonesia.</p>
                    <p>Desain Citroen C3</p>
                    <p>Mobil Citroen C3 memiliki desain eksterior yang unik dengan bentuk yang membulat dan garis-garis yang tegas. Mobil ini memiliki grille depan yang besar dengan logo Citroen yang menonjol. Bagian belakang mobil ini dilengkapi dengan spoiler dan lampu belakang yang membentuk pola segitiga. Dimensi mobil ini cukup kompak dengan panjang 3.981 mm, lebar 1.733 mm, dan tinggi 1.604 mm.</p>
                    <p>Interior Mobil Citroen C3</p>
                    <p>Kabin Citroen C3 dilengkapi dengan kursi yang nyaman dan dilapisi dengan bahan. Dashboard mobil ini dilengkapi dengan layar sentuh 10 inci yang dapat terhubung dengan smartphone melalui Android Auto atau Apple CarPlay. Mobil ini juga dilengkapi dengan sistem audio yang menghasilkan suara yang baik.</p>
                    <p>Performa Citroen C3</p>
                    <p>Citroen C3 dilengkapi dengan mesin bensin 1.2L Non Turbo yang dapat menghasilkan tenaga hingga 81 horsepower dan torsi 115 Nm. Mesin ini dikombinasikan dengan transmisi manual lima percepatan</p>
                    <p>Harga Citroen C3 Terbaru</p>
                    <p>Harga Citroen C3 di Indonesia dibanderol mulai dari Rp 225 juta untuk tipe Monotone hingga Rp 236 juta untuk tipe Dual Tone Plus. Harga yang cukup bersaing untung dikelasnya.</p>
                    <p>Kesimpulan</p>
                    <p>Citroen C3 adalah mobil hatchback yang menarik dan unik dengan desain yang berbeda dari mobil-mobil lainnya di kelasnya. Mobil ini dilengkapi dengan mesin yang cukup bertenaga. Diharapkan Citroen akan terus mengembangkan dan memperbarui Citroen C3 agar tetap menjadi pilihan menarik di pasar otomotif Indonesia.</p>
                </div>

                <div class="specification-section">
                    <h3 class="text-black">Spesifikasi Lengkap</h3>
                    <table class="table table-bordered">
                        <tbody>
                                <tr>
                                    <th>Dimensi</th>
                                    <td>
                                        <p>Tinggi (mm): 1604</p>
                                        <p>Lebar (mm): 1733</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Detil Mesin</th>
                                    <td>
                                        <p>Konfigurasi mesin: 1.2L Non Turbo</p>
                                        <p>Isi silinder (cc): 1198</p>
                                        <p>Jenis bahan bakar: Bensin</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Performa</th>
                                    <td>
                                        <p>Tenaga: 81 Hp / 5.750 rpm</p>
                                        <p>Torsi: 115 Nm /3.750 rpm</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Suspensi & Rem</th>
                                    <td>
                                        <p>Rem Depan:  Disk Brake</p>
                                        <p>Suspensi Depan: McPherson Strut with Coil Spring</p>
                                        <p>Rem Belakang: Drum Brake</p>
                                        <p>Suspensi Belakang: Rear Twist Beam with Coil Spring</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Velg & Ban</th>
                                    <td>
                                        <p>Ukuran ban: 195/65 15</p>
                                        <p>Material velg: 15 inch Alloy wheel</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Keselamatan Aktif</th>
                                    <td>
                                        <p>Anti lock Braking System: Yes</p>
                                        <p>Brake Assist: No</p>
                                        <p>Electronic Brake Distribution: Yes</p>
                                        <p>Hill Start Assist: Yes</p>
                                        <p>Traction Control System: Yes</p>
                                        <p>Vehicle Dynamic Control: Yes</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Keselamatan Pasif</th>
                                    <td>
                                        <p>Airbag: 2 – Driver Front & Passenger Front Airbags</p>
                                        <p>Child Safety Locks: Yes</p>
                                        <p>Sabuk Pengaman Depan: Fix</p>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="specification-section">
                    <h5 class="text-black">Isi detail Anda dan dapatkan penawaran terbaik dari Carmudi</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama <span class="text-danger">(Wajib Diisi)</span></label>
                            <input type="text" class="form-control" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor WhatsApp <span class="text-danger">(Wajib Diisi)</span></label>
                            <input type="text" class="form-control" id="nomor" required>
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota <span class="text-danger">(Wajib Diisi)</span></label>
                            <input type="text" class="form-control" id="kota" required>
                        </div>
                        <div class="mb-3">
                            <label for="waktu_beli" class="form-label">Kapan Anda berencana untuk beli?</label>
                            <select class="form-select" id="waktu_beli">
                                <option value="dalam_bulan_ini">Dalam Bulan Ini</option>
                                <option value="bulan_depan">Bulan Depan</option>
                                <option value="2-3_bulan">2-3 Bulan Kedepan</option>
                                <option value="belum_tahu">Belum Tau</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" id="metode_pembayaran">
                                <option value="tunai">Tunai</option>
                                <option value="kredit">Kredit</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim</button>
                    </form>
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
