<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Universitas Bhinneka PGRI') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Tambahkan script untuk slider (misal: Alpine.js atau Swiper.js) jika diperlukan --}}
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}

</head>

<body class="bg-gray-100 font-sans antialiased">

    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div>
                    <a href="{{ url('/') }}">
                        {{-- Ganti 'images/logo-ubhi.png' dengan path logo Anda di folder 'public/images' --}}
                        <img class="h-14" src="https://ubhi.ac.id/assets/images/logo-ubhi.png"
                            alt="Universitas Bhinneka PGRI">
                    </a>
                </div>

                <nav class="hidden md:flex space-x-6 items-center">
                    <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">Kampus</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">Fakultas</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">Prodi</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">Lembaga</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">Bagian/Unit</a>
                    <a href="#" class="text-gray-700 hover:text-blue-800 font-medium">PMB</a>
                    <a href="#"
                        class="bg-blue-800 text-white px-4 py-2 rounded-md hover:bg-blue-900 transition duration-300">Login</a>
                </nav>

                <div class="md:hidden">
                    <button class="text-gray-800 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main>

        <section class="relative bg-blue-900 text-white py-20 flex items-center">
            {{-- Background --}}
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('https://ubhi.ac.id/assets/images/gallery/IMG_5738.JPG'); opacity: 0.3;">
            </div>

            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-8 items-stretch"> {{-- 'items-stretch' agar tingginya sama --}}

                    <div class="md:col-span-3">
                        <video class="w-full h-full object-cover rounded-lg shadow-xl" controls autoplay muted loop>
                            <source src="{{ asset('videos/IklanKampus.mp4') }}" type="video/mp4">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    </div>

                    <div
                        class="md:col-span-2 bg-white text-gray-800 p-6 rounded-lg shadow-xl flex flex-col justify-center">
                        <h2 class="text-3xl font-bold text-blue-900 mb-4">VISI</h2>
                        <ul aria-activedescendant=""class="list-disc list-inside space-y-2 text-gray-700 text-base">
                            <li>Menjadi perguruan tinggi unggul dan berwawasan enterpreneurship pada tahun 2025.</li>
                        </ul>

                        <h2 class="text-3xl font-bold text-blue-900 mb-4">MISI</h2>
                        <ul class="list-disc list-inside space-y-2 text-gray-700 text-base">
                            <li>MenyMenyelenggarakan pendidikan untuk menghasilkan sumberdaya manusia yang berbudaya
                                mutu dan berwawasan enterprenuership.</li>
                            <li>Menyelenggarakan penelitian, untuk meningkakan mutu pendidikan dan pengembangan IPTEK
                                berdasar nilai-nilai enterpreneurship.</li>
                            <li>Menyelenggarakan pengabdian kepada masyarakat berbasis riset untuk berperan aktif dalam
                                memecahkan masalah pembangunan nasional.</li>
                            <li>Mengembangkan kemitraan pada tingkat nasional dan internasional untuk mendukung
                                pelaksanaan tri dharma perguruan tinggi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        {{-- Ganti gambar --}}
                        <img src="https://ubhi.ac.id/assets/images/news/PMB_2025_ARIS_1714972323.jpg"
                            alt="Penerimaan Mahasiswa Baru" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold mb-2 text-gray-800">Penerimaan Mahasiswa Baru Pasca Sarjana
                                Tahun 2025</h4>
                            <p class="text-sm text-gray-500 mb-4">May 07, 2025 by Aris</p>
                            <a href="#" class="text-blue-800 hover:underline font-medium">Read more</a>
                        </div>
                    </div>
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        {{-- Ganti gambar --}}
                        <img src="https://ubhi.ac.id/assets/images/news/BIAYA_KULIAH_UBHI_1709795029.jpg"
                            alt="Biaya Kuliah" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold mb-2 text-gray-800">Biaya Kuliah di UBHI</h4>
                            <p class="text-sm text-gray-500 mb-4">Mar 07, 2025 by Aris</p>
                            <a href="#" class="text-blue-800 hover:underline font-medium">Read more</a>
                        </div>
                    </div>
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        {{-- Ganti gambar --}}
                        <img src="https://ubhi.ac.id/assets/images/news/KEUNGGULAN_UBHI_1709447455.jpg"
                            alt="Keunggulan Kampus" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold mb-2 text-gray-800">PMB 2025: KEUNGGULAN KAMPUS UBHI</h4>
                            <p class="text-sm text-gray-500 mb-4">Mar 03, 2025 by Aris</p>
                            <a href="#" class="text-blue-800 hover:underline font-medium">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Latest Activity</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    {{-- Ulangi blok ini untuk setiap berita --}}
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="https://ubhi.ac.id/assets/images/news/INBIS_KOPMA_AMANAH_1731644742.jpeg"
                            alt="Activity" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h4 class="text-lg font-semibold mb-2 text-gray-800">Inbis Ubhi Perkuat Ekonomi Mahasiswa
                                Melalui Kolaborasi...</h4>
                            <p class="text-sm text-gray-500 mb-4">Nov 15, 2025 by Aris</p>
                            <a href="#" class="text-blue-800 hover:underline font-medium">Read more</a>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="https://ubhi.ac.id/assets/images/news/PIMNAS_XXXVIII_2025_1731640537.jpg"
                            alt="Activity" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h4 class="text-lg font-semibold mb-2 text-gray-800">Dosen PVTO Rico Andhika Putra, M.Pd
                                Berhasil Mengantarkan...</h4>
                            <p class="text-sm text-gray-500 mb-4">Nov 15, 2025 by Aris</p>
                            <a href="#" class="text-blue-800 hover:underline font-medium">Read more</a>
                        </div>
                    </div>
                    {{-- Tambahkan kartu lainnya --}}
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Latest Notice</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Ulangi blok ini untuk setiap pengumuman --}}
                    <div class="bg-white p-4 shadow-md rounded-lg flex items-center space-x-4 border border-gray-200">
                        <div class="bg-red-700 text-white text-center rounded-md p-3 w-20 shrink-0">
                            <div class="text-2xl font-bold">27</div>
                            <div class="text-sm">Oct 25</div>
                        </div>
                        <div>
                            <a href="#" class="font-semibold text-gray-800 hover:text-blue-800">Peringatan Hari
                                Sumpah Pemuda 28 Oktober 2025</a>
                            <p class="text-sm text-gray-500">SE Peringatan Hari Sumpah Pemuda Tahun 2025.pdf</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 shadow-md rounded-lg flex items-center space-x-4 border border-gray-200">
                        <div class="bg-red-700 text-white text-center rounded-md p-3 w-20 shrink-0">
                            <div class="text-2xl font-bold">20</div>
                            <div class="text-sm">Jul 25</div>
                        </div>
                        <div>
                            <a href="#" class="font-semibold text-gray-800 hover:text-blue-800">Penetapan Lolos
                                Seleksi Penelitian Internal Universitas...</a>
                            <p class="text-sm text-gray-500">SK Lolos Seleksi Penelitian Internal TA 2425.pdf</p>
                        </div>
                    </div>
                    {{-- Tambahkan pengumuman lainnya --}}
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-blue-800 pb-2">Quick Links
                        </h3>
                        <ul class="space-y-4">
                            <li><a href="#" class="text-gray-700 hover:text-blue-800 flex items-center"><i
                                        class="fas fa-chevron-right mr-3 text-sm text-blue-800"></i>Sistem Akademik
                                    (SikAd)</a></li>
                            <li><a href="#" class="text-gray-700 hover:text-blue-800 flex items-center"><i
                                        class="fas fa-chevron-right mr-3 text-sm text-blue-800"></i>Sistem Informasi
                                    Sumberdaya Terintegrasi (SISTER)</a></li>
                            <li><a href="#" class="text-gray-700 hover:text-blue-800 flex items-center"><i
                                        class="fas fa-chevron-right mr-3 text-sm text-blue-800"></i>Sistem Perpustakaan
                                    (Simperpus)</a></li>
                            {{-- Tambahkan link lainnya --}}
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-blue-800 pb-2">Job Vacancies
                        </h3>
                        <ul class="space-y-4">
                            <li><a href="#" class="text-gray-700 hover:text-blue-800">Dibutuhkan Segera Dosen
                                    Informatika</a></li>
                            <li><a href="#" class="text-gray-700 hover:text-blue-800">Telah Dibuka Pendaftaran
                                    Kampus Mengajar Angkatan 7</a></li>
                            {{-- Tambahkan link lainnya --}}
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-10">Our Partners</h2>
                <div class="flex justify-center items-center space-x-8 md:space-x-12 flex-wrap">
                    {{-- Ganti dengan logo partner Anda --}}
                    <img src="https://ubhi.ac.id/assets/images/partner/BNI_logo.svg" alt="BNI"
                        class="h-12 grayscale hover:grayscale-0 transition duration-300">
                    <img src="https://ubhi.ac.id/assets/images/partner/bank-mandiri-logo.png" alt="Mandiri"
                        class="h-12 grayscale hover:grayscale-0 transition duration-300">
                    <img src="https://ubhi.ac.id/assets/images/partner/sun-moon-university-logo.png"
                        alt="Sun Moon University" class="h-12 grayscale hover:grayscale-0 transition duration-300">
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-gray-800 text-gray-300 py-12">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h4 class="text-xl font-semibold text-white mb-4">Contact Us</h4>
                    <p class="mb-2"><strong>Telp/Fax:</strong> (0355) 321426</p>
                    <p class="mb-2"><strong>Email:</strong> info@ubhi.ac.id</p>
                    <p><strong>Address:</strong> Jl. Mayor Sujadi Timur No.7, Plosokandang, Kedungwaru, Tulungagung</p>
                </div>

                <div>
                    <h4 class="text-xl font-semibold text-white mb-4">Connect With Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white text-2xl"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-2xl"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-2xl"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-2xl"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-xl font-semibold text-white mb-4">Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">Penerimaan Mahasiswa Baru</a></li>
                        <li><a href="#" class="hover:underline">Sistem Akademik</a></li>
                        <li><a href="#" class="hover:underline">Perpustakaan</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-10 pt-6 text-center text-gray-400 text-sm">
                © Copyright 2025 Universitas Bhinneka PGRI. All rights reserved.
            </div>
        </div>
    </footer>

</body>

</html>
