<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nissan Livina | AutoDeal</title>
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
                <h2 class="text-white">Nissan Livina</h2>
                <img src="img/livina.jpg" class="img-fluid mb-4" alt="livina">
            </div>
            <div class="specification-section">
                <div class="row text-center mb-4">
                    <div class="col">
                        <div class="spec-box">
                            <img src="img/transmission-spec.png" alt="Transmisi Otomatis" class="spec-icon" style="width: 30px;">
                            <p>Manual, Otomatis</p>
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
