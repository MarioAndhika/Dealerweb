@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container my-5 main-content-box">
        <div class="row">
            <div class="col-md-8">
            <div class="specification-section">
                <h2 class="text-white">Mercede-Benz AMG GT R Coupe</h2>
                <img src="{{ asset('assets/mercedes.jpeg') }}" class="card-img-top" alt="...">
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
                            <p>3982 CC</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spec-box">
                            <img src="{{ asset('assets/model-seats.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                            <p>2 Tempat Duduk</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="specification-section">
                <h3 class="text-white">Daftar Harga Mercede-Benz AMG GT R Coupe</h3>
                <div class="price-box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi AMG GT R Coupe</h5>
                                <p class="card-text">Harga Rp.7.165 Miliar</p>
                                <p class="card-text">| AMG SPEEDSHIFT DCT 7-speed | | 2 seats | | 3982 CC | |Bensin|</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
             <div class="specification-section">
                <p>Review Mercedes-Benz AMG GT R Coupe 2024 | NCS</p>
                <p>Mobil buatan Mercedes-Benz memang selalu memiliki daya tarik bagi para pecinta otomotif yang menyukai mobil mewah dan eksklusif. Tidak hanya eksterior mobilnya terlihat berkelas dan mewah, tetapi juga interiornya terkesan elegan serta modern dengan dibekali berbagai fitur yang lengkap dan canggih.</p>
                <p>Bahkan kini, BMW Seri 3 terbaru telah hadir dengan mengusung 'embel-embel' Sport. BMW 320i Sport yang dibangun di atas kode bodi G20. Ya, ini jelas generasi terbaru setelah hampir sewindu menggunakan kode F30. Mengusung nama BMW 320i Sport namun tenaganya tidak bisa disamakan dengan 330i M Sport. Meskipun demikian, perbedaan tersebut tidak lantas membuat tenaga 320i Sport dipandang sebelah mata. DNA mobil sport kompak tetap mengalir deras sehingga tidak mengurangi kemampuan performatik sedan ini. BMW 320i Sport punya beberapa kelebihan seperti misalnya menjadi sedan paling terjangkau di antara BMW Seri 3 terbaru yang mengusung kode bodi G20. Kendati demikian, harga terjangkau tidak lantas membuat kualitasnya anjlok, terutama terkait performa dan kenyamanan berkendara.</p>
                <p>Bekerja sama dengan AMG, Mercedes-Benz telah meluncurkan mobil sport andalannya di Tanah Air, yaitu Mercedes-Benz AMG GT R Coupe. Bagi yang tertarik meminang mobil ini, tentunya harus menyiapkan budget yang besar.
                    Perlu diketahui, GT R Coupe merupakan mobil sport termahal keluaran Mercedes-Benz yang dibanderol seharga lebih dari Rp7 Milyar, atau lebih tepatnya Rp7,165 miliar (off the road).</p>
                <p>Saat diluncurkan di Indonesia, GT R Coupe hadir dengan saudaranya, yaitu GT S. GT R Coupe punya tenaga lebih besar dari GT S, yakni 63 Hp serta torsi 70 Nm lebih besar.</p>
                <p>Pada dasarnya, mesin AMG racikan Mercedes-Benz dinilai sebagai mesin dengan performa yang luar biasa. Biasanya AMG standar yang dihadirkan di Indonesia menggunakan mesin tidak sampai 3.000 cc, namun dengan hadirnya GT R ini memungkinkan pecinta kecepatan dapat merasakan akselerasi terbaik mesin balap AMG pada mobil tersebut.</p>
             </div>
                <div class="specification-section">
                    <h3 class="text-white">Spesifikasi Lengkap</h3>
                    <table class="table table-dark table-bordered">
                        <tbody>
                            <tr>
                                <th>Dimensi</th>
                                <td>
                                    <p>Tinggi (mm): 1284</p>
                                    <p>Lebar (mm): 2007</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Detil Mesin</th>
                                <td>
                                    <p>Konfigurasi mesin: AMG 4.0-Liter V8 Biturbo Engine</p>
                                    <p>Isi silinder (cc): 3982</p>
                                    <p>Jenis bahan bakar: Bensin</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Performa</th>
                                <td>
                                    <p>Tenaga: 430 kW(585 hp)/ 6250 Rpm </p>
                                    <p>Torsi: 700 Nm / 1900-5500 Rpm</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Suspensi & Rem</th>
                                <td>
                                    <p>Rem Depan: AMG High Performance Brake</p>
                                    <p>Suspensi Depan: Double Wishbone/p>
                                    <p>Rem Belakang: AMG High Performance Brake</p>
                                    <p>Suspensi Belakang: Double Wishbone</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Velg & Ban</th>
                                <td>
                                    <p>Ukuran ban: Front : 275/35 R19 Rear : 325/30 R20 </p>
                                    <p>Material velg: 19/20-inch AMG Performance 5-twin-spoke forged wheels</p>
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
                                    <p>Airbag: 6 (Driver and Passenger, Front Side, Front and Rear Curtain)</p>
                                    <p>Sabuk Pengaman Depan: Yes</p>
                                    <p>Sabuk Pengaman Belakang: Yes</p>
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
