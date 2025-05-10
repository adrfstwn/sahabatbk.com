@extends('layouts.app')
@section('title', 'Learning Portal - Home')
@section('content')

<style>
    :where([class^="ri-"])::before {
        content: "\f3c2";
    }

    body {
        font-family: 'Poppins', sans-serif;
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
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Apa itu Layanan SahabatBK?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Di SahabatBK.com, kami memahami pentingnya kesehatan mental anak
                dalam perkembangan mereka. Website ini menyediakan berbagai layanan dan informasi yang dapat membantu
                anak-anak dalam mengelola perasaan, mengatasi masalah yang mereka hadapi, dan mendapatkan dukungan yang
                mereka butuhkan.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature Card 1 -->
            <div class="bg-white rounded-lg shadow-lg p-8 card-hover">
                <div class="w-16 h-16 bg-light rounded-full flex items-center justify-center mb-6 mx-auto">
                    <div class="w-8 h-8 flex items-center justify-center text-primary">
                        <i class="ri-book-open-line ri-2x"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-primary text-center mb-4">Interactive Lessons</h3>
                <p class="text-gray-600 text-center">Engage with our interactive content that makes complex topics
                    easy to understand and fun to learn.</p>
                <div class="mt-6 text-center">
                    <a href="#"
                        class="text-primary font-medium hover:text-secondary transition-colors inline-flex items-center">
                        Learn more
                        <div class="w-5 h-5 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Feature Card 2 -->
            <div class="bg-white rounded-lg shadow-lg p-8 card-hover">
                <div class="w-16 h-16 bg-light rounded-full flex items-center justify-center mb-6 mx-auto">
                    <div class="w-8 h-8 flex items-center justify-center text-primary">
                        <i class="ri-question-answer-line ri-2x"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-primary text-center mb-4">Practice Exercises</h3>
                <p class="text-gray-600 text-center">Test your knowledge with our comprehensive set of practice
                    exercises and get instant feedback.</p>
                <div class="mt-6 text-center">
                    <a href="#"
                        class="text-primary font-medium hover:text-secondary transition-colors inline-flex items-center">
                        Try now
                        <div class="w-5 h-5 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Feature Card 3 -->
            <div class="bg-white rounded-lg shadow-lg p-8 card-hover">
                <div class="w-16 h-16 bg-light rounded-full flex items-center justify-center mb-6 mx-auto">
                    <div class="w-8 h-8 flex items-center justify-center text-primary">
                        <i class="ri-trophy-line ri-2x"></i>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-primary text-center mb-4">Achievement System</h3>
                <p class="text-gray-600 text-center">Earn badges and track your progress as you complete lessons and
                    master new skills.</p>
                <div class="mt-6 text-center">
                    <a href="#"
                        class="text-primary font-medium hover:text-secondary transition-colors inline-flex items-center">
                        View achievements
                        <div class="w-5 h-5 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Quick Access Section -->
<section class="py-16 bg-light">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Quick Access</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Jump directly to your favorite learning resources with just
                one click.</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Quick Access Button 1 -->
            <div class="quick-access-btn bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mb-4 mx-auto">
                    <div class="w-6 h-6 flex items-center justify-center text-primary">
                        <i class="ri-book-mark-line ri-lg"></i>
                    </div>
                </div>
                <h3 class="text-lg font-medium text-primary">Math</h3>
            </div>
            <!-- Quick Access Button 2 -->
            <div class="quick-access-btn bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mb-4 mx-auto">
                    <div class="w-6 h-6 flex items-center justify-center text-primary">
                        <i class="ri-flask-line ri-lg"></i>
                    </div>
                </div>
                <h3 class="text-lg font-medium text-primary">Science</h3>
            </div>
            <!-- Quick Access Button 3 -->
            <div class="quick-access-btn bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mb-4 mx-auto">
                    <div class="w-6 h-6 flex items-center justify-center text-primary">
                        <i class="ri-earth-line ri-lg"></i>
                    </div>
                </div>
                <h3 class="text-lg font-medium text-primary">Geography</h3>
            </div>
            <!-- Quick Access Button 4 -->
            <div class="quick-access-btn bg-white rounded-lg shadow-md p-6 text-center cursor-pointer">
                <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mb-4 mx-auto">
                    <div class="w-6 h-6 flex items-center justify-center text-primary">
                        <i class="ri-history-line ri-lg"></i>
                    </div>
                </div>
                <h3 class="text-lg font-medium text-primary">History</h3>
            </div>
        </div>
    </div>
</section>
<!-- Latest Updates Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Latest Updates</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Stay informed about new lessons, features, and educational
                content.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Update Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover">
                <div class="h-48 overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=students%20working%20together%20on%20a%20science%20project%20in%20a%20modern%20classroom%2C%20bright%20and%20colorful%2C%20educational%20setting%2C%20teenagers%20aged%2012-15%2C%20engaged%20in%20learning&width=600&height=400&seq=update1&orientation=landscape"
                        alt="New Science Module" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-6">
                    <span
                        class="inline-block bg-light text-primary text-xs font-semibold px-3 py-1 rounded-full mb-3">Science</span>
                    <h3 class="text-xl font-semibold text-primary mb-2">New Science Module Released</h3>
                    <p class="text-gray-600 mb-4">Explore our new interactive module on the solar system with 3D
                        models and quizzes.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">May 8, 2025</span>
                        <a href="#" class="text-primary font-medium hover:text-secondary transition-colors">Read
                            more</a>
                    </div>
                </div>
            </div>
            <!-- Update Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover">
                <div class="h-48 overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=teenagers%20using%20tablets%20and%20computers%20in%20a%20modern%20math%20class%2C%20educational%20technology%2C%20bright%20classroom%20with%20blue%20and%20yellow%20accents%2C%20students%20aged%2012-15%20learning%20mathematics&width=600&height=400&seq=update2&orientation=landscape"
                        alt="Math Competition" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-6">
                    <span
                        class="inline-block bg-light text-primary text-xs font-semibold px-3 py-1 rounded-full mb-3">Mathematics</span>
                    <h3 class="text-xl font-semibold text-primary mb-2">Math Competition Next Month</h3>
                    <p class="text-gray-600 mb-4">Register now for our annual mathematics competition with amazing
                        prizes for winners.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">May 5, 2025</span>
                        <a href="#" class="text-primary font-medium hover:text-secondary transition-colors">Read
                            more</a>
                    </div>
                </div>
            </div>
            <!-- Update Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden card-hover">
                <div class="h-48 overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=teenagers%20in%20a%20language%20class%2C%20diverse%20students%20aged%2012-15%2C%20interactive%20learning%20environment%2C%20bright%20modern%20classroom%20with%20educational%20posters%2C%20students%20engaged%20in%20a%20language%20activity&width=600&height=400&seq=update3&orientation=landscape"
                        alt="Language Workshop" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-6">
                    <span
                        class="inline-block bg-light text-primary text-xs font-semibold px-3 py-1 rounded-full mb-3">Languages</span>
                    <h3 class="text-xl font-semibold text-primary mb-2">New Language Workshop</h3>
                    <p class="text-gray-600 mb-4">Join our interactive language workshop series and improve your
                        communication skills.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">May 2, 2025</span>
                        <a href="#" class="text-primary font-medium hover:text-secondary transition-colors">Read
                            more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-10">
            <button
                class="bg-primary text-white font-semibold px-8 py-3 !rounded-button hover:bg-secondary transition-all shadow-md whitespace-nowrap">View
                All Updates</button>
        </div>
    </div>
</section>
</body>

</html>