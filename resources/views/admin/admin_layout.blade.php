<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Pengelolaan Stok</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="d-flex">
        {{-- Sidebar --}}
        <div class="sidebar">
            <h4 class="mb-4">Ahlinya Retail</h4>
            <ul class="nav flex-column">  
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="fas fa-boxes me-2"></i> Pengelolaan Stok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-box-open me-2"></i> Pemesanan Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-chart-line me-2"></i> Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-cog me-2"></i> Setting</a>
                </li>
            </ul>
        </div>

        {{-- Konten Utama --}}
        <div class="main-content flex-grow-1">
            @yield('content')
        </div>
    </div>
</body>
</html>