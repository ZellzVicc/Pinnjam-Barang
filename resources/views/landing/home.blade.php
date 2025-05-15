@extends('layouts.app')

@section('content')
    <!-- Home Section -->
    <div id="home" class="hero-section bg-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero-text mb-3">
                        <p class="mb-2" style="color:#5f687b; font-size:30px; font-weight:600;">
                            Peminjaman barang sekolah?<br>
                            Sekarang tinggal klik, gak perlu<br>
                            repot, semua langsung beres!
                        </p>
                    </div>
                    <a href="#" class="get-started-btn mt-2">Get Started</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/asset/borrower.png') }}" alt="Ilustrasi" class="img-fluid" style="max-width: 90%;">
                </div>
            </div>
        </div>
    </div>

    <!-- Category Section -->
    <div id="category" class="container py-5">
        <h1 class="text-center mb-4" style="font-weight: 600; color: #1B56FD;">Kategori Barang</h1>


    <!-- Kategori Barang -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4" id="categoryContainer">
        <!-- Kategori 1: Elektronik -->
        <div class="col category-item">
            <div class="card h-100 shadow-sm">
                <div class="text-center py-4 bg-light">
                    <i class="fas fa-laptop fa-4x text-primary" style="color: #1B56FD !important;"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Elektronik</h5>
                    <p class="card-text text-muted">Peralatan elektronik untuk pembelajaran dan presentasi</p>
                    <p class="text-primary fw-semibold">24 barang tersedia</p>
                </div>
            </div>
        </div>

        <!-- Kategori 2: Alat Olahraga -->
        <div class="col category-item">
            <div class="card h-100 shadow-sm">
                <div class="text-center py-4 bg-light">
                    <i class="fas fa-volleyball-ball fa-4x text-primary" style="color: #1B56FD !important;"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Alat Olahraga</h5>
                    <p class="card-text text-muted">Perlengkapan olahraga untuk berbagai aktivitas fisik</p>
                    <p class="text-primary fw-semibold">18 barang tersedia</p>
                </div>
            </div>
        </div>

        <!-- Kategori 3: Alat Laboratorium -->
        <div class="col category-item">
            <div class="card h-100 shadow-sm">
                <div class="text-center py-4 bg-light">
                    <i class="fas fa-flask fa-4x text-primary" style="color: #1B56FD !important;"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Alat Laboratorium</h5>
                    <p class="card-text text-muted">Peralatan untuk praktikum dan eksperimen sains</p>
                    <p class="text-primary fw-semibold">32 barang tersedia</p>
                </div>
            </div>
        </div>

        <!-- Kategori 4: Alat Musik -->
        <div class="col category-item">
            <div class="card h-100 shadow-sm">
                <div class="text-center py-4 bg-light">
                    <i class="fas fa-guitar fa-4x text-primary" style="color: #1B56FD !important;"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Alat Musik</h5>
                    <p class="card-text text-muted">Instrumen musik untuk kegiatan seni dan ekstrakurikuler</p>
                    <p class="text-primary fw-semibold">15 barang tersedia</p>
                </div>
            </div>
        </div>

        <!-- Kategori 5: Alat Kebersihan -->
        <div class="col category-item">
            <div class="card h-100 shadow-sm">
                <div class="text-center py-4 bg-light">
                    <i class="fas fa-broom fa-4x text-primary" style="color: #1B56FD !important;"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Alat Kebersihan</h5>
                    <p class="card-text text-muted">Peralatan untuk menjaga kebersihan lingkungan sekolah</p>
                    <p class="text-primary fw-semibold">20 barang tersedia</p>
                </div>
            </div>
        </div>

        <!-- Kategori 6: Perlengkapan Kelas -->
        <div class="col category-item">
            <div class="card h-100 shadow-sm">
                <div class="text-center py-4 bg-light">
                    <i class="fas fa-chalkboard fa-4x text-primary" style="color: #1B56FD !important;"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Perlengkapan Kelas</h5>
                    <p class="card-text text-muted">Peralatan pendukung kegiatan belajar mengajar</p>
                    <p class="text-primary fw-semibold">28 barang tersedia</p>
                </div>
            </div>
        </div>

        <!-- Kategori 7: Media Pembelajaran -->
        <div class="col category-item">
            <div class="card h-100 shadow-sm">
                <div class="text-center py-4 bg-light">
                    <i class="fas fa-book fa-4x text-primary" style="color: #1B56FD !important;"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Media Pembelajaran</h5>
                    <p class="card-text text-muted">Alat peraga dan media pembelajaran interaktif</p>
                    <p class="text-primary fw-semibold">22 barang tersedia</p>
                </div>
            </div>
        </div>

        <!-- Kategori 8: Perlengkapan Acara -->
        <div class="col category-item">
            <div class="card h-100 shadow-sm">
                <div class="text-center py-4 bg-light">
                    <i class="fas fa-calendar-alt fa-4x text-primary" style="color: #1B56FD !important;"></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">Perlengkapan Acara</h5>
                    <p class="card-text text-muted">Peralatan untuk mendukung acara sekolah</p>
                    <p class="text-primary fw-semibold">16 barang tersedia</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- About Us Section -->
    <div id="about" class="container py-5">
        <h1 class="text-center mb-5" style="font-weight: 600; color: #1B56FD;">Tentang Kami</h1>

    <!-- Profil Section -->
    <div class="card shadow-sm mb-5">
        <div class="card-body p-4">
            <h2 class="card-title mb-4" style="color: #1B56FD; border-left: 4px solid #1B56FD; padding-left: 15px;">Profil Pinnjam Barang</h2>
            <p class="card-text mb-4">
                Pinnjam Barang adalah sistem peminjaman barang sekolah yang dirancang untuk memudahkan proses
                peminjaman dan pengembalian barang-barang milik sekolah. Sistem ini dikembangkan sebagai
                solusi untuk mengelola inventaris sekolah dengan lebih efisien dan transparan.
            </p>
            <p class="card-text">
                Dengan Pinnjam Barang, siswa, guru, dan staf sekolah dapat dengan mudah melihat ketersediaan barang,
                mengajukan permintaan peminjaman, dan melacak status peminjaman mereka. Sistem ini juga membantu
                administrator sekolah dalam mengelola inventaris, memantau penggunaan barang, dan memastikan setiap
                barang dikembalikan tepat waktu dan dalam kondisi baik.
            </p>
        </div>
    </div>

    <!-- Tim Section -->
    <div class="card shadow-sm">
        <div class="card-body p-4">
            <h2 class="card-title mb-4" style="color: #1B56FD; border-left: 4px solid #1B56FD; padding-left: 15px;">Tim Kami</h2>
            <p class="card-text mb-4">
                Pinnjam Barang dikembangkan dan dikelola oleh tim profesional yang berdedikasi untuk memberikan
                pelayanan terbaik bagi komunitas sekolah.
            </p>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <!-- Anggota Tim 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="text-center py-4 bg-light">
                            <img src="{{ asset('images/team/malik.png') }}" alt="Malik" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Muhammad Malik Akhdan</h5>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Anggota Tim 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="text-center py-4 bg-light">
                            <img src="{{ asset('images/team/rizal.png') }}" alt="Rizal" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Ahmad Rizal Baihaqi</h5>
                        </div>
                    </div>
                </div>

                <!-- Anggota Tim 3 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="text-center py-4 bg-light">
                            <img src="{{ asset('images/team/angga.png') }}" alt="angga" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Angga Yusril Mahendra</h5>
                        </div>
                    </div>
                </div>

                <!-- Anggota Tim 4 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="text-center py-4 bg-light">
                            <img src="{{ asset('images/team/novaa.png') }}" alt="Nova" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Nova Istianti</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Contact Section - SMKN 4 Tangerang Version -->
<div id="contact" class="container py-5">
    <h1 class="text-center mb-5" style="font-weight: 600; color: #1B56FD;">Hubungi Kami</h1>

    <div class="row justify-content-center">
        <!-- Contact Information -->
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <div class="row">
                        <!-- Location with Google Maps -->
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h2 class="card-title mb-4" style="color: #1B56FD; border-left: 4px solid #1B56FD; padding-left: 15px;">
                                <i class="fas fa-map-marker-alt me-2"></i> Lokasi
                            </h2>
                            <div class="ratio ratio-16x9 mb-4">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8010.250341182736!2d106.63598845582489!3d-6.183852009580327!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f929162547c7%3A0xbbf35137362e584d!2sSMK%20Negeri%204%20Kota%20Tangerang!5e0!3m2!1sen!2sid!4v1747240749328!5m2!1sen!2sid"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                            <p class="text-muted">
                                <i class="fas fa-school me-2"></i> SMKN 4 Tangerang<br>
                                <i class="fas fa-road me-2"></i>Jl. Veteran No.1A, RT.005/RW.002<br>
                                Babakan, Kec. Tangerang<br>
                                Kota Tangerang, Banten 15118
                            </p>
                        </div>

                        <!-- Contact Info -->
                        <div class="col-md-6">
                            <h2 class="card-title mb-4" style="color: #1B56FD; border-left: 4px solid #1B56FD; padding-left: 15px;">
                                <i class="fas fa-address-card me-2"></i> Kontak
                            </h2>

                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-phone-alt fa-2x" style="color: #1B56FD;"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-1">Telepon/WhatsApp</h5>
                                    <p class="text-muted">+62 851 7979 1472</p>
                                    <a href="https://wa.me/6285179791472" class="btn btn-success btn-sm mt-1">
                                        <i class="fab fa-whatsapp me-1"></i> Chat via WhatsApp
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-envelope fa-2x" style="color: #1B56FD;"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-1">Email</h5>
                                    <p class="text-muted">arzlbaihaqi@gmail.com</p>
                                    <a href="mailto:arzlbaihaqi@gmail.com" class="btn btn-primary btn-sm mt-1">
                                        <i class="fas fa-envelope me-1"></i> Kirim Email
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
