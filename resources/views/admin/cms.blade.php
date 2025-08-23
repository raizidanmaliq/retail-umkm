@extends('admin.admin_layout')

@section('content')
<div class="container-fluid">

    <!--  Manajemen Kategori Produk -->
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <h5 class="mb-0">Manajemen Kategori Produk</h5>
        </div>

        <div class="kategori-wrapper">
  <h3>Manajemen Kategori Produk</h3>
  <label for="kategori">Pilih Kategori</label>

  <div class="kategori-row">
    <select id="kategori" name="kategori">
      <option hidden>Nama Kategori</option>
      <option>Pakaian</option>
      <option>Tas</option>
      <option>Sepatu</option>
    </select>

    <div class="kategori-actions">
      <button class="btn-action tambah">
        <i class="fas fa-plus-square"></i> Tambah
      </button>
      <button class="btn-action edit">
        <i class="fas fa-edit"></i> Edit
      </button>
      <button class="btn-action hapus">
        <i class="fas fa-trash-alt"></i> Hapus
      </button>
    </div>
  </div>
</div>

    <!--  Manajemen Produk -->
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <h5 class="mb-0">Manajemen Produk</h5>
        </div>

        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga" placeholder="Harga">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Stok</label>
                        <input type="number" class="form-control" name="stok" placeholder="Stok">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Label Promo</label>
                        <input type="text" class="form-control" name="label_promo" placeholder="Label promo">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Produk</label>
                    <input type="file" class="form-control" name="foto_produk">
                </div>

                <button type="submit" class="btn btn-danger">Simpan</button>
            </form>
        </div>
    </div>

    <!--  Manajemen Banner Promo -->
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <h5 class="mb-0">Manajemen Banner Promo</h5>
        </div>

        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Link Promo</label>
                        <input type="text" class="form-control" name="link_promo" placeholder="Link promo">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Foto Produk</label>
                        <input type="file" class="form-control" name="foto_banner">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--  Manajemen Halaman Informasi -->
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <h5 class="mb-0">Manajemen Halaman Informasi</h5>
        </div>

        <div class="card-body">
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Tentang Kami</label>
                    <textarea class="form-control" name="tentang_kami" rows="3" placeholder="Isi tentang kami..."></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kontak</label>
                    <textarea class="form-control" name="kontak" rows="3" placeholder="Isi informasi kontak..."></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kebijakan</label>
                    <textarea class="form-control" name="kebijakan" rows="3" placeholder="Isi kebijakan (Privacy Policy, S&K)..."></textarea>
                </div>

                <button type="submit" class="btn btn-danger">Simpan</button>
            </form>
        </div>
    </div>

    <!--  Testimoni Pelanggan -->
    <div class="card shadow-sm mb-4">
        <div class="card-header">
            <h5 class="mb-0">Testimoni Pelanggan</h5>
        </div>

        <div class="card-body">
            <form action="#" method="POST" class="row g-3 align-items-end">
                @csrf
                <div class="col-md-4">
                    <label class="form-label">Tambah Testimoni</label>
                    <input type="text" class="form-control" name="nama_testimoni" placeholder="Nama Pelanggan">
                </div>
                <div class="col-md-4">
                    <label class="form-label">&nbsp;</label>
                    <input type="text" class="form-control" name="isi_testimoni" placeholder="Testimoni">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Tambah Testimoni</button>
                </div>
            </form>

            <!--  Daftar Testimoni -->
            <h6 class="mt-4">Daftar Testimoni</h6>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Testimoni</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Samsul</td>
                        <td>"Mantap sekali barangnya"</td>
                    <td>
                        <button class="btn btn-sm btn-primary" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" title="Hapus">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>

                    </tr>
                    <tr>
                        <td>Alex</td>
                        <td>"Bagus euy barangnya"</td>
                         <td>
                        <button class="btn btn-sm btn-primary" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" title="Hapus">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
