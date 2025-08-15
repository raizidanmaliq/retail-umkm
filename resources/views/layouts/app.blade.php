<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahlinya Retail</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
    .navbar-brand-custom {
        color: #8B4513; /* Maroon color for the brand */
        font-weight: bold;
    }

    .nav-link-custom {
        color: #000;
        font-weight: 500;
        margin: 0 10px; /* Memberi jarak horizontal */
    }

    .search-container {
        display: flex;
        align-items: center;
        background-color: #F8F0F0; /* Light pink background */
        border-radius: 25px;
        padding: 5px 15px;
        width: 300px;
    }

    .search-container input {
        border: none;
        background-color: transparent;
        width: 100%;
        outline: none;
        color: #555;
    }
    
    .search-container input::placeholder {
        color: #aaa;
    }

    .icon-link {
        color: #000;
        font-size: 1.25rem;
        margin-left: 20px;
    }

    .register-btn {
        background-color: #CC3333; /* Red color for the button */
        color: #fff;
        border-radius: 25px;
        padding: 8px 20px;
        font-weight: bold;
    }

    .divider {
        border-left: 1px solid #ccc;
        height: 20px;
        margin: 0 15px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand navbar-brand-custom" href="#">Ahlinya Retail</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#">Sale</a>
                </li>
            </ul>
            
            <div class="d-flex align-items-center">
                <div class="search-container me-3">
                    <input type="text" placeholder="Search for products">
                    <i class="fas fa-search"></i>
                </div>
                
                <a href="#" class="icon-link me-2"><i class="fas fa-shopping-cart"></i></a>
                <a href="#" class="icon-link me-2"><i class="fas fa-heart"></i></a>
                
                <div class="divider"></div>
                
                <a href="#" class="btn me-2">Sign In</a>
                <a href="#" class="btn register-btn">Register</a>
            </div>
        </div>
    </div>
</nav>

    <main>
        @yield('content')
    </main>

</body>
</html>