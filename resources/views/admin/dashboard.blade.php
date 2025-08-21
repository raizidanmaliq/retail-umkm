@extends('admin.admin_layout')

@section('content')
<header class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Pengelolaan Stok</h1>
    <div>
        <a href="#" class="btn btn-light"><i class="fas fa-bell"></i></a>
        <a href="#" class="btn btn-light"><i class="fas fa-user-circle"></i></a>
    </div>
</header>

{{-- Kartu Statistik --}}
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card card-stats p-3 shadow-sm">
            <div class="d-flex justify-content-between">
                <h5 class="mb-0">Total Produk</h5>
                <i class="fas fa-cube fa-2x text-muted"></i>
            </div>
            <h2 class="fw-bold mt-2">1,245</h2>
            <p class="text-muted mb-0">12% dari bulan lalu</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stats p-3 shadow-sm">
            <div class="d-flex justify-content-between">
                <h5 class="mb-0">Total Stok</h5>
                <i class="fas fa-cubes fa-2x text-muted"></i>
            </div>
            <h2 class="fw-bold mt-2">5,428</h2>
            <p class="text-muted mb-0">5% dari bulan lalu</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stats p-3 shadow-sm">
            <div class="d-flex justify-content-between">
                <h5 class="mb-0">Stok Menipis</h5>
                <i class="fas fa-exclamation-triangle fa-2x text-warning"></i>
            </div>
            <h2 class="fw-bold mt-2">24</h2>
            <p class="text-muted mb-0">Perlu pengecekan stok</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-stats p-3 shadow-sm">
            <div class="d-flex justify-content-between">
                <h5 class="mb-0">Stok Habis</h5>
                <i class="fas fa-ban fa-2x text-danger"></i>
            </div>
            <h2 class="fw-bold mt-2">8</h2>
            <p class="text-muted mb-0">Segera restock produk</p>
        </div>
    </div>
</div>

{{-- Tombol Aksi --}}
<div class="d-flex justify-content-between align-items-center mb-4">
    <a href="/admin/tambah-produk" class="btn btn-success me-2"><i class="fas fa-plus me-2"></i>Tambah Produk</a>
    <a href="#" class="btn btn-info text-white"><i class="fas fa-box me-2"></i>Stock opname</a>
</div>

{{-- Grafik (Placeholder) --}}
<div class="row mb-4">
    <div class="col-md-6">
        <div class="card shadow-sm" style="height: 300px;">
            <div class="card-body d-flex justify-content-center align-items-center bg-light">
                <p class="text-muted">Placeholder Grafik Batang</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow-sm" style="height: 300px;">
            <div class="card-body d-flex justify-content-center align-items-center bg-light">
                <p class="text-muted">Placeholder Grafik Lingkaran</p>
            </div>
        </div>
    </div>
</div>

{{-- Daftar Produk --}}
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0" style="font-family: 'Playfair Display', serif;">Daftar Stok Produk</h5>
        <div class="d-flex">
            <select class="form-select me-2">
                <option selected>Semua Kategori</option>
            </select>
            <select class="form-select me-2">
                <option selected>Semua Status Stok</option>
            </select>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <button class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>ID</th>
                        <th>STOK</th>
                        <th>Harga Modal</th>
                        <th>Harga Jual</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="http://googleusercontent.com/file_content/2" alt="Dress" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;" class="me-3">
                                <div>
                                    <h6 class="mb-0">Dress Wanita</h6>
                                    <small class="text-muted">Kategori: Baju wanita</small>
                                </div>
                            </div>
                        </td>
                        <td>BW001</td>
                        <td>50</td>
                        <td>Rp. 85.000</td>
                        <td>Rp. 100.000</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td><div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit Produk</a></li>
                                    <li><a class="dropdown-item" href="#">Tambah Stok</a></li>
                                    <li><a class="dropdown-item" href="#">Koreksi Stok</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#">Hapus Produk</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="http://googleusercontent.com/file_content/4" alt="Kemeja" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;" class="me-3">
                                <div>
                                    <h6 class="mb-0">Kemeja Formal</h6>
                                    <small class="text-muted">Kategori: Baju pria</small>
                                </div>
                            </div>
                        </td>
                        <td>KF001</td>
                        <td>50</td>
                        <td>Rp. 85.000</td>
                        <td>Rp. 100.000</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td><div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit Produk</a></li>
                                    <li><a class="dropdown-item" href="#">Tambah Stok</a></li>
                                    <li><a class="dropdown-item" href="#">Koreksi Stok</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#">Hapus Produk</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="http://googleusercontent.com/file_content/5" alt="Kemeja" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;" class="me-3">
                                <div>
                                    <h6 class="mb-0">Kemeja</h6>
                                    <small class="text-muted">Kategori: Baju wanita</small>
                                </div>
                            </div>
                        </td>
                        <td>KE001</td>
                        <td>50</td>
                        <td>Rp. 85.000</td>
                        <td>Rp. 100.000</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td><div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit Produk</a></li>
                                    <li><a class="dropdown-item" href="#">Tambah Stok</a></li>
                                    <li><a class="dropdown-item" href="#">Koreksi Stok</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#">Hapus Produk</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="http://googleusercontent.com/file_content/6" alt="Kaos" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;" class="me-3">
                                <div>
                                    <h6 class="mb-0">Kaos Polo</h6>
                                    <small class="text-muted">Kategori: Baju pria</small>
                                </div>
                            </div>
                        </td>
                        <td>KP001</td>
                        <td>50</td>
                        <td>Rp. 85.000</td>
                        <td>Rp. 100.000</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td><div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit Produk</a></li>
                                    <li><a class="dropdown-item" href="#">Tambah Stok</a></li>
                                    <li><a class="dropdown-item" href="#">Koreksi Stok</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#">Hapus Produk</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between align-items-center">
        <small class="text-muted">Menampilkan 1 sampai 4 dari 278 mutasi</small>
        <ul class="pagination mb-0">
            <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
        </ul>
    </div>
</div>
<div class="mt-5">
    <h3 class="h4 mb-4 fw-bold" style="font-family: 'Playfair Display', serif;">Riwayat Stok</h3>
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Produk</th>
                            <th>Jenis</th>
                            <th>Jumlah</th>
                            <th>Stok Akhir</th>
                            <th>User</th>
                            <th>Catatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>25 Agustus 2025</td>
                            <td>Dress Wanita</td>
                            <td>Masuk</td>
                            <td>+50</td>
                            <td>100</td>
                            <td>admin</td>
                            <td>Restock dari supplier</td>
                        </tr>
                        <tr>
                            <td>25 Agustus 2025</td>
                            <td>Dress Wanita</td>
                            <td>Keluar</td>
                            <td>-50</td>
                            <td>30</td>
                            <td>admin</td>
                            <td>Pembelian offline</td>
                        </tr>
                        <tr>
                            <td>25 Agustus 2025</td>
                            <td>Dress Wanita</td>
                            <td>Masuk</td>
                            <td>+50</td>
                            <td>100</td>
                            <td>admin</td>
                            <td>Restock dari supplier</td>
                        </tr>
                        <tr>
                            <td>25 Agustus 2025</td>
                            <td>Dress Wanita</td>
                            <td>Masuk</td>
                            <td>+50</td>
                            <td>100</td>
                            <td>admin</td>
                            <td>Restock dari supplier</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
            <small class="text-muted">Menampilkan 1 sampai 4 dari 278 mutasi</small>
            <ul class="pagination mb-0">
                <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>
@endsection