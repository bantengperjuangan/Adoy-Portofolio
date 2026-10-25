@extends('layouts.main')

@section('title', 'Tambah Proyek | Yoda Sani')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-md-6">
            
            <div class="card shadow-sm border-0 rounded-4 p-4 bg-body-tertiary">
                <h3 class="fw-bold text-center mb-4">Tambah Proyek Baru</h3>
                
                <form action="/simpan-proyek" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Proyek</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Kategori</label>
                        <input type="text" name="kategori" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Ikon (Bootstrap)</label>
                        <input type="text" name="ikon" class="form-control" required placeholder="Contoh: bi-laptop">
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 rounded-pill">Simpan ke Database</button>
                    <a href="/portofolio" class="btn btn-outline-secondary w-100 rounded-pill mt-2">Batal</a>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection