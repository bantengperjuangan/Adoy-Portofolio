<!DOCTYPE html>
<html lang="id" data-bs-theme="light" id="tema-website">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul akan berubah-ubah secara dinamis -->
    <title>@yield('title')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Transisi warna saat ganti tema */
        body { 
            transition: background 0.5s ease, color 0.5s ease; 
        }
        
        /* 1. Tema Terang: Gradient Tosca, Biru, Kuning + Gambar Gadget */
        body {
            /* Kita beri transparansi (0.85) pada warna agar gambar gadget di belakang tembus pandang */
            background: linear-gradient(135deg, rgba(32, 201, 151, 0.85), rgba(13, 110, 253, 0.85), rgba(255, 193, 7, 0.85)),
                        url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
            background-size: cover;
        }

        /* 2. Tema Gelap: Warna sama tapi digelapkan agar tidak silau */
        [data-bs-theme="dark"] body {
            background: linear-gradient(135deg, rgba(16, 100, 75, 0.92), rgba(6, 55, 126, 0.92), rgba(127, 96, 3, 0.92)),
                        url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
            background-size: cover;
        }

        /* 3. Efek Kaca (Glassmorphism) pada Kartu & Navbar */
        .card, .navbar {
            background: rgba(255, 255, 255, 0.85) !important;
            backdrop-filter: blur(10px); /* Bikin background blurnya kayak kaca apple */
            border: 1px solid rgba(255,255,255,0.3) !important;
        }
        [data-bs-theme="dark"] .card, [data-bs-theme="dark"] .navbar {
            background: rgba(33, 37, 41, 0.85) !important;
            border: 1px solid rgba(255,255,255,0.1) !important;
        }

        /* Efek Hover Animasi */
        .kartu-animasi { transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; }
        .kartu-animasi:hover { transform: translateY(-10px); box-shadow: 0 15px 25px rgba(0,0,0,0.3) !important; cursor: pointer; }
    </style>
</head>
<body class="bg-body text-body">

    <!-- Navbar Induk (Muncul di semua halaman) -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-body" href="/"><i class="bi bi-code-slash me-2"></i>YodaSani.dev</a>
            
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-body" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-body" href="/portofolio">Portofolio</a></li>
                </ul>
            </div>

            <button class="btn btn-outline-secondary ms-3 rounded-circle" id="tombol-tema" style="width: 42px; height: 42px;">
                <i class="bi bi-moon-stars-fill" id="ikon-tema"></i>
            </button>
        </div>
    </nav>

    <!-- AREA KOSONG: Di sinilah konten tiap halaman akan dimasukkan -->
    @yield('content')

    <!-- Script Induk (Dark Mode & AOS) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 50 });

        // Logika Dark Mode tetap di sini agar jalan di semua halaman
        const htmlTag = document.getElementById('tema-website');
        const tombolTema = document.getElementById('tombol-tema');
        const ikonTema = document.getElementById('ikon-tema');

        tombolTema.addEventListener('click', function() {
            if (htmlTag.getAttribute('data-bs-theme') === 'light') {
                htmlTag.setAttribute('data-bs-theme', 'dark');
                ikonTema.classList.remove('bi-moon-stars-fill');
                ikonTema.classList.add('bi-sun-fill', 'text-warning');
            } else {
                htmlTag.setAttribute('data-bs-theme', 'light');
                ikonTema.classList.remove('bi-sun-fill', 'text-warning');
                ikonTema.classList.add('bi-moon-stars-fill');
            }
        });
    </script>
    
    <!-- Tempat untuk script khusus per halaman -->
    @yield('script')
</body>
</html>