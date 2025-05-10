<!-- Header Navigation -->
<header class="fixed top-0 left-0 w-full bg-primary shadow-md z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="#" class="text-white text-2xl font-['Pacifico']">logo</a>
        <nav class="hidden md:flex items-center space-x-8">
            <a href="#" class="nav-link text-white font-medium hover:text-accent transition-colors">HOME</a>
            <a href="#" class="nav-link text-white font-medium hover:text-accent transition-colors">KONSELING
                NARATIF</a>
            <a href="#" class="nav-link text-white font-medium hover:text-accent transition-colors">KEBIJAKAN &
                PRIVASI</a>
            <a href="#" class="nav-link text-white font-medium hover:text-accent transition-colors">LKPD</a>
            <a href="{{ route('login') }}">
                <button
                    class="ml-4 bg-accent text-primary font-semibold px-6 py-2 !rounded-button hover:bg-opacity-90 transition-all shadow-md whitespace-nowrap">
                    Sign In
                </button>
            </a>
        </nav>
        <div class="md:hidden w-8 h-8 flex items-center justify-center text-white cursor-pointer">
            <i class="ri-menu-line ri-lg"></i>
        </div>
    </div>
</header>