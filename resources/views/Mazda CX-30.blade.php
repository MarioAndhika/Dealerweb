@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container my-5 main-content-box">
        <div class="row">
            <div class="col-md-8">
            <div class="specification-section">
                <h2 class="text-white">Mazda CX-30</h2>
                <img src="{{ asset('assets/Mazda CX-30.jpeg') }}" class="card-img-top" alt="...">
            </div>
            <div class="specification-section">
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="spec-box">
                            <img src="{{ asset('assets/transmission-spec.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                            <p>Otomatis</p>
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
                            <p>1993 cc</p>
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
                <h3 class="text-white">Daftar Harga Mazda Cx-30</h3>
                <div class="price-box">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi  CX-30 GT</h5>
                                <p class="card-text">Harga Rp572.2 Juta</p>
                                <p class="card-text">Dedicated Hybrid Transmission, 5 seats, 1,998 cc, Bensin</p>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
             </div>

             <div class="specification-section">
                <p>Review Mazda CX-30</p>
                <p>PT Eurokars Motor Indonesia (EMI) pada penghujung Januari lalu meluncurkan Mazda CX-30. Banyak yang menyebut bila CX-30 mirip seperti Mazda3 hatchback. Tidak salah memang karena keduanya memang mirip dan juga CX-30 menggunakan platform yang sama dengan Mazda3.</p>
                <p>Bisa dibilang, CX-30 adalah versi crossover dari Mazda3. Sebab, baik dari sisi fitur keduanya juga sama semua. Untuk CX-30 ini hadir bagi konsumen muda dari kalangan mapan yang dinamis menyukai petualangan. Dalam merancang CX-30 ini Mazda memiliki 4 value utama, yaitu desain, comfort, safety, dan performance. </p>
                <p>Mazda CX-30 diperkenalkan pertama kali saat ajang Geneva International Motor Show pada Maret 2019 lalu. Dengan ukuran yang kompak, menjadikan Mazda CX-30 lebih mudah untuk bermanuver dalam menghadapi berbagai kondisi jalan dan lalu-lintas. Mazda CX-30 memang dirancang agar mudah dikendarai yang ditunjang dengan postur mobil yang tinggi.</p>
                <p>Mazda CX-30 sudah mengusung evolusi terbaru desain KODO khas Mazda yang merupakan model Mazda generasi ketujuh. Body cladding pada Mazda CX-30 yang berukuran cukup besar sehingga sukses terlihat maskulin. Mazda Indonesia yang diageni oleh PT Eurokars Mazda Indonesia membawa CX-30 langsung dari Jepang. </p>
                <p>Mobil ini menggabungkan ketangguhan sebuah SUV dengan keindahan yang mengalir dan luwes layaknya coupe. Desainnya mengekspresikan bentuk baru keanggunan yang terinspirasi oleh nilai-nilai estetika Jepang, yaitu Yohaku, Sori, dan Utsuroi.
                    Hadirnya G-Vectoring Control Plus (GVC Plus) sebagai bagian dari teknologi SKYACTIV-VEHICLE DYNAMICS menambahkan kendali yaw moment langsung melalui rem. Teknologi ini menjaga kendali mobil saat perubahan lajur dengan kecepatan tinggi dan berkendara di jalan yang licin.</p>
            </div>
                <div class="specification-section">
                    <h3 class="text-white">Spesifikasi Lengkap</h3>
                    <table class="table table-dark table-bordered">
                        <tbody>
                            <tr>
                                <th>Dimensi</th>
                                <td>
                                    <p>Tinggi (mm): 1540</p>
                                    <p>Lebar (mm): 1795</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Detil Mesin</th>
                                <td>
                                    <p>Konfigurasi mesin: SKYACTIV-G 2.0 In-line 4 cylinder DOHC 16 valve</p>
                                    <p>Isi silinder (cc): 1998</p>
                                    <p>Jenis bahan bakar: Bensin</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Performa</th>
                                <td>
                                    <p>Tenaga: 114KW (155ps) @6,000 rpm</p>
                                    <p>Torsi: 200Nm/4,000rpm</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Suspensi & Rem</th>
                                <td>
                                    <p>Rem Depan: Ventilated Disc</p>
                                    <p>Suspensi Depan: MacPherson Strut</p>
                                    <p>Rem Belakang: Ventilated Disc</p>
                                    <p>Suspensi Belakang: Torsion Beam Axle</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Velg & Ban</th>
                                <td>
                                    <p>Ukuran ban: 215/55</p>
                                    <p>Material velg: 18 inch wheel</p>
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
                                    <p>Vehicle Dynamic Control: No</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Keselamatan Pasif</th>
                                <td>
                                    <p>Airbag: FDual front, curtain & side, Knee (driver side)</p>
                                    <p>Child Safety Locks: Yes</p>
                                    <p>Sabuk Pengaman Depan: Yes</p>
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
