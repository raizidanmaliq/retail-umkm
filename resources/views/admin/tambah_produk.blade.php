@extends('admin.admin_layout')

@section('content')
<header class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0" style="font-family: 'Playfair Display', serif;">Tambah Produk Baru</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="text-muted">Stok</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
        </ol>
    </nav>
</header>

<div class="card p-4 shadow-sm">
    <form>
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk">
            </div>
            <div class="col-md-6">
                <label for="sku" class="form-label">SKU / Barcode</label>
                <input type="text" class="form-control" id="sku">
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="kategori" class="form-label">Kategori</label>
                <select id="kategori" class="form-select">
                    <option selected>Women</option>
                    <option selected>Men</option>
                    <option selected>Pilih Kategori</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="satuan" class="form-label">Satuan</label>
                <input type="text" class="form-control" id="satuan">
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="harga_modal" class="form-label">Harga Modal</label>
                <input type="text" class="form-control" id="harga_modal">
            </div>
            <div class="col-md-6">
                <label for="harga_jual" class="form-label">Harga Jual</label>
                <input type="text" class="form-control" id="harga_jual">
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="stok_awal" class="form-label">Stok Awal</label>
                <input type="number" class="form-control" id="stok_awal">
            </div>
            <div class="col-md-6">
                <label for="foto_produk" class="form-label">Foto Produk</label>
                <input type="file" class="form-control" id="foto_produk">
            </div>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <div class="card p-2" style="border: 1px solid #ced4da;">
                <div class="d-flex toolbar mb-2">
                    <button type="button" class="btn btn-light btn-sm me-1"><b>B</b></button>
                    <button type="button" class="btn btn-light btn-sm me-1"><i>I</i></button>
                    <button type="button" class="btn btn-light btn-sm me-1"><u>U</u></button>
                </div>
                <textarea class="form-control" id="deskripsi" rows="5" style="border: none;"></textarea>
            </div>
        </div>

        <div class="mb-4">
            <label for="label_promo" class="form-label">Label Promo</label>
            <select id="label_promo" class="form-select">
                <option selected>Tidak Ada</option>
            </select>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
@endsection