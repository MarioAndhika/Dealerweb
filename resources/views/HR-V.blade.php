<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honda HR-V | AutoDeal</title>
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
                <h2 class="text-white">Honda HR-V</h2>
                <img src="img/Honda HR-V.jpeg" class="img-fluid mb-4" alt="HR-V">
            </div>
            <div class="specification-section">
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="spec-box">
                            <img src="img/transmission-spec.png" alt="Transmisi Otomatis" class="spec-icon" style="width: 30px;">
                            <p>Manual,Otomatis</p>
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
