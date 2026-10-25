@extends('layouts.main')

@section('title', 'Portofolio | Yoda Sani')

@section('content')
<div class="container mt-5 mb-5">
    
    <!-- BAGIAN JUDUL (Sekarang dibungkus panel kaca) -->
    <div class="text-center mb-5" data-aos="fade-down">
        <div class="card d-inline-block px-5 py-3 border-0 shadow-lg rounded-4 kartu-animasi">
            <h2 class="fw-bold mb-2">Eksplorasi & Proyek</h2>
            <!-- text-secondary diganti jadi text-body agar warnanya tajam -->
            <p class="text-body mb-0">Kumpulan tugas kampus dan eksplorasi teknologi.</p>
        </div>
    </div>

    <!-- AREA KARTU PROYEK DINAMIS -->
    <div class="row g-4">
        @foreach($semua_proyek as $proyek)
        <div class="col-md-4" data-aos="fade-up">
            <div class="card h-100 shadow-sm border-0 rounded-4 kartu-animasi">
                <div class="bg-secondary bg-opacity-10 rounded-top-4" style="height: 200px; display: flex; align-items: center; justify-content: center;">
                    <i class="bi {{ $proyek->ikon }} text-primary" style="font-size: 4rem;"></i>
                </div>
                <div class="card-body p-4">
                    <span class="badge bg-primary mb-2">{{ $proyek->kategori }}</span>
                    <h5 class="card-title fw-bold">{{ $proyek->judul }}</h5>
                    <!-- Deskripsi kartu juga diubah ke text-body agar lebih jelas -->
                    <p class="card-text text-body">{{ $proyek->deskripsi }}</p>
                    
                    <button onclick="munculkanPopup('{{ $proyek->judul }}', '{{ $proyek->deskripsi }}')" class="btn btn-outline-primary btn-sm rounded-pill px-4 mt-2">
                        Detail <i class="bi bi-arrow-right-circle ms-1"></i>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="text-center mt-5" data-aos="zoom-in">
        <a href="/tambah-proyek" class="btn btn-success btn-lg rounded-pill px-5 shadow mb-3">
            <i class="bi bi-plus-circle me-2"></i>Tambah Proyek Baru
        </a>
    </div>
</div>
@endsection

@section('script')
<script>
    function munculkanPopup(judul, deskripsi) {
        const isDark = document.documentElement.getAttribute('data-bs-theme') === 'dark';
        Swal.fire({
            title: judul,
            text: deskripsi,
            icon: 'info',
            confirmButtonText: 'Keren!',
            confirmButtonColor: '#0d6efd',
            background: isDark ? '#212529' : '#ffffff',
            color: isDark ? '#ffffff' : '#000000',
            showClass: { popup: 'animate__animated animate__zoomIn' },
            hideClass: { popup: 'animate__animated animate__zoomOut' }
        });
    }
</script>
@endsection