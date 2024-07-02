@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container my-5 main-content-box">
        <div class="row">
            <div class="col-md-8">
            <div class="specification-section">
                <h2 class="text-white">Honda HR-V</h2>
                <img src="{{ asset('assets/Honda HR-V.jpeg') }}" class="card-img-top" alt="...">
            </div>
            <div class="specification-section">
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="spec-box">
                            <img src="{{ asset('assets/transmission-spec.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                            <p>Manual,Otomatis</p>
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
                            <p>1497 & 1498 cc</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spec-box">
                            <img src="img/model-seats.png" alt="Tempat Duduk" class="spec-icon" style="width: 30px;">
                            <p>5 Tempat Duduk</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="specification-section">
                <h3 class="text-white">Daftar Harga Honda HR-V</h3>
                <div class="price-box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi All New HR-V S CVT</h5>
                                <p class="card-text">Harga Rp383.9 Juta</p>
                                <p class="card-text">Automatic, 5 seats, 1,497 cc, Bensin</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi All New HR-V E CVT</h5>
                                <p class="card-text">Harga Rp404.2 Juta</p>
                                <p class="card-text">Automatic, 5 seats, 1,497 cc, Bensin</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi All New HR-V SE CVT</h5>
                                <p class="card-text">Harga Rp424.6 Juta</p>
                                <p class="card-text">Automatic, 5 seats, 1,497 cc, Bensin</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

             <div class="specification-section">
                <p>Review Spesifikasi Honda HR-V 2024 | NCS</p>
                <p>Honda HR-V generasi terbaru telah diluncurkan pada akhir Maret 2022. Mobil ini mendapat banyak pembaruan sehingga terlihat berbeda dibanding model sebelumnya.</p>
                <p>Honda HR-V terbaru ditawarkan dalam empat varian untuk konsumen di Indonesia, yaitu S CVT, E CVT, SE CVT, dan RS yang menjadi top of the line.</p>
                <p>Menariknya, HR-V terbaru telah disematkan fitur canggih berupa Honda Sensing pada semua variannya.
                    Sebagai informasi, Honda Sensing adalah serangkaian fitur keselamatan yang diklaim dapat menjamin perlindungan pengemudi serta para penumpang selama berkendara.</p>
                <p>Untuk harga HR-V terbaru, mobil ini ditawarkan mulai seharga Rp358,9 juta dan Rp503,9 juta OTR Jakarta untuk tipe termahal.
                    Selain itu, mobil ini juga dihadirkan dalam dua pilihan warna baru yang dapat dipilih setiap konsumen. Pertama, warna Ignite Red Metallic 2 tone khusus varian RS, dan kedua Sand Khaki Pearl 2 Tone yang diprediksi akan menjadi warna andalan HR-V terbaru.</p>
                <p>Selebihnya, mobil berkapasitas lima penumpang tersebut turut hadir dengan beragam warna lain seperti Meteorid Grey, Lunar Silver Metallic, Platinum White Pearl, dan Crystal Block Pearl.</p>
                <p>Eksterior Honda HR-V 2022
                    Pada tipe 1.5L Turbo, mobilnya memiliki ukuran dimensi panjang 4.385 mm, lebar 1.790 mm, dan tinggi 1.590 mm, sedangkan untuk dimensi tipe lainnya, lebih pendek dengan panjang 4.330 mm, lebar 1.790 mm, serta tinggi 1.590 mm.</p>
                <p>Jika dibandingkan dengan model sebelumnya, ukurannya lebih besar. HR-V model sebelumnya mempunyai panjang 4.294 mm, lebar 1.772 mm, dan tinggi 1.580 mm.</p>
                </div>
                <div class="specification-section">
                    <h3 class="text-white">Spesifikasi Lengkap</h3>
                    <table class="table table-dark table-bordered">
                        <tbody>
                            <tr>
                                <th>Dimensi</th>
                                <td>
                                    <p>Tinggi (mm): 1590</p>
                                    <p>Lebar (mm): 1790</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Detil Mesin</th>
                                <td>
                                    <p>Konfigurasi mesin: Manual 51.5L DOHC 4 Silinder Segaris, 16 Katup i-VTEC + DBW Speed</p>
                                    <p>Isi silinder (cc): 1497</p>
                                    <p>Jenis bahan bakar: Bensin</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Performa</th>
                                <td>
                                    <p>Tenaga: 121 PS / 6000 rpm</p>
                                    <p>Torsi: 145 Nm / 4300 rpm</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Suspensi & Rem</th>
                                <td>
                                    <p>Rem Depan: Ventilated Disc</p>
                                    <p>Suspensi Depan: MacPherson Strut</p>
                                    <p>Rem Belakang: Solid Disc</p>
                                    <p>Suspensi Belakang: H-Shape Torsion Beam</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Velg & Ban</th>
                                <td>
                                    <p>Ukuran ban: 215/60R17</p>
                                    <p>Material velg: 17 inch Alloy wheel</p>
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
                                    <p>Airbag: 7 Airbags</p>
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
