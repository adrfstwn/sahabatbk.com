<!-- Sidebar -->
<aside class="sidebar w-64 bg-white text-gray-700 flex-shrink-0 h-full shadow-lg border-r border-gray-200 lg:block overflow-y-auto">
    <!-- Sidebar Header -->
    <div class="p-6 border-b border-gray-200">
        <div class="flex items-center space-x-3">
            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-primary to-[#68D2E8] flex items-center justify-center text-white shadow-lg">
                <i class="ri-admin-line text-xl"></i>
            </div>
            <div>
                <p class="font-semibold text-gray-800 text-lg">Admin Panel</p>
                <p class="text-sm text-gray-500">Dashboard Control</p>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav class="p-4 space-y-2">
        <div class="mb-6">
            <p class="px-3 py-2 text-xs font-semibold uppercase text-gray-500 tracking-wider">Menu Utama</p>
        </div>
        
        <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }} flex items-center space-x-3 px-4 py-3 rounded-lg transition-all group">
            <div class="w-8 h-8 flex items-center justify-center">
                <i class="ri-dashboard-3-line text-xl group-hover:scale-110 transition-transform"></i>
            </div>
            <span class="font-medium">Dashboard</span>
        </a>
        
        <a href="#" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg transition-all group">
            <div class="w-8 h-8 flex items-center justify-center">
                <i class="ri-file-list-3-line text-xl group-hover:scale-110 transition-transform"></i>
            </div>
            <span class="font-medium">Data LKPD</span>
        </a>
        
        <a href="#" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg transition-all group">
            <div class="w-8 h-8 flex items-center justify-center">
                <i class="ri-question-answer-line text-xl group-hover:scale-110 transition-transform"></i>
            </div>
            <span class="font-medium">Kelola Soal</span>
        </a>
        
        <a href="#" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg transition-all group">
            <div class="w-8 h-8 flex items-center justify-center">
                <i class="ri-group-line text-xl group-hover:scale-110 transition-transform"></i>
            </div>
            <span class="font-medium">Data Peserta</span>
        </a>
        
        <a href="#" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg transition-all group">
            <div class="w-8 h-8 flex items-center justify-center">
                <i class="ri-file-chart-line text-xl group-hover:scale-110 transition-transform"></i>
            </div>
            <span class="font-medium">Hasil Pengerjaan</span>
        </a>
        
        <!-- Settings Section -->
        <div class="pt-6 mt-6 border-t border-gray-200">
            <p class="px-3 py-2 text-xs font-semibold uppercase text-gray-500 tracking-wider mb-4">Pengaturan</p>
            
            <a href="#" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg transition-all group">
                <div class="w-8 h-8 flex items-center justify-center">
                    <i class="ri-settings-3-line text-xl group-hover:scale-110 transition-transform"></i>
                </div>
                <span class="font-medium">Pengaturan</span>
            </a>
            
            <form action="{{ route('logout') }}" method="POST" class="inline-block w-full">
                @csrf
                <button type="submit" class="sidebar-link flex items-center space-x-3 px-4 py-3 rounded-lg transition-all text-red-600 hover:bg-red-50 group w-full text-left">
                    <div class="w-8 h-8 flex items-center justify-center">
                        <i class="ri-logout-box-line text-xl group-hover:scale-110 transition-transform"></i>
                    </div>
                    <span class="font-medium">Keluar</span>
                </button>
            </form>
        </div>
    </nav>
</aside>