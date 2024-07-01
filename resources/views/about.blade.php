    <!-- header -->
    <header>
        <nav class="navbar navbar-expand">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img class="logo" src="img/logo_dealer.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="tentangkami.html">Tentang Kami</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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

<main style="background-color: #1A1A1A; color: white;">

    <!-- Tentang Kami -->
    <section id="tentang-kami" style="padding: 50px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="visi-misi">
                        <h2>Sejarah Perusahaan</h2>
                        <p>
Dealer Mobil  Auto Deal telah berdiri sejak awal tahun 1990-an di Kediri, Jawa Timur. Awalnya didirikan sebagai usaha kecil oleh sekelompok pengusaha lokal dengan tujuan awal untuk mengisi kekosongan pasar dalam industri otomotif di daerah tersebut. Dengan berjalannya waktu, kami berhasil tumbuh dan berkembang menjadi salah satu pemain utama dalam industri ini di Jawa Timur. Perjalanan kami dimulai dengan komitmen yang kuat untuk menyediakan pilihan mobil berkualitas dan layanan purna jual terbaik bagi pelanggan kami. Visi kami sejak awal adalah untuk menjadi mitra yang terpercaya dalam memenuhi kebutuhan mobilitas masyarakat lokal dan sekitarnya.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="visi-misi">
                        <h2>Visi</h2>
                        <p>Menjadi pemimpin di industri otomotif dengan menyediakan layanan terbaik dan produk mobil berkualitas tinggi kepada pelanggan.</p>
                    </div>

                    <div class="visi-misi">
                        <h2>Misi</h2>
                        <ul>
                            <li>Menyediakan pengalaman pelanggan yang luar biasa melalui pelayanan yang ramah dan profesional.</li>
                            <li>Menawarkan berbagai jenis mobil dengan harga kompetitif dan kondisi prima.</li>
                            <li>Mendukung mobilitas masyarakat dengan solusi transportasi yang dapat diandalkan.</li>
                            <li>Berkomitmen untuk kepuasan pelanggan dan integritas bisnis yang tinggi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- footer -->
 <footer class="footer" style="background-color: #333; color: white; padding: 50px 0;">
    <div class="container">
    <p>&copy; 2024 AutoDeal. All rights reserved.</p>
</div>
</footer>


    <!-- slider sebagai latar belakang -->
    <div class="slide-background">
        <div class="slide">
            <img class="myslide" src="img/slide1.jpg" alt="Gambar 1">
            <img class="myslide" src="img/slide2.jpg" alt="Gambar 2">
            <!-- tambahkan slide lainnya jika diperlukan -->
        </div>
    </div>

    <!-- script -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("myslide");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 3000); // Change image every 3 seconds
        }
    </script>
</body>
</html>
