@extends('admin.admin_layout')

@section('content')
<header class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0" style="font-family: 'Playfair Display', serif;">Pemesanan Barang</h1>
    <div>
        <a href="#" class="btn btn-light"><i class="fas fa-bell"></i></a>
        <a href="#" class="btn btn-light"><i class="fas fa-user-circle"></i></a>
    </div>
</header>

{{-- Tambah Pemesanan Baru --}}
{{-- Tambah Pemesanan Baru --}}
<div class="card-custom mb-4">
    <h3 class="section-title">Tambah Pemesanan Baru</h3>
    <form>
        <div class="row g-2 mb-2">
            <div class="col-md-6">
                <label for="supplier" class="form-label">Pilih Supplier</label>
                <select id="supplier" class="form-select form-select-sm">
                    <option selected>--Pilih Supplier--</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="produk" class="form-label">Pilih Produk</label>
                <select id="produk" class="form-select form-select-sm">
                    <option selected>--Pilih Produk--</option>
                </select>
            </div>
        </div>
        <div class="row g-2 mb-3">
            <div class="col-md-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control form-control-sm" id="jumlah">
            </div>
            <div class="col-md-3">
                <label for="harga_per_unit" class="form-label">Harga Per Unit</label>
                <input type="text" class="form-control form-control-sm" id="harga_per_unit">
            </div>
            <div class="col-md-6">
                <label for="estimasi" class="form-label">Estimasi Kedatangan</label>
                <input type="date" class="form-control form-control-sm" id="estimasi">
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <button type="submit" class="btn btn-custom btn-sm">Simpan Pemesanan</button>
        </div>
    </form>
</div>



{{-- Status Pemesanan --}}
<div class="mb-4">
    <h3 class="h5 mb-3" style="font-family: 'Playfair Display', serif;">Status Pemesanan</h3>
    <div class="row g-3">
        <div class="col-md-4">
            <div class="status-card-compact text-center">
                <h5>Menunggu Konfirmasi</h5>
                <div class="status-num">10</div>
                <small class="text-muted">dari 1000</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="status-card-compact text-center">
                <h5>Dalam Pengiriman</h5>
                <div class="status-num">10</div>
                <small class="text-muted">dari 1000</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="status-card-compact text-center">
                <h5>Selesai</h5>
                <div class="status-num">10</div>
                <small class="text-muted">dari 1000</small>
            </div>
        </div>
    </div>
</div>


{{-- Riwayat Pemesanan --}}
<div class="riwayat-card mb-4">
    <h3>Riwayat Pemesanan</h3>

    <!-- Filter -->
    <div class="filter-bar">
        <input type="date" />
        <input type="text" placeholder="Cari Supplier..." />
        <button>Filter</button>
    </div>

    <!-- Table -->
    <table class="table-riwayat">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Supplier</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga Per Unit</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>25 Agustus 2025</td>
                <td>PT. ARKAMAYA</td>
                <td>Masuk</td>
                <td>+50</td>
                <td>Rp. 500.000</td>
                <td>Menunggu Konfirmasi</td>
                <td>
                    <a href="#" class="aksi-btn">
                        <i class="bi bi-printer"></i> Cetak
                    </a>
                </td>
            </tr>
            <tr>
                <td>25 Agustus 2025</td>
                <td>PT. ARKAMAYA</td>
                <td>Masuk</td>
                <td>+50</td>
                <td>Rp. 500.000</td>
                <td>Menunggu Konfirmasi</td>
                <td>
                    <a href="#" class="aksi-btn">
                        <i class="bi bi-printer"></i> Cetak
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
    
<!-- Footer Tabel -->
<div class="table-footer">
    <div class="table-info">
        Menampilkan 1 sampai 2 dari 278 mutasi
    </div>
    <div class="pagination">
        <button>&laquo;</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>&raquo;</button>
    </div>
</div>


@endsection