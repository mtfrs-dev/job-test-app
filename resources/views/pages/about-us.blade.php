@extends('layouts.app')

@section('content')
    <main class="page-content-container">
        <h1 class="about-me-title">About <span style="text-decoration: line-through; ">  Us </span> Me</h1>
        <p>Mohon, kesediaannya membaca CV saya <span><a href="{{ asset('files/CV Terbaru Togi.pdf') }}" class="links" download="">di sini</a></span></p>
        <div class="experience-container">
            <div class="experience-card">
                <img src="{{ asset('images/download.jpeg') }}" alt="">
                <h1 class="experience-location">Pusat Riset dan Inovasi Kecerdasan Buatan - ITERA</h1>
                <p>Ruang kelas virtual (a'la Google Classroom) tapi bisa menilai jawaban essay secara otomatis</p>
                <div>
                    <h2 class="font-medium">Teknologi utama :</h2>
                    <div class="experience-info-section">
                        <p class="skill-pill">HTML + Tailwind CSS</p>
                        <p class="skill-pill">JavaScript (jQuery + AlpineJS)</p>
                        <p class="skill-pill">PHP (Laravel + Livewire)</p>
                        <p class="skill-pill">Python (TF-IDF-DF + Cosine Similarity)</p>
                    </div>
                    
                    <h2 class="font-medium">Konsep/Teknik Pendukung</h2>
                    <div class="experience-info-section">
                        <p class="skill-pill">Laravel Scheduled Tasks</p>
                        <p class="skill-pill">Laravel Queued Jobs</p>
                    </div>
                    
                    <h2 class="font-medium">Skill Pendukung Lainnya :</h2>
                    <div class="experience-info-section">
                        <p class="skill-pill">SDLC Agile Model PXP</p>
                        <p class="skill-pill">Konfigurasi Server Ubuntu</p>
                    </div>
                </div>
                <p>Bisa di coba, sebagai guru : <span class="aes-login-credential">ahmad@mail.com</span>, atau sebagai siswa : <span class="aes-login-credential">ali@mail.com</span>, gunakan kata sandi : <span class="aes-login-credential">password</span></p>
                <p>Akses aplikasinya <span><a href="https://aes-app.mtfrs.tech/login" target="_blank" class="links">di sini</a></span></p>
            </div>

            <div class="experience-card">
                <img src="{{ asset('images/download.jpeg') }}" alt="">
                <h1 class="experience-location">HELIO OFFICIAL</h1>
                <p>Sistem Informasi Manajemen Pemesenan Layanan Pengelola Acara</p>
                <div>
                    <h2 class="font-medium">Teknologi utama :</h2>
                    <div class="experience-info-section">
                        <p class="skill-pill">HTML + Tailwind CSS</p>
                        <p class="skill-pill">JavaScript (jQuery + AlpineJS + FullCalendarJS + pdfmake)</p>
                        <p class="skill-pill">PHP (Laravel)</p>
                        <p class="skill-pill">Midtrans Payment Gateway (Card, Bank, Store)</p>
                    </div>
                    
                    <h2 class="font-medium">Konsep/Teknik Pendukung</h2>
                    <div class="experience-info-section">
                        <p class="skill-pill">Laravel Scheduled Tasks</p>
                        <p class="skill-pill">Midtrans Core API</p>
                    </div>
                    
                    <h2 class="font-medium">Skill Pendukung Lainnya :</h2>
                    <div class="experience-info-section">
                        <p class="skill-pill">SDLC Agile Model PXP</p>
                        <p class="skill-pill">Konfigurasi Server Ubuntu</p>
                    </div>
                </div>
            </div>

            <div class="experience-card">
                <img src="{{ asset('images/download.jpeg') }}" alt="">
                <h1 class="experience-location">Laboratorium Multimedia ITERA</h1>
                <p>Sistem Informasi Perekrutan dan Rekapitulasi Honor bagi Asisten Praktikum</p>
                <div>
                    <h2 class="font-medium">Teknologi utama :</h2>
                    <div class="experience-info-section">
                        <p class="skill-pill">HTML + Tailwind CSS + Bootstrap CSS</p>
                        <p class="skill-pill">JavaScript (VueJS + jQuery + AlpineJS + pdfmake)</p>
                        <p class="skill-pill">PHP (Laravel)</p>
                    </div>
                    
                    <h2 class="font-medium">Konsep/Teknik Pendukung</h2>
                    <div class="experience-info-section">
                        <p class="skill-pill">Laravel Scheduled Tasks</p>
                    </div>
                    
                    <h2 class="font-medium">Skill Pendukung Lainnya :</h2>
                    <div class="experience-info-section">
                        <p class="skill-pill">SDLC Waterfall</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection