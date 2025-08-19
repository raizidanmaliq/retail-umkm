@extends('layouts.app')

@section('content')
<main>
    {{-- Header Katalog --}}
    <section class="katalog-header text-center py-5">
        <div class="container">
            <h1 class="fw-bold" style="color: #8B4513;">Katalog Produk Terbaru</h1>
            <p class="text-muted">Temukan berbagai pilihan produk berkualitas untuk kebutuhan Anda</p>
        </div>
    </section>
    
    {{-- Search and Filter --}}
    <section class="katalog-filter container mb-4">
        <div class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Cari produk...">
            </div>
            <div class="col-md-2">
                <select class="form-select">
                    <option selected>Semua kategori</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select">
                    <option selected>Semua harga</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select">
                    <option selected>Urutan</option>
                </select>
            </div>
        </div>
    </section>

    {{-- Promo Diskon Spesial --}}
   <section class="promo-spesial container py-4">
    <h3 class="fw-bold mb-4" style="color: #8B4513; font-family: 'Playfair Display', serif;">
        <i class="fas fa-tags me-2"></i>Promo & Diskon Spesial
    </h3>
    <div class="row">
        <article class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/baju.jpg') }}" class="card-img-top" alt="Produk Promo">
                    <span class="promo-badge">10% OFF</span>
                    <div class="product-icons">
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Piyama</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
        <article class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/baju.jpg') }}" class="card-img-top" alt="Produk Promo">
                    <span class="promo-badge">10% OFF</span>
                    <div class="product-icons">
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Piyama</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
        <article class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/baju.jpg') }}" class="card-img-top" alt="Produk Promo">
                    <span class="promo-badge">10% OFF</span>
                    <div class="product-icons">
                         <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                         <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Piyama</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
    </div>
</section>
    <hr class="container my-5">

    {{-- Semua Produk --}}
   <section class="semua-produk container py-4">
    <h3 class="fw-bold mb-4" style="color: #8B4513;">Semua Produk</h3>
    <div class="row">
        <article class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/katalog2.jpeg') }}" class="card-img-top" alt="Piyama">
                    <span class="best-seller-badge">Best Seller</span>
                    <div class="product-icons">
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Piyama</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
        <article class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/katalog3.jpg') }}" class="card-img-top" alt="Piyama">
                    <span class="best-seller-badge">Best Seller</span>
                    <div class="product-icons">
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Piyama</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
        <article class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/katalog4.jpg') }}" class="card-img-top" alt="Piyama">
                    <span class="best-seller-badge">Best Seller</span>
                    <div class="product-icons">
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Piyama</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
        <article class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/baju.jpg') }}" class="card-img-top" alt="Piyama">
                    <span class="best-seller-badge">Best Seller</span>
                    <div class="product-icons">
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Piyama</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
        <article class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/kemeja1.jpg') }}" class="card-img-top" alt="Kaos polo">
                    <span class="best-seller-badge">Best Seller</span>
                    <div class="product-icons">
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Kaos polo</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
        <article class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/kemeja2.jpg') }}" class="card-img-top" alt="Kemeja">
                    <span class="best-seller-badge">Best Seller</span>
                    <div class="product-icons">
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Kemeja</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
        <article class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/kemeja3.jpg') }}" class="card-img-top" alt="Baju tali">
                    <span class="best-seller-badge">Best Seller</span>
                    <div class="product-icons">
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Baju tali</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
        <article class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-relative">
                    <img src="{{ asset('images/kemeja4.jpg') }}" class="card-img-top" alt="Kemeja">
                    <span class="best-seller-badge">Best Seller</span>
                    <div class="product-icons">
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="fas fa-shopping-cart"></i></a>
                          <a href="#" class="btn btn-light btn-sm rounded-circle mb-2"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="card-body text-left">
                    <h5 class="card-title fw-bold" style="color: #8B4513;">Kemeja</h5>
                    <p class="card-text fw-bold" style="color: #CC3333;">Rp. 125.000</p>
                    <a href="#" class="btn btn-danger buy-btn mt-2">Buy</a>
                </div>
            </div>
        </article>
    </div>
</section>

    {{-- PagE --}}
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
<footer class="footer py-5" style="background-color: #9B4141;">
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
                    <li><i class="fas fa-map-marker-alt me-2"></i> Alamat: JL. Melati No. 45, Jakarta, Indonesia</li>
                </ul>
                <h5 class="fw-bold mt-4">Ikuti kami :</h5>
                <div class="d-flex social-icons">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-tiktok fa-2x"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-youtube fa-2x"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-bold">Kebijakan</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-lock me-2"></i><a href="#" class="text-white text-decoration-none">[Link] Privacy Policy</a></li>
                    <li><i class="fas fa-file-alt me-2"></i><a href="#" class="text-white text-decoration-none">[Link] Syarat & Ketentuan</a></li>
                </ul>
            </div>
        </div>
        <hr class="mt-4" style="border-color: rgba(255,255,255,0.2);">
        <div class="text-center mt-3">
            <p>&copy;2025 Example Text. All image</p>
        </div>
    </div>
</footer>
</main>
@endsection     