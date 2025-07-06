@php
    use Illuminate\Support\Facades\Auth;

    $user = Auth::user();
    $username = $user->name ?? '-';
    $userRole = $user->hasRole('student') ? 'Siswa' : 'Guest';
@endphp

<header class="fixed top-0 left-0 w-full bg-primary shadow-md z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="text-white text-2xl font-['Pacifico']">SahabatBK.com</a>

        <!-- Menu Tengah -->
        <nav class="hidden md:flex flex-1 justify-center space-x-16">
            <a href="{{ route('home') }}"
                class="font-bold text-white bg-[#03AED2] px-5 py-2 rounded-lg shadow hover:bg-[#68D2E8] transition-colors">LKPD
                1</a>
            <a href="{{ route('home') }}"
                class="font-bold text-white bg-[#03AED2] px-5 py-2 rounded-lg shadow hover:bg-[#68D2E8] transition-colors">LKPD
                2</a>
            <a href="{{ route('home') }}"
                class="font-bold text-white bg-[#03AED2] px-5 py-2 rounded-lg shadow hover:bg-[#68D2E8] transition-colors">LKPD
                3</a>
            <a href="{{ route('home') }}"
                class="font-bold text-white bg-[#03AED2] px-5 py-2 rounded-lg shadow hover:bg-[#68D2E8] transition-colors">LKPD
                4</a>
        </nav>

        <!-- User Profile & Logout Dropdown -->
        <div class="relative">
            <button id="profileDropdownBtn" type="button"
                class="flex items-center focus:outline-none focus:ring-2 focus:ring-[#03AED2]">
                <div class="w-10 h-10 rounded-full bg-[#03AED2] flex items-center justify-center text-white shadow">
                    <i class="ri-user-line text-lg"></i>
                </div>
                <div class="ml-2 text-left hidden md:block">
                    <p class="text-sm font-bold text-white leading-tight">{{ $username }}</p>
                    <p class="text-xs text-gray-200 font-semibold">{{ $userRole }}</p>
                </div>
                <!-- Ganti icon arrow dengan versi bold -->
                <svg class="ml-2 w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="3"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <!-- Dropdown Menu -->
            <div id="profileDropdownMenu"
                class="hidden absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg py-1 z-50">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100 font-semibold flex items-center">
                        <i class="ri-logout-box-line mr-2"></i> Log out
                    </button>
                </form>
            </div>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="md:hidden w-8 h-8 flex items-center justify-center text-white cursor-pointer" id="menuToggle">
            <i id="menuIcon" class="ri-menu-line ri-lg"></i>
        </div>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobileMenu"
        class="md:hidden flex flex-col items-start space-y-4 px-6 py-4 bg-primary shadow-lg z-40 hidden">
        <a href="{{ route('home') }}"
            class="font-bold text-white bg-[#03AED2] px-5 py-2 rounded-lg shadow hover:bg-[#68D2E8] transition-colors">LKPD
            1</a>
        <a href="{{ route('home') }}"
            class="font-bold text-white bg-[#03AED2] px-5 py-2 rounded-lg shadow hover:bg-[#68D2E8] transition-colors">LKPD
            2</a>
        <a href="{{ route('home') }}"
            class="font-bold text-white bg-[#03AED2] px-5 py-2 rounded-lg shadow hover:bg-[#68D2E8] transition-colors">LKPD
            3</a>
        <a href="{{ route('home') }}"
            class="font-bold text-white bg-[#03AED2] px-5 py-2 rounded-lg shadow hover:bg-[#68D2E8] transition-colors">LKPD
            4</a>
        <div class="flex items-center bg-white rounded-lg px-3 py-2 shadow mt-2 w-full">
            <div class="mr-2 w-10 h-10 rounded-full bg-[#03AED2] flex items-center justify-center text-white shadow">
                <i class="ri-user-line text-lg"></i>
            </div>
            <div class="text-right">
                <p class="text-sm font-bold text-primary leading-tight">{{ $username }}</p>
                <p class="text-xs text-gray-500 font-semibold">{{ $userRole }}</p>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST" class="w-full mt-2">
            @csrf
            <button type="submit"
                class="bg-[#FDDE55] text-gray-800 px-4 py-2 rounded-lg font-bold hover:bg-yellow-400 transition-colors whitespace-nowrap shadow-md w-full text-left">
                <i class="ri-logout-box-line mr-2"></i>
                Log out
            </button>
        </form>
    </nav>
</header>

<script>
    // Dropdown toggle
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('profileDropdownBtn');
        const menu = document.getElementById('profileDropdownMenu');
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            menu.classList.toggle('hidden');
        });
        // Hide dropdown when clicking outside
        document.addEventListener('click', function () {
            menu.classList.add('hidden');
        });
    });
</script>