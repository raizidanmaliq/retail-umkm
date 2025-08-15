@extends('layouts.app')

@section('content')
<main>
    {{-- Hero Section --}}
    <section class="hero-section d-flex align-items-center justify-content-center text-center text-white py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Belanja Mudah<br>Harga Bersahabat,<br>Kualitas Terjamin</h1>
            <p class="lead mt-3">Temukan produk terbaik dengan harga yang tidak akan menguras kantong Anda.</p>
            <a href="#best-seller" class="btn btn-warning">Register</a>
        </div>
    </section>

    <hr class="container my-5">

    {{-- Highlight Keunggulan --}}
    <section class="mengapa-kami py-5">
    <div class="container text-center">
        <h2 class="mb-5" style="color: #8B4513;">Mengapa Memilih kami?</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="icon-container mb-3">
                    {{-- Ganti ikon ini dengan ikon yang sesuai --}}
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
                        <img src="https://via.placeholder.com/400x600.png" class="card-img-top" alt="Piyama">
                        <div class="overlay-icons">
                            <span class="badge bg-danger">10% OFF</span>
                            <div class="icon-group">
                                <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
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
                <span class="badge bg-danger rounded-pill p-2 fw-bold me-3">00:51:42</span>
                <a href="#" class="text-dark text-decoration-none fw-bold">Lihat Semua →</a>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 2; $i++)
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/400x600.png" class="card-img-top" alt="Tas putih">
                        <div class="overlay-icons">
                            <span class="badge bg-danger rounded-pill p-2 position-absolute top-0 end-0 m-2 fw-bold">FLASH SALE</span>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color: #8B4513;">Tas putih</h5>
                        <p class="card-text fw-bold" style="color: #CC3333;">Rp. 100.000</p>
                        <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

    {{-- Penilaian Produk --}}
    <hr class="container my-5">

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
        
        <div class="d-flex justify-content-center mt-4">
            <a href="#" class="btn btn-light me-2"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="btn btn-light active me-2">1</a>
            <a href="#" class="btn btn-light me-2">2</a>
            <a href="#" class="btn btn-light me-2">3</a>
            <a href="#" class="btn btn-light me-2">4</a>
            <a href="#" class="btn btn-light me-2"><i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
</section>

    {{-- Footer --}}
    <footer class="footer text-white py-4" style="background-color: #343a40;">
        <div class="container text-center">
            <p>&copy; 2025 Ahlinya Retail. All Rights Reserved.</p>
        </div>
    </footer>
</main>
@endsection