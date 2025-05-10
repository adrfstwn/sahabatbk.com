<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Portal</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#03AED2',
                        secondary: '#68D2E8',
                        accent: '#FDDE55',
                        light: '#FEEFAD'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
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
</head>

<body>
    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 w-full bg-primary shadow-md z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-['Pacifico']">logo</a>
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#" class="nav-link text-white font-medium hover:text-accent transition-colors">HOME</a>
                <a href="#"
                    class="nav-link text-white font-medium hover:text-accent transition-colors">INFORMATION</a>
                <a href="#" class="nav-link text-white font-medium hover:text-accent transition-colors">LKPD</a>
                <button
                    class="ml-4 bg-accent text-primary font-semibold px-6 py-2 !rounded-button hover:bg-opacity-90 transition-all shadow-md whitespace-nowrap">Sign
                    In</button>
            </nav>
            <div class="md:hidden w-8 h-8 flex items-center justify-center text-white cursor-pointer">
                <i class="ri-menu-line ri-lg"></i>
            </div>
        </div>
    </header>
    <!-- Hero Section -->
    <section class="pt-24 pb-16 md:pt-32 md:pb-24 relative overflow-hidden"
        style="background-image: url('https://readdy.ai/api/search-image?query=educational%20background%20with%20blue%20and%20yellow%20colors%2C%20showing%20abstract%20learning%20elements%2C%20books%2C%20mathematical%20symbols%2C%20science%20icons%2C%20with%20a%20gradient%20from%20light%20yellow%20to%20white%20on%20the%20left%20side%20for%20text%20placement%2C%20modern%2C%20clean%2C%20suitable%20for%20teenagers&width=1600&height=800&seq=hero1&orientation=landscape'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-gradient-to-r from-light to-transparent"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="w-full md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-primary mb-6 leading-tight">Learn,
                        Explore, Grow Together</h1>
                    <p class="text-gray-700 text-lg md:text-xl mb-8 max-w-lg">Your interactive learning journey starts
                        here. Discover fun educational resources designed specifically for curious minds like yours!</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="https://readdy.ai/home/6eabb0b6-0013-4d4d-be0b-adcbed96ad5c/56090e6f-62d3-4599-8ce6-f6fb5a865461"
                            data-readdy="true">
                            <button
                                class="bg-accent text-primary font-semibold px-8 py-3 !rounded-button hover:bg-opacity-90 transition-all shadow-lg whitespace-nowrap">Get
                                Started</button>
                        </a>
                        <button
                            class="bg-white text-primary border-2 border-primary font-semibold px-8 py-3 !rounded-button hover:bg-primary hover:text-white transition-all shadow-md whitespace-nowrap">Learn
                            More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Explore Our Platform</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Discover all the amazing features designed to make learning
                    engaging, interactive, and fun for students.</p>
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
                            <a href="#"
                                class="text-primary font-medium hover:text-secondary transition-colors">Read more</a>
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
                            <a href="#"
                                class="text-primary font-medium hover:text-secondary transition-colors">Read more</a>
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
                            <a href="#"
                                class="text-primary font-medium hover:text-secondary transition-colors">Read more</a>
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
    <!-- Testimonials Section -->
    <section class="py-16 bg-light">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">What Students Say</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Hear from students who have improved their learning
                    experience with our platform.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-medium">EM</span>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-primary">Emily Mitchell</h4>
                            <p class="text-sm text-gray-500">Grade 8 Student</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"I used to struggle with math, but the interactive lessons and
                        practice exercises have made it so much easier to understand. Now it's actually my favorite
                        subject!"</p>
                    <div class="mt-4 flex text-accent">
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-medium">JT</span>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-primary">Jason Thompson</h4>
                            <p class="text-sm text-gray-500">Grade 7 Student</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The achievement system makes learning feel like a game. I'm always
                        excited to complete new lessons and earn badges. It's made studying much more fun!"</p>
                    <div class="mt-4 flex text-accent">
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-half-fill"></i></div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mr-4">
                            <span class="text-white font-medium">SL</span>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-primary">Sophia Lee</h4>
                            <p class="text-sm text-gray-500">Grade 9 Student</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"I love how I can access all my learning materials in one place.
                        The science simulations are amazing and have helped me understand complex concepts easily."</p>
                    <div class="mt-4 flex text-accent">
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                        <div class="w-5 h-5 flex items-center justify-center"><i class="ri-star-fill"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-primary text-white pt-12 pb-6">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="text-xl font-['Pacifico'] mb-6">logo</h3>
                    <p class="text-white text-opacity-80 mb-6">Your comprehensive learning platform designed
                        specifically for students aged 12-15.</p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center text-white">
                                <i class="ri-facebook-fill"></i>
                            </div>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center text-white">
                                <i class="ri-twitter-x-fill"></i>
                            </div>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center text-white">
                                <i class="ri-instagram-fill"></i>
                            </div>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center text-white">
                                <i class="ri-youtube-fill"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-white text-opacity-80 hover:text-opacity-100 transition-colors">Home</a>
                        </li>
                        <li><a href="#"
                                class="text-white text-opacity-80 hover:text-opacity-100 transition-colors">About
                                Us</a></li>
                        <li><a href="#"
                                class="text-white text-opacity-80 hover:text-opacity-100 transition-colors">Courses</a>
                        </li>
                        <li><a href="#"
                                class="text-white text-opacity-80 hover:text-opacity-100 transition-colors">Resources</a>
                        </li>
                        <li><a href="#"
                                class="text-white text-opacity-80 hover:text-opacity-100 transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-6">Resources</h3>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-white text-opacity-80 hover:text-opacity-100 transition-colors">Help
                                Center</a></li>
                        <li><a href="#"
                                class="text-white text-opacity-80 hover:text-opacity-100 transition-colors">Study
                                Materials</a></li>
                        <li><a href="#"
                                class="text-white text-opacity-80 hover:text-opacity-100 transition-colors">Practice
                                Tests</a></li>
                        <li><a href="#"
                                class="text-white text-opacity-80 hover:text-opacity-100 transition-colors">Video
                                Tutorials</a></li>
                        <li><a href="#"
                                class="text-white text-opacity-80 hover:text-opacity-100 transition-colors">Parent
                                Resources</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-6">Contact Us</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center text-white mr-3 mt-1">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-white text-opacity-80">123 Education Street, Learning City, 54321</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center text-white mr-3 mt-1">
                                <i class="ri-mail-line"></i>
                            </div>
                            <span class="text-white text-opacity-80">contact@learningportal.edu</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex items-center justify-center text-white mr-3 mt-1">
                                <i class="ri-phone-line"></i>
                            </div>
                            <span class="text-white text-opacity-80">+1 (555) 123-4567</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white border-opacity-20 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-white text-opacity-60 text-sm mb-4 md:mb-0">© 2025 Learning Portal. All rights
                        reserved.</p>
                    <div class="flex space-x-6">
                        <a href="#"
                            class="text-white text-opacity-60 text-sm hover:text-opacity-100 transition-colors">Privacy
                            Policy</a>
                        <a href="#"
                            class="text-white text-opacity-60 text-sm hover:text-opacity-100 transition-colors">Terms
                            of Service</a>
                        <a href="#"
                            class="text-white text-opacity-60 text-sm hover:text-opacity-100 transition-colors">Cookie
                            Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const menuButton = document.querySelector('.ri-menu-line');
            if (menuButton) {
                menuButton.addEventListener('click', function() {
                    // Mobile menu functionality would go here
                    alert('Mobile menu clicked');
                });
            }
            // Quick access buttons
            const quickAccessButtons = document.querySelectorAll('.quick-access-btn');
            quickAccessButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const subject = this.querySelector('h3').textContent;
                    alert(`You selected: ${subject}`);
                });
            });
        });
    </script>
</body>

</html>
