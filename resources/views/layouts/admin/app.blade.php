<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SahabatBK.com')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }

        .gradient-bg {
            background: linear-gradient(135deg, rgba(3, 174, 210, 0.1) 0%, rgba(104, 210, 232, 0.1) 100%);
        }

        .stats-card {
            background: white;
            border: 1px solid rgba(3, 174, 210, 0.1);
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(3, 174, 210, 0.1);
        }

        .sidebar-link {
            transition: all 0.3s ease;
            position: relative;
        }

        .sidebar-link.active {
            background: linear-gradient(135deg, rgba(3, 174, 210, 0.1) 0%, rgba(104, 210, 232, 0.1) 100%);
            color: #03AED2;
            font-weight: 600;
            border-left: 4px solid #03AED2;
        }

        .sidebar-link:hover:not(.active) {
            background-color: rgba(3, 174, 210, 0.05);
            transform: translateX(2px);
            color: #03AED2;
        }

        .table-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 1px solid rgba(3, 174, 210, 0.1);
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .mobile-menu-btn {
            display: none;
        }

        /* Custom scrollbar */
        .sidebar::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: #03AED2;
            border-radius: 2px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: #0299B8;
        }

        @media (max-width: 1024px) {
            .mobile-menu-btn {
                display: block;
            }
            
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
                position: fixed;
                z-index: 50;
                height: 100vh;
                top: 0;
                left: 0;
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                z-index: 40;
            }
            
            .overlay.show {
                display: block;
            }
        }
    </style>
    @yield('styles')
    @stack('styles')
</head>

<body class="bg-gray-50 text-gray-900">
    <!-- Mobile Menu Overlay -->
    <div id="overlay" class="overlay"></div>
    
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        @include('layouts.admin.header')
        
        <div class="flex flex-1">
            <!-- Sidebar -->
            @include('layouts.admin.sidebar')

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto bg-gray-50">
                @yield('content')
            </main>
        </div>
    </div>
    
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.getElementById('overlay');
            
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        }
        
        // Close menu when overlay is clicked
        document.getElementById('overlay').addEventListener('click', function() {
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.getElementById('overlay');
            
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        });
    </script>
    
    @stack('scripts')
</body>

</html>