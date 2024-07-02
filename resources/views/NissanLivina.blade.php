@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container my-5 main-content-box">
        <div class="row">
            <div class="col-md-8">
            <div class="specification-section">
                <h2 class="text-white">Nissan Livina</h2>
                <img src="{{ asset('assets/.jpeg') }}" class="card-img-top" alt="...">
            </div>
            <div class="specification-section">
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="spec-box">
                            <img src="{{ asset('assets/transmission-spec.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                            <p>Manual, Otomatis</p>
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
                            <p>1499 cc</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spec-box">
                            <img src="img/model-seats.png" alt="Tempat Duduk" class="spec-icon" style="width: 30px;">
                            <p>7 Tempat Duduk</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="specification-section">
                <h3 class="text-white">Daftar Harga Nissan Livina</h3>
                <div class="price-box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi Livina 1.5 EL MT</h5>
                                <p class="card-text">Harga Rp292.5 Juta</p>
                                <p class="card-text">Manual, 7 seats, 1,499 cc, Bensin</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi Livina 1.5 EL MT</h5>
                                <p class="card-text">Harga Rp316.5 Juta</p>
                                <p class="card-text">Automatic, 7 seats, 1,499 cc, Bensin</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi Livina 1.5 EL MT</h5>
                                <p class="card-text">Harga Rp327Juta</p>
                                <p class="card-text">Automatic, 7 seats, 1,499 cc, Bensin</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

             <div class="specification-section">
                <p>Review Nissan Livina</p>
                <p>Di segmen mobil keluarga, Nissan punya satu jagoan yang memiliki kombinasi MPV rasa sedan yaitu Nissan Livina. Livina diperkenalkan pertama kali pada 6 Juli 2006 oleh perusahaan Nissan Motors dan rekanan di China, Dongfeng Nissan Passenger Vehicle Company di Guangzhou International Motor Show. Sementara untuk pasar Indonesia, Nissan Livina diluncurkan di Indonesia pada 2007 lalu.</p>
                <p>Awalnya, Livina hadir dalam dua tipe yaitu versi 5 penumpang dan versi panjang 7 penumpang berbentuk MPV yang disebut Grand Livina. Seri Livina dengan lima penumpang disediakan dalam dua varian, Livina XR dan Livina X-Gear. Untuk Livina X-Gear hadir setahun setelahnya yaitu pada 2008 dengan tampilan ala crossover. Livina X-Gear didandani dengan over fenders, bemper yang sporty, rel atap sehingga tampilannya seperti sebuah crossover.</p>
                <p>Livina hadir sebagai mobil keluarga yang memiliki desain elegan dan beda dengan merek lain. Mobil ini mengedepankan sisi kenyamanan yang lebih baik dibandingkan mobil keluarga sejenis. Desain interiornya mewah didukung dengan fitur kenyamanan seperti mobil sedan, nilai efisiensi terbaik dan fitur keamanan yang mumpuni. Saat Nissan Motor Indonesia memutuskan untuk menghadirkan Livina ke Indonesia, kondisi market saat itu terjadi suatu kejenuhan atas mobil MPV. Nissan lantas mendatangkan model baru MPV dengan desain dan performa yang jauh lebih baik.</p>
                <p>Nissan Livina saat itu diluncurkan dengan harga yang kompetitif dengan para pesaingnya. Bahkan, Nissan Livina tergolong memiliki fitur yang lebih lengkap ketimbang pesaingnya. Livina sempat digadang-gadang bisa menyaingi Xenia-Avanza namun pada akhirnya reputasinya kalah jauh di pasaran dan tak lagi diproduksi. Nissan pun hanya mengandalkan Grand Livina untuk bertarung melawan Xenia-Avanza selama lebih dari satu dekade.</p>
                <p>Memasuki awal 2011, Nissan Motor Indonesia melakukan sedikit pembaharuan pada varian Nissan Grand Livina. Grand Livina facelift ditawarkan dalam varian 1.5 S, 1.5 SV, 1.5 XV, dan 1.5 Ultimate. Untuk tipe tertinggi yang ditawarkan yaitu Highway Star, dengan versi 1.5 dan 1.8. Sementara itu, produksi Grand Livina 1.8 XV dan 1.8 Ultimate tak dilanjutkan lagi. Selang 12 tahun kemudian, PT Nissan Motor Indonesia baru merilis major facelift pada keluarga Livina.</p>
            </div>
                <div class="specification-section">
                    <h3 class="text-white">Spesifikasi Lengkap</h3>
                    <table class="table table-dark table-bordered">
                        <tbody>
                            <tr>
                                <th>Dimensi</th>
                                <td>
                                    <p>Tinggi (mm): 1695</p>
                                    <p>Lebar (mm): 1750</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Detil Mesin</th>
                                <td>
                                    <p>Konfigurasi mesin: 4 Cylinder inline, 16 valve, DOHC and twin VTC (Variable-valve Timing Control)</p>
                                    <p>Isi silinder (cc): 1499</p>
                                    <p>Jenis bahan bakar: Bensin</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Performa</th>
                                <td>
                                    <p>Tenaga: 104 ps/6.000 rpm</p>
                                    <p>Torsi: 141 kg.m/4.000 rpm</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Suspensi & Rem</th>
                                <td>
                                    <p>Rem Depan: Ventilated Disc</p>
                                    <p>Suspensi Depan: McPherson Strut with Stabilizer</p>
                                    <p>Rem Belakang: Drum Brake</p>
                                    <p>Suspensi Belakang: Torsion Beam with Stabilizer</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Velg & Ban</th>
                                <td>
                                    <p>Ukuran ban: 205/55</p>
                                    <p>Material velg: 16-inch Alloy wheels</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Keselamatan Aktif</th>
                                <td>
                                    <p>Anti lock Braking System: Yes</p>
                                    <p>Brake Assist: Yes</p>
                                    <p>Electronic Brake Distribution: Yes</p>
                                    <p>Hill Start Assist: Yes</p>
                                    <p>Traction Control System: Yes</p>
                                    <p>Vehicle Dynamic Control: Yes</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Keselamatan Pasif</th>
                                <td>
                                    <p>Airbag: Dual Srs Airbag(Driver & Fr Passenger)</p>
                                    <p>Child Safety Locks: Yes</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
            <div class="specification-section">
                <h5 class="text-white">Isi detail Anda dan dapatkan penawaran terbaik dari Carmudi</h5>
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

 <!-- footer -->
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
