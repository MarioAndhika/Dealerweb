<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citroen C3 | AutoDeal</title>
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
        < class="row">
            <div class="col-md-8">
            <div class="specification-section">
                <h2 class="text-white">Citroen C3</h2>
                <img src="img/c3.jpeg" class="img-fluid mb-4" alt="Alphard">
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
                            <p>1189 cc</p>
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

             <div class="specification-section">
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
                    <h3 class="text-white">Spesifikasi Lengkap</h3>
                    <table class="table table-dark table-bordered">
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
