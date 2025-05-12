@extends('layouts.app')
@section('title', 'SahabatBK.com - Kebijakan & Privasi')
@section('content')

    <style>
        body {
            background-color: #F5F7FA;
        }

        .privacy-section {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .privacy-section:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(3, 174, 210, 0.1);
        }

        .icon-shield {
            background: linear-gradient(135deg, #03AED2 0%, #007bff 100%);
            color: white;
            border-radius: 50%;
            padding: 15px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <!-- Privacy Hero Section -->
    <section class="pt-24 pb-16 md:pt-32 md:pb-24 relative overflow-hidden bg-gradient-to-r from-blue-50 to-white">
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-full md:w-2/3">
                    <h2 class="text-4xl md:text-6xl font-extrabold text-primary mb-6 leading-tight">
                        <span class="flex justify-center md:justify-start items-center gap-2">
                            <i class="ri-double-quotes-l text-yellow-400 text-4xl md:text-6xl"></i>
                            Kebijakan & Privasi
                            <i class="ri-double-quotes-r text-yellow-400 text-4xl md:text-6xl"></i>
                        </span>
                    </h2>
                    <p class="text-gray-700 text-lg md:text-xl mb-8 max-w-2xl">
                        Komitmen kami untuk melindungi kerahasiaan, keamanan, dan kepercayaan setiap individu yang
                        menggunakan layanan SahabatBK.
                    </p>
                </div>
                <div class="w-full md:w-1/3 flex justify-center">
                    <img src="{{ asset('images/privacy2.svg') }}" alt="Privasi Illustration" class="max-w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Kebijakan Privasi Section -->
    <section class="py-16 bg-slate-50">
        <div class="container mx-auto px-6">
            <!-- Prinsip Kerahasiaan -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-8 md:p-12 mb-12 privacy-section">
                <div class="grid md:grid-cols-12 gap-8 items-center">
                    <div class="md:col-span-8">
                        <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6">
                            Prinsip Kerahasiaan
                        </h2>
                        <p class="text-gray-700 text-lg mb-4">
                            Di SahabatBK, kami memegang teguh prinsip kerahasiaan sebagai landasan utama dalam setiap
                            interaksi dan layanan konseling.
                        </p>
                        <ul class="space-y-4 text-gray-700">
                            <li class="flex items-start">
                                <i class="ri-check-line text-accent mr-3 mt-1 text-xl"></i>
                                <span>Seluruh informasi pribadi konseli dijamin kerahasiaannya.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="ri-check-line text-accent mr-3 mt-1 text-xl"></i>
                                <span>Identitas, cerita pribadi, dan masalah yang dihadapi akan dilindungi
                                    sepenuhnya.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="ri-check-line text-accent mr-3 mt-1 text-xl"></i>
                                <span>Hanya konselor dan pihak berwenang yang memiliki akses terbatas.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="md:col-span-4 flex justify-center">
                        <img src="{{ asset('images/privacy.svg') }}" alt="Privasi Illustration" class="max-w-full h-auto">
                    </div>
                </div>
            </div>

            <!-- Pengelolaan Data Digital -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden p-8 md:p-12 privacy-section">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6 text-center">
                    Pengelolaan Data Digital
                </h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-blue-50 rounded-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-accent text-white rounded-full p-3 mr-4">
                                <i class="ri-lock-line text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary">Keamanan Data</h3>
                        </div>
                        <p class="text-gray-700">
                            Semua data konseli disimpan dalam sistem terenkripsi dengan standar keamanan tertinggi,
                            melindungi informasi sensitif dari akses tidak sah.
                        </p>
                    </div>
                    <div class="bg-green-50 rounded-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-accent text-white rounded-full p-3 mr-4">
                                <i class="ri-shield-user-line text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold text-primary">Akses Terbatas</h3>
                        </div>
                        <p class="text-gray-700">
                            Hanya konselor bersertifikasi dan pihak berwenang yang memiliki akses terkontrol ke data pribadi
                            konseli.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Komitmen Kami Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6">
                Komitmen Kami
            </h2>
            <p class="text-gray-700 max-w-3xl mx-auto text-lg mb-8">
                Kami berkomitmen penuh untuk melindungi privasi, martabat, dan keamanan setiap individu yang menggunakan
                layanan SahabatBK. Kepercayaan Anda adalah prioritas utama kami.
            </p>
        </div>
    </section>

@endsection