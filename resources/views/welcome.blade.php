@extends('layouts.main')

@section('title', 'Beranda | Yoda Sani')

@section('content')
<div class="container mt-5 pt-5 mb-5">
    <div class="row align-items-center justify-content-center">
        
        <!-- Kolom Kiri: Teks Sambutan (Sekarang dibungkus panel kaca) -->
        <div class="col-md-7" data-aos="fade-right" data-aos-duration="1000">
            <!-- Ini dia rahasianya: Kita tambahkan card di sini -->
            <div class="card p-4 p-md-5 shadow-lg border-0 rounded-4 kartu-animasi">
                <div class="card-body">
                    <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill shadow-sm">Web Developer Portfolio</span>
                    <h1 class="fw-bold display-4 mb-3">Halo, Saya <br><span class="text-primary">Yoda Sani</span></h1>
                    
                    <!-- Ubah text-secondary jadi text-body agar warna teks otomatis menyesuaikan gelap/terang -->
                    <p class="lead text-body mb-4" style="line-height: 1.8;">
                        Seorang pribadi yang santai, ramah, dan selalu antusias belajar hal baru untuk mengembangkan diri. Saat ini saya sedang menempuh studi Sistem Informasi di Universitas Dinamika Bangsa, Kota Jambi, dengan fokus pada eksplorasi pengembangan sistem dan web modern.
                    </p>
                    
                    <div class="d-flex gap-3">
                        <a href="/portofolio" class="btn btn-primary btn-lg rounded-pill px-4 shadow">
                            <i class="bi bi-briefcase me-2"></i>Lihat Karya
                        </a>
                        <a href="https://github.com" target="_blank" class="btn btn-outline-primary btn-lg rounded-circle shadow-sm" title="GitHub" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Ilustrasi/Foto (Juga dibungkus efek kaca) -->
        <div class="col-md-5 text-center mt-5 mt-md-0" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <div class="card rounded-circle mx-auto d-flex align-items-center justify-content-center shadow-lg kartu-animasi" style="width: 350px; height: 350px; border-radius: 50% !important;">
                <i class="bi bi-person-bounding-box text-primary" style="font-size: 10rem;"></i>
            </div>
        </div>

    </div>
</div>
@endsection