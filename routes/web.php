<?php

use Illuminate\Support\Facades\Route;

// 1. Ini kode bawaan Laravel untuk halaman utama (welcome)
Route::get('/', function () {
    return view('welcome');
});

// 2. Ini kode baru yang kita buat untuk halaman portofolio
Route::get('/portofolio', function () {
    return view('portofolio');
});
Route::get('/portofolio', function () {
    // 1. Ambil semua data dari tabel proyeks
    $data_proyek = \App\Models\Proyek::all();
    
    // 2. Buka halaman portofolio, dan bawa data tersebut dengan nama 'semua_proyek'
    return view('portofolio', ['semua_proyek' => $data_proyek]);
});
use Illuminate\Http\Request; // Pastikan baris ini ada di paling atas (jika belum ada)

// ... (kode route yang sebelumnya jangan dihapus) ...

// 1. Jalur untuk menampilkan halaman form
Route::get('/tambah-proyek', function () {
    return view('tambah');
});

// 2. Jalur rahasia untuk memproses data saat tombol "Simpan" ditekan
Route::post('/simpan-proyek', function (Request $request) {
    // Membuat cetakan data baru
    $proyek = new \App\Models\Proyek;
    $proyek->judul = $request->judul;
    $proyek->kategori = $request->kategori;
    $proyek->deskripsi = $request->deskripsi;
    $proyek->ikon = $request->ikon;
    
    // Simpan ke database
    $proyek->save();
    
    // Tendang (redirect) kembali ke halaman portofolio setelah berhasil
    return redirect('/portofolio');
});