<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyek; // Memanggil cetakan tabel Proyek

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Memasukkan 3 data sekaligus ke database
        Proyek::insert([
            [
                'judul' => 'Sistem Informasi Akademik',
                'kategori' => 'Web Development',
                'deskripsi' => 'Aplikasi berbasis web untuk manajemen data mahasiswa menggunakan arsitektur Laravel.',
                'ikon' => 'bi-laptop'
            ],
            [
                'judul' => 'Chatbot NLP',
                'kategori' => 'AI & Python',
                'deskripsi' => 'Pengembangan model Natural Language Processing (NLP) sederhana untuk merespons pertanyaan.',
                'ikon' => 'bi-robot'
            ],
            [
                'judul' => 'Desain Jaringan',
                'kategori' => 'Infrastruktur',
                'deskripsi' => 'Perancangan skema database terstruktur dan simulasi topologi arsitektur jaringan komputer.',
                'ikon' => 'bi-hdd-network'
            ]
        ]);
    }
}