@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container my-5 main-content-box">
        <div class="row">
            <div class="col-md-8">
            <div class="specification-section">
                <h2 class="text-white">Lexus LS 500h</h2>
                <img src="{{ asset('assets/.jpeg') }}" class="card-img-top" alt="...">
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
                            <p>Hybrid</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spec-box">
                            <img src="{{ asset('assets/engine-size.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                            <p>3456 cc</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spec-box">
                            <img src="{{ asset('assets/model-seats.png') }}" class="card-img-top" style="width: 30px;" alt="...">
                            <p>5 Tempat Duduk</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="specification-section">
                <h3 class="text-white">Daftar Harga Lexus Ls-500h</h3>
                <div class="price-box">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-3">
                                <h5 class="card-title">Edisi  LS 500h Executive</h5>
                                <p class="card-text">Harga Rp3.535 Milyar</p>
                                <p class="card-text">Dedicated Hybrid Transmission, 5 seats, 3,456 cc, Hybrid</p>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
             </div>

             <div class="specification-section">
                <p>Review Lexus LS 500h</p>
                <p>Lexus LS 500h merupakan varian sedan hybrid dari LS 500 Executive yang dijual seharga Rp.4.665 Milyar.Memiliki dimensi 5235mm x 1900mm x 1450mm (p x I x t),jarak sumbu roda 3125mm dan jarak terendah 147mm.
                    LS 500h dibekali dengan mesin hybrid 3456 cc dengan kode mesin 8GR-FXS berpenggerak roda belakang dengan transmisi 10 speed automatic yang menghasilkan tenaga maksimal 354 bhp dan torsi maksimal 350 nm.lalu menggunakan suspense depan High-Mount Multilink with Air Suspension dan belakang Multilink with Air Suspension.fitur keselamatan yang diberikan seperti ABS,BA,EBD,Vehicle stability control system dan 14 airbag system.</p>
                <p>sedangkan untuk fitur kenyamanan diberikan Lexus Climate Concierge, Power Trunk with Kick Sensor, 28-Ways Power Adjustable Front Seats, 12.3 inch display USB / iPod Playback Function / AUX,AM/FM Tuner / DVD Player,Bluetooth Connectivity,Mark Levinson Audio with 24 Speakers with Showering Effects, Lexus Navigation System, Blind spot monitor, Nanoe System, Rear Seat Control Panel with Audio, Climate, Seating Arrangement and Sunshades control, Rear Seat Cool Box, Retractable ottoman, Wireless Charger, Smart Air Suspension, EV Drive mode, Seat Heater and Cooler Front and Rear Seats, Regenrative Braking, Adaptive Variable Suspension, Parking Assist dan Drive Mode Select (Normal, Eco,Comfort, Sport S,Sport S+).</p>
            </div>
                <div class="specification-section">
                    <h3 class="text-white">Spesifikasi Lengkap</h3>
                    <table class="table table-dark table-bordered">
                        <tbody>
                            <tr>
                                <th>Dimensi</th>
                                <td>
                                    <p>Tinggi (mm): 1450</p>
                                    <p>Lebar (mm): 1900</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Detil Mesin</th>
                                <td>
                                    <p>Konfigurasi mesin: 8GR-FXS Hybrid V6, 24 Valve DOHC with Dual VVT-i</p>
                                    <p>Isi silinder (cc): 3456</p>
                                    <p>Jenis bahan bakar: Hybrid</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Performa</th>
                                <td>
                                    <p>Tenaga: 354 bhp</p>
                                    <p>Torsi: 350 Nm</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Suspensi & Rem</th>
                                <td>
                                    <p>Rem Depan: Ventilated Disc</p>
                                    <p>Suspensi Depan: Independent, Double Joint High-Mount Multilink with Air Suspension</p>
                                    <p>Rem Belakang: Ventilated Disc</p>
                                    <p>Suspensi Belakang: Independent, Double Joint Multilink with Air Suspension</p>
                                </td>
                            </tr>
                            <tr>
                                <th>Velg & Ban</th>
                                <td>
                                    <p>Ukuran ban: Front: 245/45 R20, Rear: 275/40 R20</p>
                                    <p>Material velg: 20 inch Alumunium</p>
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
                                    <p>Airbag: Airbag System 14 Airbags</p>
                                    <p>Child Safety Locks: Yes</p>
                                    <p>Sabuk Pengaman Depan: Adjustable</p>
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
