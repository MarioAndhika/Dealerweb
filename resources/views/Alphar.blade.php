@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container my-5 main-content-box">
        <div class="row">
            <div class="col-md-8">
            <div class="specification-section">
                <h2 class="text-white">Toyota Alphard</h2>
                <img src="{{ asset('assets/c3.jpeg') }}" class="card-img-top" alt="...">
            </div>
            <div class="specification-section">
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
                            <p>2500 cc</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spec-box">
                            <img src="{{ asset('assets/model-seats.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                            <p>7 Tempat Duduk</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="specification-section">
                <h3 class="text-white">Harga Toyota Alphard</h3>
                <div class="price-box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi Alphard 2.5 X AT</h5>
                                <p class="card-text">Harga Rp1.381 Milyar</p>
                                <p class="card-text">Automatic, 7 seats, 2,494 cc, Bensin</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi C3 Monotone</h5>
                                <p class="card-text">Harga Rp1.603 Milyar</p>
                                <p class="card-text">Automatic, 7 seats, 2,494 cc, Bensin</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi Alphard 2.5 HEV AT</h5>
                                <p class="card-text">Harga Rp1.682 Milyar</p>
                                <p class="card-text">Automatic, 7 seats, 2,494 cc, Bensin</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>

             <div class="specification-section">
                <p>Review Toyota Alphard 2024</p>
                <p>Toyota sebagai raksasa otomotif asal Jepang ini merilis Alphard dan Vellfire untuk kalangan eksekutif. Keduanya hadir dengan beberapa perbedaan sesuai segmen pengguna masing-masing. Alphard menonjolkan desain dengan nuansa formal dan dinamis sehingga cocok untuk digunakan kalangan pejabat negara. Sementara itu, Vellfire menonjolkan kesan cool, modern, dengan kesan berani yang ditujukan kepada kalangan pengusaha atau selebriti.</p>
                <p>Kalangan pengusaha ataupun pejabat memakai Alphard karena mampu memenuhi kebutuhan mereka sebagai kantor berjalan. Alasannya, MPV boxy keluaran toyota ini menyuguhkan kenyamanan dengan beragam fitur pendukung produktivitas saat bekerja. Tidak jarang, pengguna Alphard melanjutkan pekerjaan mereka di mobil ketika dalam perjalanan. Toyota Alphard ini menyediakan seluruh kebutuhan yang diinginkan kalangan kelas atas. Tidak heran, bila kemewahan pada Alphard sebenarnya merupakan alternatif kendaraan pengganti sedan saloon keluaran merek Jepang atau bahkan Eropa sekalipun.</p>
                <p>Toyota Alphard resmi masuk ke Indonesia pada tahun 2002 dan menjadi pelopor di segmen MPV premium. Sebab, pada saat itu segmen MPV mewah di Indonesia belum banyak pesaing sejenis dari merek lain. Toyota Alphard awalnya dibuat khusus untuk pasar domestik Jepang, tetapi karena diminati oleh konsumen Asia, Alphard lantas dijual di beberapa negara lainnya, termasuk di Indonesia. Selain di Indonesia, Alphard juga dipasarkan di Bahrain, Bangladesh, Belarusia, China, Hong Kong, India, Oman, Filipina, Rusia, Singapura, Malaysia, Taiwan dan Thailand. Alphard sempat memiliki versi Royal Lounge Alphard yang merupakan versi mewah dimana interiornya hanya berkonfigurasi dengan empat kursi. Toyota juga membuat versi yang lebih sporty dari Alphard, dengan nama Vellfire.</p>
            </div>
                <div class="specification-section">
                    <h3 class="text-white">Spesifikasi Lengkap</h3>
                    <table class="table table-dark table-bordered">
                        <tbody>
                            <tr>
                                <th>Dimensi</th>
                                <td>
                                    <p>Tinggi (mm): 1945</p>
                                    <p>Lebar (mm): 1850</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Detil Mesin</th>
                                <td>
                                    <p>Konfigurasi mesin: 2AR-FE (2.5)</p>
                                    <p>Isi silinder (cc): 2494</p>
                                    <p>Jenis bahan bakar: Bensin</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Performa</th>
                                <td>
                                    <p>Tenaga: 182 PS</p>
                                    <p>Torsi: 235 Nm</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Suspensi & Rem</th>
                                <td>
                                    <p>Rem Depan: Ventilated Disc</p>
                                    <p>Suspensi Depan: FR Strut</p>
                                    <p>Rem Belakang: Ventilated Disc</p>
                                    <p>Suspensi Belakang: RR DBW</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Velg & Ban</th>
                                <td>
                                    <p>Ukuran ban: 225/65 R17</p>
                                    <p>Material velg: 17 inci alloy wheel</p>
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
