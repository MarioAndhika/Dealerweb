<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyota Alphard| AutoDeal</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #1A1A1A;
            color: white;
        }
        .navbar,
        .footer {
            background-color: #333;
        }

        .main-content-box {
            border: 1px solid black;
            padding: 20px;
            background-color: #1A1A1A;
        }

        .card {
            background-color: #1A1A1A;
            border: 1px solid black;
            color: white;
        }

        .form-control,
        .btn {
            border-radius: 0;
        }

        .btn-primary {
            background-color: #007BFF;
            border: none;
        }

        .spec-icon {
            filter: invert(1);
        }

        .spec-box {
            border: 1px solid #fff;
            padding: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .price-box {
            border: 1px solid #000;
            padding: 20px;
            margin-bottom: 20px;
        }

        .specification-section {
            border: 1px solid #fff;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img class="logo" src="img/logo_dealer.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tentangkami.html">Tentang Kami</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jenis Mobil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="suv.html">SUV</a></li>
                                <li><a class="dropdown-item" href="sedan.html">SEDAN</a></li>
                                <li><a class="dropdown-item" href="mpv.html">MPV</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tim.html">Tim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.html">Kontak</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <!-- Main Content -->
    <div class="container my-5 main-content-box">
        <div class="row">
            <div class="col-md-8">
            <div class="specification-section">
                <h2 class="text-white">Toyota Alphard</h2>
                <img src="img/Toyota Alp.jpeg" class="img-fluid mb-4" alt="Alphard">
            </div>
            <div class="specification-section">
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="spec-box">
                            <img src="img/transmission-spec.png" alt="Transmisi Otomatis" class="spec-icon" style="width: 30px;">
                            <p>Manual</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spec-box">
                            <img src="img/fuel-type.png" alt="Bahan Bakar" class="spec-icon" style="width: 30px;">
                            <p>Bensin</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spec-box">
                            <img src="img/engine-size.png" alt="Mesin" class="spec-icon" style="width: 30px;">
                            <p>2500 cc</p>
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
     <footer class="footer" style="background-color: #333; color: white; padding: 50px 0;">
        <div class="container">
        <p>&copy; 2024 AutoDeal. All rights reserved.</p>
    </div>
    </footer>

</body>

<!-- script -->
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>
