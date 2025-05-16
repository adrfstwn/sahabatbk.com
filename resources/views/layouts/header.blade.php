<!-- Header Navigation -->
<header class="fixed top-0 left-0 w-full bg-primary shadow-md z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-white text-2xl font-['Pacifico']">SahabatBK.com</a>
        <nav id="mobileMenu" class="hidden flex-col md:flex md:flex-row items-start md:items-center
           space-y-4 md:space-y-0 md:space-x-8
           absolute md:static top-full left-0 w-full md:w-auto bg-primary md:bg-transparent
           px-6 py-4 md:py-0 shadow-lg md:shadow-none
           transition-all duration-300 ease-in-out z-40">

            <a href="{{ route('home') }}"
                class="nav-link text-white font-medium hover:text-accent transition-colors">HOME</a>
            <a href="{{ route('home') }}#konseling-naratif"
                class="nav-link text-white font-medium hover:text-accent transition-colors">
                KONSELING NARATIF
            </a>
            <a href="kebijakan-privasi"
                class="nav-link text-white font-medium hover:text-accent transition-colors">TENTANG</a>
            class="nav-link text-white font-medium hover:text-accent transition-colors">CONTACT US</a>
            <a href="{{ route('lkpd') }}"
                class="nav-link text-white font-medium hover:text-accent transition-colors">LKPD</a>
            <a href="{{ route('login') }}" class="w-full md:w-auto flex justify-center">
                <button
                    class="bg-accent text-primary font-semibold px-6 py-2 !rounded-button hover:bg-opacity-90 transition-all shadow-md whitespace-nowrap w-full md:w-auto">
                    Sign In
                </button>
            </a>
        </nav>
        <div class="md:hidden w-8 h-8 flex items-center justify-center text-white cursor-pointer" id="menuToggle">
            <i id="menuIcon" class="ri-menu-line ri-lg"></i>
        </div>
    </div>
</header>