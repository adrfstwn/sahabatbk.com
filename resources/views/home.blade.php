@extends('layouts.app')
@section('title', 'SahabatBK.com - Home')
@section('content')

<style>
    :where([class^="ri-"])::before {
        content: "\f3c2";
    }

    body {
        background-color: #FEEFAD;
    }

    .nav-link {
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -4px;
        left: 0;
        background-color: white;
        transition: width 0.3s;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .card-hover {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(3, 174, 210, 0.15);
    }

    .quick-access-btn {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .quick-access-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(3, 174, 210, 0.2);
    }

    input:focus {
        outline: none;
    }

    .custom-checkbox {
        display: none;
    }

    .checkbox-label {
        position: relative;
        padding-left: 30px;
        cursor: pointer;
    }

    .checkbox-label:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 20px;
        height: 20px;
        border: 2px solid #03AED2;
        border-radius: 4px;
        transition: all 0.3s;
    }

    .custom-checkbox:checked+.checkbox-label:before {
        background-color: #03AED2;
    }

    .custom-checkbox:checked+.checkbox-label:after {
        content: '';
        position: absolute;
        left: 7px;
        top: 3px;
        width: 6px;
        height: 12px;
        border: solid white;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    @keyframes flyUpAndForward {
        0% {
            transform: translateY(100px) translateX(-50px) rotate(0deg);
            opacity: 0;
        }

        50% {
            transform: translateY(-20px) translateX(20px) rotate(5deg);
            opacity: 1;
        }

        100% {
            transform: translateY(0px) translateX(50px) rotate(10deg);
            opacity: 1;
        }
    }

    .animated-plane {
        animation: flyUpAndForward 2s ease-in-out infinite alternate;
    }

    @keyframes shakeAnimation {
        0% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(0px);
        }

        50% {
            transform: translateX(10px);
        }

        75% {
            transform: translateX(-10px);
        }

        100% {
            transform: translateX(0);
        }
    }

    .animated-shake {
        animation: shakeAnimation 1s ease-in-out infinite;
    }
</style>

<!-- Hero Section -->
<section class="pt-24 pb-16 md:pt-32 md:pb-24 relative overflow-hidden"
    style="background-image: url('https://readdy.ai/api/search-image?query=educational%20background%20with%20blue%20and%20yellow%20colors%2C%20showing%20abstract%20learning%20elements%2C%20books%2C%20mathematical%20symbols%2C%20science%20icons%2C%20with%20a%20gradient%20from%20light%20yellow%20to%20white%20on%20the%20left%20side%20for%20text%20placement%2C%20modern%2C%20clean%2C%20suitable%20for%20teenagers&width=1600&height=800&seq=hero1&orientation=landscape'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-gradient-to-r from-light to-transparent"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-primary mb-6 leading-tight">
                    Selamat datang di
                    <span
                        class="text-accent bg-gradient-to-r from-text-accent to-blue-500 lg:text-7xl font-extrabold border-b-4 border-accent/60 ml-2 pb-1 inline-block">
                        SahabatBK.com
                    </span>

                </h1>
                <p class="text-gray-700 text-lg md:text-xl mb-8 max-w-lg">Kami
                    hadir untuk memberikan bantuan dan sumber daya yang dibutuhkan anak-anak dalam menghadapi tantangan
                    kehidupan mereka, baik di lingkungan sekolah, rumah, maupun sosial.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" data-readdy="true">
                        <button
                            class="bg-accent text-primary font-semibold px-8 py-3 !rounded-button hover:bg-opacity-90 transition-all shadow-lg whitespace-nowrap">Get
                            Started</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Section -->
<section class="py-8 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden p-8 md:p-12 mb-16 custom-shadow3 relative">
            <!-- Gambar 1 -->
            <img src="{{ asset('images/kids1.png') }}" alt="Ilustrasi orang berbicara 1"
                class="hidden md:block absolute left-4 lg:left-8 top-1/6 -translate-y-1/4 w-56 h-auto lg:w-64 z-0 transform transition-all duration-300 hover:scale-110 animated-shake">
            <!-- Gambar 2 -->
            <img src="{{ asset('images/kids2.png') }}" alt="Ilustrasi orang berbicara 2"
                class="hidden md:block absolute right-4 lg:right-8 top-1/6 -translate-y-1/4 w-56 h-auto lg:w-64 z-0 transform transition-all duration-300 hover:scale-110 animated-shake">

            <!-- Konten teks -->
            <div class="text-center mb-4 relative z-10 px-4 md:px-8 lg:px-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Apa itu Layanan SahabatBK ?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Di SahabatBK.com, kami memahami pentingnya kesehatan
                    mental anak dalam perkembangan mereka. Website ini menyediakan berbagai layanan dan informasi yang
                    dapat
                    membantu anak-anak dalam mengelola perasaan, mengatasi masalah yang mereka hadapi, dan mendapatkan
                    dukungan
                    yang mereka butuhkan.</p>
            </div>
        </div>
    </div>
</section>

<!-- Konseling Naratif Section -->
<section id="konseling-naratif" class="pt-0 pb-8 bg-slate-50">
    <div class="container mx-auto px-6">
        <!-- Bagian Konseling Naratif yang dimodifikasi -->
        <div
            class="bg-white rounded-xl shadow-xl overflow-hidden pt-4 pb-8 px-6 md:pt-6 md:pb-12 md:px-12 mb-24 custom-shadow3">
            <div class="grid md:grid-cols-12 gap-6 md:gap-12 items-center">
                <!-- Konten Teks -->
                <div class="md:col-span-7 text-center md:text-left">
                    <h2 class="text-4xl md:text-6xl font-extrabold text-primary mb-6 leading-tight">
                        <span class="flex justify-center md:justify-start items-center gap-2">
                            <i class="ri-double-quotes-l text-yellow-400 text-4xl md:text-6xl"></i>
                            Konseling
                        </span>
                        <span class="flex justify-center md:justify-start items-center gap-2">
                            Naratif
                            <i class="ri-double-quotes-r text-yellow-400 text-4xl md:text-6xl"></i>
                        </span>
                    </h2>
                    <p class="text-base md:text-lg text-gray-700 mb-4" style="text-align: justify;">
                        Konseling naratif adalah pendekatan dalam Bimbingan dan Konseling yang berfokus pada cerita
                        hidup konseli (siswa). Pendekatan ini membantu siswa memahami dan mengubah cara mereka memaknai
                        pengalaman hidupnya melalui kisah atau narasi pribadi.
                    </p>
                    <p class="text-base md:text-lg text-gray-700" style="text-align: justify;">
                        Dalam konseling naratif, masalah dianggap bukan sebagai bagian dari diri seseorang, melainkan
                        sebagai sesuatu yang "terpisah" dari dirinya. Dengan cara ini, siswa dapat melihat masalah
                        secara lebih objektif dan membangun cerita baru tentang diri mereka yang lebih positif dan
                        memberdayakan.
                    </p>
                </div>
                <!-- Gambar -->
                <div
                    class="md:col-span-5 flex flex-col justify-center md:justify-end items-center md:items-end order-first md:order-last">
                    <img src="{{ asset('images/kids3.png') }}" class="animated-plane max-w-full h-auto">
                </div>
            </div>
        </div>
        <!-- Bagian Pendekatan Konseling Naratif -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Pendekatan Konseling Naratif</h2>
        </div>
        <!-- Card Pendekatan -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Konseling Card 1 -->
            <div class="bg-white rounded-lg shadow-lg p-8 card-hover">
                <div class="w-16 h-16 bg-light rounded-full flex items-center justify-center mb-6 mx-auto">
                    <div class="w-8 h-8 flex items-center justify-center text-primary">
                        <i class="ri-emotion-normal-line ri-2x"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-primary text-center mb-4">Masalah Bukan Identitas</h3>
                <p class="text-gray-600 text-center">
                    Dalam pendekatan ini, siswa diajak untuk menyadari bahwa masalah bukanlah jati diri mereka.
                    Masalah
                    hanyalah pengalaman eksternal yang bisa diatasi.
                </p>
            </div>

            <!-- Konseling Card 2 -->
            <div class="bg-white rounded-lg shadow-lg p-8 card-hover">
                <div class="w-16 h-16 bg-light rounded-full flex items-center justify-center mb-6 mx-auto">
                    <div class="w-8 h-8 flex items-center justify-center text-primary">
                        <i class="ri-draft-line ri-2x"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-primary text-center mb-4">Menulis Ulang Kisah Hidup</h3>
                <p class="text-gray-600 text-center">
                    Siswa diberi ruang untuk menceritakan kembali pengalaman hidupnya, mengganti sudut pandang
                    negatif
                    dengan narasi yang lebih memberdayakan dan optimis.
                </p>
            </div>

            <!-- Konseling Card 3 -->
            <div class="bg-white rounded-lg shadow-lg p-8 card-hover">
                <div class="w-16 h-16 bg-light rounded-full flex items-center justify-center mb-6 mx-auto">
                    <div class="w-8 h-8 flex items-center justify-center text-primary">
                        <i class="ri-star-smile-line ri-2x"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-primary text-center mb-4">Fokus pada Kekuatan Diri</h3>
                <p class="text-gray-600 text-center">
                    Konseling naratif menekankan harapan, nilai, dan kekuatan unik yang dimiliki siswa untuk
                    membantu
                    mereka tumbuh dan berkembang secara positif.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section Profil Tokoh Konseling Naratif -->
<section class="py-16 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden p-8 md:p-12 custom-shadow3 relative">
            <!-- Menambahkan efek goresan di belakang gambar -->
            <div class="absolute inset-0 z-0 bg-gradient-to-r from-yellow-100 via-blue-100 to-green-100 opacity-30">
            </div>
            <div
                class="absolute inset-0 z-0 bg-[url('https://www.transparenttextures.com/patterns/wood-light.png')] opacity-20">
            </div>

            <div class="grid md:grid-cols-12 gap-8 md:gap-12 items-start md:items-center relative z-10">
                <!-- Konten Teks Tokoh -->
                <div class="md:col-span-7">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-3">
                        Tokoh Konseling Naratif
                    </h2>
                    <p class="text-gray-600 max-w-2xl text-lg mb-8">
                        Mengenal para tokoh utama di balik pendekatan konseling naratif.
                    </p>

                    <div>
                        <h3 class="text-2xl font-semibold text-gray-800 mb-3">Michael White & David Epston
                            <span
                                class="text-xl bg-yellow-300 text-yellow-800 px-2 py-0.5 rounded-full ml-2 font-semibold">1990</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-5 text-base" style="text-align: justify;">
                            Michael White dan David Epston adalah tokoh utama dalam pengembangan <strong
                                class="font-semibold text-gray-900">konseling naratif</strong>.
                            Mereka memperkenalkan pendekatan ini pada tahun 1990 sebagai metode konseling yang
                            memisahkan
                            individu dari masalahnya,
                            serta menekankan pentingnya narasi hidup yang dimiliki oleh setiap orang.
                        </p>
                        <blockquote
                            class="text-gray-700 italic border-l-4 border-primary pl-4 py-2 text-base mb-4 bg-slate-50 rounded-r-md">
                            “Narrative therapy is a collaborative and non-pathologizing approach to counseling which
                            centers
                            people as the experts in their own lives, and views problems as separate from people.”
                            <br><span class="text-sm text-gray-600 not-italic block mt-1">– Michael White & David
                                Epston</span>
                        </blockquote>
                        <p class="text-gray-700 leading-relaxed mb-5 text-base" style="text-align: justify;">
                            Konseling naratif adalah pendekatan kolaboratif dan tidak menghakimi yang memusatkan
                            individu sebagai ahli dalam hidupnya sendiri dan memandang masalah sebagai sesuatu yang
                            terpisah dari diri individu.
                        </p>
                    </div>
                </div>
                <!-- Gambar Tokoh/Placeholder -->
                <div class="md:col-span-5 flex justify-center md:justify-end order-first md:order-last">
                    <img src="{{ asset('images/tokoh-psikologi2.png') }}" alt="Tokoh Konseling Narati
                       f" class="relative z-10">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Latest Updates Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Postingan Terbaru</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Tetap dapatkan informasi, fitur, dan konten edukasi terbaru.</p>
        </div>

        <!-- Update Card 1 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12 border-b border-gray-300 pb-12">
            <!-- Video -->
            <div class="order-1 md:order-1 min-h-[420px]">
                <div class="aspect-w-1 aspect-h-1">
                    <iframe class="w-full h-full rounded-lg shadow-md"
                        src="https://www.youtube.com/embed/WpKMtBKhc94?autoplay=1&mute=1&loop=1&playlist=WpKMtBKhc94"
                        title="New Science Module" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <!-- Konten -->
            <div class="order-2 md:order-2 h-full">
                <span
                    class="inline-block bg-light text-primary text-xs font-semibold px-3 py-1 rounded-full mb-3">Science</span>
                <h3 class="text-xl font-semibold text-primary mb-2">New Science Module Released</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                    euismod, eros vel bibendum sollicitudin, risus est condimentum diam, quis auctor eros erat quis
                    lectus. Nullam pretium non nisl in tincidunt. In sed tellus lacinia, rhoncus nunc aliquet, elementum
                    dui. Nam rutrum mi mollis dignissim vestibulum. Vivamus id erat ac libero consectetur tincidunt id
                    nec ex. Donec metus tortor, vehicula vitae placerat sit amet, venenatis vel risus. Integer
                    sollicitudin, velit in molestie venenatis, mauris augue vestibulum tortor, quis posuere nisi nisl
                    sit amet quam. Nullam vel nibh pellentesque, vulputate lacus a, lacinia ex. Donec non malesuada
                    eros. In nisl orci, commodo vel tortor quis, commodo porttitor purus. Aliquam sit amet scelerisque
                    urna.</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">May 8, 2025</span>
                    <a href="#" class="text-primary font-medium hover:text-secondary transition-colors">Read
                        more</a>
                </div>
            </div>
        </div>

        <!-- Update Card 2 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12 border-b border-gray-300 pb-12">
            <!-- Konten -->
            <div class="order-2 md:order-1 h-full">
                <span
                    class="inline-block bg-light text-primary text-xs font-semibold px-3 py-1 rounded-full mb-3">Mathematics</span>
                <h3 class="text-xl font-semibold text-primary mb-2">Math Competition Next Month</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                    euismod, eros vel bibendum sollicitudin, risus est condimentum diam, quis auctor eros erat quis
                    lectus. Nullam pretium non nisl in tincidunt. In sed tellus lacinia, rhoncus nunc aliquet, elementum
                    dui. Nam rutrum mi mollis dignissim vestibulum. Vivamus id erat ac libero consectetur tincidunt id
                    nec ex. Donec metus tortor, vehicula vitae placerat sit amet, venenatis vel risus. Integer
                    sollicitudin, velit in molestie venenatis, mauris augue vestibulum tortor, quis posuere nisi nisl
                    sit amet quam. Nullam vel nibh pellentesque, vulputate lacus a, lacinia ex. Donec non malesuada
                    eros. In nisl orci, commodo vel tortor quis, commodo porttitor purus. Aliquam sit amet scelerisque
                    urna..</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">May 5, 2025</span>
                    <a href="#" class="text-primary font-medium hover:text-secondary transition-colors">Read
                        more</a>
                </div>
            </div>
            <!-- Video -->
            <div class="order-1 md:order-2 min-h-[420px]">
                <div class="aspect-w-1 aspect-h-1">
                    <iframe class="w-full h-full rounded-lg shadow-md"
                        src="https://www.youtube.com/embed/WpKMtBKhc94?autoplay=1&mute=1&loop=1&playlist=WpKMtBKhc94"
                        title="Math Competition" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- Update Card 3 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12">
            <!-- Video -->
            <div class="order-1 md:order-1 min-h-[420px]">
                <div class="aspect-w-1 aspect-h-1">
                    <iframe class="w-full h-full rounded-lg shadow-md"
                        src="https://www.youtube.com/embed/WpKMtBKhc94?autoplay=1&mute=1&loop=1&playlist=WpKMtBKhc94"
                        title="Language Workshop" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <!-- Konten -->
            <div class="order-2 md:order-2 h-full">
                <span
                    class="inline-block bg-light text-primary text-xs font-semibold px-3 py-1 rounded-full mb-3">Languages</span>
                <h3 class="text-xl font-semibold text-primary mb-2">New Language Workshop</h3>
                <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                    euismod, eros vel bibendum sollicitudin, risus est condimentum diam, quis auctor eros erat quis
                    lectus. Nullam pretium non nisl in tincidunt. In sed tellus lacinia, rhoncus nunc aliquet, elementum
                    dui. Nam rutrum mi mollis dignissim vestibulum. Vivamus id erat ac libero consectetur tincidunt id
                    nec ex. Donec metus tortor, vehicula vitae placerat sit amet, venenatis vel risus. Integer
                    sollicitudin, velit in molestie venenatis, mauris augue vestibulum tortor, quis posuere nisi nisl
                    sit amet quam. Nullam vel nibh pellentesque, vulputate lacus a, lacinia ex. Donec non malesuada
                    eros. In nisl orci, commodo vel tortor quis, commodo porttitor purus. Aliquam sit amet scelerisque
                    urna.</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500">May 2, 2025</span>
                    <a href="#" class="text-primary font-medium hover:text-secondary transition-colors">Read
                        more</a>
                </div>
            </div>
        </div>

        <div class="text-center mt-10">
            <button
                class="bg-primary text-white font-semibold px-8 py-3 rounded-button hover:bg-secondary transition-all shadow-md whitespace-nowrap">View
                All Updates</button>
        </div>
    </div>
</section>

</body>

</html>