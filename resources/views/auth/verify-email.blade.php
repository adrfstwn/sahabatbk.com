<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            min-height: 100vh;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <div class="flex-grow flex items-center justify-center py-6 px-4">
            <div class="container mx-auto max-w-4xl">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row min-h-[500px]">
                        <!-- Left Side - Illustration -->
                        <div class="w-full md:w-5/12 bg-primary p-8 flex flex-col justify-center items-center text-white"
                            style="background-image: url('https://readdy.ai/api/search-image?query=educational%2520illustration%2520with%2520students%2520learning%2520online%252C%2520using%2520digital%2520devices%252C%2520surrounded%2520by%2520educational%2520symbols%2520like%2520books%252C%2520formulas%252C%2520and%2520science%2520icons%252C%2520in%2520blue%2520and%2520yellow%2520color%2520scheme%252C%2520modern%2520flat%2520design%252C%2520clean%2520composition&width=600&height=800&seq=register_bg&orientation=portrait'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                        </div>
                        <!-- Right Side - Content -->
                        <div class="w-full md:w-7/12 p-8 md:p-10 flex flex-col justify-center">
                            <div class="text-center mb-8">
                                <h1 class="text-3xl font-bold text-gray-800 mb-2">Akun anda belum aktif!, Verifikasi
                                    email anda terlebih dahulu</h1>
                                <p class="text-gray-600 mb-4">Sebelum melanjutkan, silakan cek email Anda untuk link
                                    verifikasi.
                                </p>
                                @if (session('message'))
                                    <div
                                        class="mb-4 text-sm font-medium {{ str_contains(session('message'), 'kedaluwarsa') ? 'text-red-600' : 'text-green-600' }}">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full bg-accent text-primary font-semibold py-3 !rounded-button hover:bg-opacity-90 transition-all shadow-md whitespace-nowrap">Kirim
                                        Ulang Email Verifikasi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>