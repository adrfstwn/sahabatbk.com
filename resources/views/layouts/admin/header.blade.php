<!-- Header -->
<header class="bg-gradient-to-r from-primary to-[#68D2E8] text-white py-4 px-6 flex items-center justify-between shadow-lg sticky top-0 z-40">
    <div class="flex items-center">
        <!-- Mobile Menu Button -->
        <button onclick="toggleMobileMenu()" class="mobile-menu-btn mr-4 p-2 rounded-md hover:bg-white/10 transition-colors lg:hidden">
            <i class="ri-menu-line text-xl"></i>
        </button>
        
        <h1 class="text-2xl font-['Pacifico'] mr-8">SahabatBK.com</h1>
        <span class="text-sm opacity-80 hidden md:block">Admin Dashboard</span>
    </div>
    
    <div class="flex items-center space-x-4">
        <!-- Notifications -->
        <button class="relative p-2 rounded-full hover:bg-white/10 transition-colors">
            <i class="ri-notification-line text-xl"></i>
            <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">3</span>
        </button>
        
        <!-- User Profile -->
        <div class="flex items-center space-x-3">
            <div class="text-right hidden sm:block">
                <p class="text-sm font-medium">Admin</p>
                <p class="text-xs opacity-75">Administrator</p>
            </div>
            <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary shadow-md">
                <i class="ri-user-line text-lg"></i>
            </div>
        </div>
        
        <button class="bg-[#FDDE55] text-gray-800 px-4 py-2 rounded-lg font-medium hover:bg-yellow-400 transition-colors whitespace-nowrap shadow-md">
            <i class="ri-logout-box-line mr-2"></i>
            <span class="hidden sm:inline">Log out</span>
        </button>
    </div>
</header>