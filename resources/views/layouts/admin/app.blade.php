<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SahabatBK.com')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
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
            background: linear-gradient(135deg, rgba(3, 174, 210, 0.1) 0%, rgba(104, 210, 232, 0.05) 100%);
            backdrop-filter: blur(10px);
            transition: transform 0.2s;
        }

        .stats-card:hover {
            transform: translateY(-2px);
        }

        .sidebar-link.active {
            background-color: rgba(3, 174, 210, 0.1);
            color: #03AED2;
            font-weight: 600;
        }

        .sidebar-link:hover:not(.active) {
            background-color: rgba(3, 174, 210, 0.05);
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    @yield('styles')
    @stack('styles')
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('layouts.admin.sidebar')

        <!-- Konten utama -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header jika ada -->
            @include('layouts.admin.header')

            <!-- Konten page -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>
    @stack('scripts')
</body>

</html>