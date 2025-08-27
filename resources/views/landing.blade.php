@extends('layouts.app')

@section('content')
<main>
    {{-- Hero Section --}}
    <section class="hero-section text-md-start py-5">
    <div class="container d-flex align-items-center h-100">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-2 fw-bold mb-4" style="font-family: 'Playfair Display', serif;">
                    Belanja Mudah<br>
                    <span style="color: #CC3333;">Harga Bersahabat,</span><br>
                    <span style="color: #CC3333;">Kualitas Terjamin</span>
                </h1>
                <p class="lead" style="color: #555;">
                    Temukan produk terbaik dengan harga yang tidak akan menguras kantong Anda.
                </p>
                <a href="#" class="btn btn-danger btn-lg mt-4" style="background-color: #CC3333;">Register</a>
            </div>
            <div class="col-md-6">
                <img src ="{{ asset('images/baru2.png') }}" alt="Hero" class="img-fluid">
            </div>
        </div>
    </div>
</section>


    {{-- Highlight Keunggulan --}}
    <section class="mengapa-kami py-5">
    <div class="container text-center">
        <h2 class="mb-5" style="color: #8B4513;">Mengapa Memilih kami?</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="icon-container mb-3">
                    <i class="fas fa-tshirt fa-3x" style="color: #8B4513;"></i>
                </div>
                <h5 style="color: #8B4513;">Produk Original</h5>
                <p>Kami menjamin produk yang selalu baru dan berkualitas.</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="icon-container mb-3">
                    <i class="fas fa-tags fa-3x" style="color: #8B4513;"></i>
                </div>
                <h5 style="color: #8B4513;">Harga Kompetitif</h5>
                <p>Dapatkan harga terbaik di pasar tanpa mengorbankan kualitas.</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="icon-container mb-3">
                    <i class="fas fa-money-bill-wave fa-3x" style="color: #8B4513;"></i>
                </div>
                <h5 style="color: #8B4513;">Garansi Uang Kembali</h5>
                <p>Jika tidak puas, uang Anda akan kami kembalikan.</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="icon-container mb-3">
                    <i class="fas fa-shipping-fast fa-3x" style="color: #8B4513;"></i>
                </div>
                <h5 style="color: #8B4513;">Pengiriman Cepat</h5>
                <p>Pesanan Anda akan sampai tepat waktu dan aman.</p>
            </div>
        </div>
    </div>
</section>

    <hr class="container my-5">

    {{-- Best Seller --}}
    <section id="best-seller" class="best-seller-section py-5">
    <div class="container">
        <h2 class="text-center" style="color: #8B4513;">Best Seller</h2>
        <p class="text-center text-muted mb-5">The Most Popular Choices Right Now</p>
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="position-relative">
                        <img src="{{ asset('images/katalog2.jpeg') }}" class="card-img-top" alt="Piyama">
                        <div class="overlay-icons">
                            <span class="badge bg-danger">10% OFF</span>
                            <div class="icon-group">
                                <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <h5 class="card-title fw-bold" style="color: #8B4513;">Piyama</h5>
                        <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                        <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

    <hr class="container my-5">

    {{-- Flash Sale --}}
   <section class="flash-sale-section py-5 bg-light">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h4 fw-bold" style="color: #8B4513;">FLASH SALE</h2>
            <div class="d-flex align-items-center">
                <span class="countdown-timer badge bg-danger rounded-pill p-3 me-3 fw-bold">00:51:42</span>
                <a href="#" class="text-dark text-decoration-none fw-bold">Lihat Semua →</a>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 2; $i++)
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="position-relative">
                        <img src="{{ asset('images/explore.jpeg') }}" class="card-img-top" alt="Bags">
                        <div class="overlay-icons">
                            <span class="badge bg-danger rounded-pill p-2 position-absolute top-0 end-0 m-2 fw-bold">FLASH SALE</span>
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <h5 class="card-title fw-bold" style="color: #8B4513;">Jane</h5>
                        <p class="card-text fw-bold" style="color: #CC3333;">Rp. 100.000</p>
                        <div class="icon-group">
                                <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                            </div>
                        <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

    {{-- Penilaian Produk --}}
    <section class="penilaian-produk py-5">
    <div class="container">
        <h2 class="text-center" style="color: #8B4513;">Penilaian Produk</h2>
        <div class="row mt-4">
            <div class="col-12 text-center mb-4">
                {{-- Statistik Bintang --}}
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <div class="text-warning me-3">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <span class="ms-3">Semua</span>
                    <span class="badge bg-secondary ms-2">5 Bintang (12,5RB)</span>
                    <span class="badge bg-secondary ms-2">4 Bintang (12,5RB)</span>
                    <span class="badge bg-secondary ms-2">3 Bintang (12,5RB)</span>
                    <span class="badge bg-secondary ms-2">2 Bintang (12,5RB)</span>
                    <span class="badge bg-secondary ms-2">1 Bintang (12,5RB)</span>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <span class="badge bg-secondary mx-2">Dengan komentar (10,4RB)</span>
                    <span class="badge bg-secondary mx-2">Dengan Media (8,4RB)</span>
                </div>
            </div>
            
            <div class="col-12">
                <div class="card p-4 shadow-sm border-0">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <img src="https://via.placeholder.com/80x80.png" class="rounded-circle mb-3" alt="Agus">
                            <h5 class="fw-bold mb-0">Agus</h5>
                            <div class="text-warning">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <small class="text-muted">12-10-2025</small>
                        </div>
                        <div class="col-md-10">
                            <p class="fw-bold">Pesanan: Piyama (XL)</p>
                            <p>Bahan sangat nyaman, warna sesuai gambar, harga murah tapi oke. Terima Kasih. Next saya order lagi.</p>
                            <div class="d-flex mt-3">
                                <div class="placeholder-image me-2"></div>
                                <div class="placeholder-image me-2"></div>
                                <div class="placeholder-image me-2"></div>
                                <div class="placeholder-image me-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="pagination-section py-4">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
            <li class="page-item active"><a class="page-link" href="#" style="background-color: #CC3333; border-color: #CC3333; color: white;">1</a></li>
            <li class="page-item"><a class="page-link" href="#" style="background-color: #E9ECEF; border-color: #E9ECEF; color: black;">2</a></li>
            <li class="page-item"><a class="page-link" href="#" style="background-color: #E9ECEF; border-color: #E9ECEF; color: black;">3</a></li>
            <li class="page-item"><a class="page-link" href="#" style="background-color: #E9ECEF; border-color: #E9ECEF; color: black;">4</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
        </ul>
    </nav>
</section>
    </div>
</section>
<section class="our-story-section py-5">
    <div class="container text-center">
        <h2 class="mb-2" style="color: #8B4513;">Our Fashion Story</h2>
        <p class="mb-5" style="color: #7A7A7A;">
            Dari sebuah passion untuk gaya yang berkelas, kami menciptakan pakaian yang membuat Anda merasa istimewa
        </p>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="card p-4 h-100 shadow-sm" style="border: 2px solid #8B4513;">
                    <img src="{{ asset('images/ceo.jpg') }}" alt="CEO">
                    <div class="card-body text-start">
                        <h5 class="fw-bold" style="color: #8B4513;">Sarah Wijaya</h5>
                        <p class="fw-bold" style="color: #4A4A4A;">Founder & Creative Director</p>
                        <p class="card-text">
                            Kami percaya bahwa desain yang baik tidak hanya tentang estetika, tetapi tentang menciptakan pengalaman yang bermakna bagi setiap pengguna.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 h-100 shadow-sm" style="border: 2px solid #8B4513;">
                     <img src="{{ asset('images/joko.jpg') }}"  alt="Bapak">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="perjalanan-kami py-5">
    <div class="container text-center">
        <h2 class="mb-5" style="color: #8B4513; font-family: 'Playfair Display', serif;">Perjalanan Kami</h2>
        <div class="timeline">
            <div class="timeline-item timeline-left">
                <div class="timeline-dot"></div>
                <div class="timeline-content card p-4 shadow-sm" style="border: 2px solid #8B4513;">
                    <h5 class="fw-bold" style="color: #8B4513;">2019 Awal Mula</h5>
                    <p>
                        Dimulai dari sebuah kafe kecil di Jakarta, Sarah dan dua rekannya memutuskan untuk mengubah passion mereka terhadap desain menjadi sebuah bisnis yang dapat membantu UMKM lokal.
                    </p>
                </div>
            </div>
            <div class="timeline-item timeline-right">
                <div class="timeline-dot"></div>
                <div class="timeline-content card p-4 shadow-sm" style="border: 2px solid #8B4513;">
                    <h5 class="fw-bold" style="color: #8B4513;">2020 Momentum Pertama</h5>
                    <p>
                        Pandemi justru menjadi berkah tersembunyi. Banyak bisnis yang membutuhkan transformasi digital, dan kami siap membantu dengan solusi desain yang terjangkau namun berkualitas.
                    </p>
                </div>
            </div>
            <div class="timeline-item timeline-left">
                <div class="timeline-dot"></div>
                <div class="timeline-content card p-4 shadow-sm" style="border: 2px solid #8B4513;">
                    <h5 class="fw-bold" style="color: #8B4513;">2023 Awal Kemajuan</h5>
                    <p>
                        Tim berkembang menjadi 15 orang talenta terbaik dari berbagai disiplin ilmu. Kami pindah ke studio yang lebih besar dan mulai mengerjakan proyek-proyek enterprise.
                    </p>
                </div>
            </div>
            <div class="timeline-item timeline-right">
                <div class="timeline-dot"></div>
                <div class="timeline-content card p-4 shadow-sm" style="border: 2px solid #8B4513;">
                    <h5 class="fw-bold" style="color: #8B4513;">2025 Bertahan</h5>
                    <p>
                        Dengan lebih dari 150 proyek sukses, kami kini fokus pada inovasi dan sustainability dalam desain, sambil terus mempertahankan nilai-nilai human-centered design.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cara-pemesanan py-5">
    <div class="container text-center">
        <h2 class="mb-5" style="color: #8B4513;">Cara Pemesanan</h2>
        <div class="card p-4 shadow-sm" style="border: 2px solid #8B4513; border-radius: 10px;">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="flow-item mx-2">
                        <i class="fas fa-box fa-3x mb-2" style="color: #8B4513;"></i>
                        <p>1. Pilih Produk</p>
                    </div>
                    <i class="fas fa-arrow-right fa-2x mx-2" style="color: #8B4513;"></i>
                    <div class="flow-item mx-2">
                        <i class="fas fa-shopping-cart fa-3x mb-2" style="color: #8B4513;"></i>
                        <p>2. Checkout</p>
                    </div>
                    <i class="fas fa-arrow-right fa-2x mx-2" style="color: #8B4513;"></i>
                    <div class="flow-item mx-2">
                        <i class="fas fa-truck-moving fa-3x mb-2" style="color: #8B4513;"></i>
                        <p>3. Kirim</p>
                    </div>
                    <i class="fas fa-arrow-right fa-2x mx-2" style="color: #8B4513;"></i>
                    <div class="flow-item mx-2">
                        <i class="fas fa-home fa-3x mb-2" style="color: #8B4513;"></i>
                        <p>4. Terima di Rumah</p>
                    </div>
                </div>
                <div class="col-md-6">
    <div class="video-container">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
            </div>
        </div>
    </div>
</section>

<section class="keamanan-jaminan py-5">
    <div class="container text-center">
        <h2 class="mb-2" style="color: #8B4513;">Keamanan dan Jaminan</h2>
        <p class="mb-5" style="color: #7A7A7A;">
            Kami memberikan perlindungan dan jaminan penuh untuk setiap transaksi Anda
        </p>
        <div class="row">
            <div class="col-md-6">
                <div class="card p-4 h-100 shadow-sm border-0">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <i class="fas fa-lock fa-3x" style="color: #8B4513;"></i>
                    </div>
                    <h5 class="fw-bold" style="color: #8B4513;">Keamanan Transaksi</h5>
                    <ul class="list-unstyled text-start mt-3">
                        <li><i class="fas fa-check-circle me-2" style="color: #8B4513;"></i> Sistem pembayaran terenkripsi dengan teknologi SSL 256-bit.</li>
                        <li><i class="fas fa-check-circle me-2" style="color: #8B4513;"></i> Data pribadi Anda 100% tidak dibagikan ke pihak ketiga.</li>
                        <li><i class="fas fa-check-circle me-2" style="color: #8B4513;"></i> Transaksi diawasi oleh sistem keamanan real-time.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 h-100 shadow-sm border-0">
                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <i class="fas fa-shield-alt fa-3x" style="color: #8B4513;"></i>
                    </div>
                    <h5 class="fw-bold" style="color: #8B4513;">Garansi Produk</h5>
                    <ul class="list-unstyled text-start mt-3">
                        <li><i class="fas fa-check-circle me-2" style="color: #8B4513;"></i> Garansi uang kembali 30 hari jika produk tidak sesuai.</li>
                        <li><i class="fas fa-check-circle me-2" style="color: #8B4513;"></i> Gratis pengembalian produk cacat dalam 14 hari.</li>
                        <li><i class="fas fa-check-circle me-2" style="color: #8B4513;"></i> Pertukaran ukuran atau warna tanpa biaya tambahan.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pembayaran-section mt-5 text-center">
            <h5 class="fw-bold mb-4" style="color: #8B4513;">Menerima Pembayaran :</h5>
            <div class="d-flex justify-content-center align-items-center">
                <div class="mx-3">
                    <i class="fas fa-qrcode fa-4x mb-2" style="color: #8B4513;"></i>
                    <p class="fw-bold">QRIS</p>
                </div>
                <div class="mx-3">
                    <i class="fas fa-university fa-4x mb-2" style="color: #8B4513;"></i>
                    <p class="fw-bold">Transfer Bank</p>
                </div>
                <div class="mx-3">
                    <i class="fas fa-wallet fa-4x mb-2" style="color: #8B4513;"></i>
                    <p class="fw-bold">E-Wallet</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="closing-cta py-5" style="background-color: #9B4141;">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row align-items-center">
            <div class="col-md-6 text-white text-md-start text-center">
                <h2 class="display-5 fw-bold mb-4">"Sudah siap tampil beda? <br>Temukan outfit terbaikmu di sini."</h2>
                <a href="katalog" class="btn btn-danger btn-lg">Lihat Katalog</a>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
    
</div>
        </div>
    </div>
</section>

<footer class="footer py-5" style="background-color: #552D2D;">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">Ahlinya Retail</h5>
                <p>Toko pakaian online dengan koleksi terkini dan kualitas premium.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">Kontak Kami</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-phone-alt me-2"></i> WhatsApp: +62 812-3456-7890</li>
                    <li><i class="fas fa-envelope me-2"></i> Email: cs@namatoko.com</li>
                    <li><i class="fas fa-map-marker-alt me-2"></i> Alamat: JL. Melati No. 15, Jakarta, Indonesia</li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">Kebijakan</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Syarat & Ketentuan</a></li>
                </ul>
            </div>
        </div>
        <hr class="mt-4" style="border-color: rgba(255,255,255,0.2);">
        <div class="text-center mt-3">
            <p>&copy; {{ date('Y') }} Ahlinya Retail. All rights reserved.</p>
        </div>
    </div>
</footer>
</main>
@endsection