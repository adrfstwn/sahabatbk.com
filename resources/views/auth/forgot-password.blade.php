<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            min-height: 100vh;
        }
        .form-input:focus {
            outline: none;
            border-color: #03AED2;
            box-shadow: 0 0 0 3px rgba(3, 174, 210, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <div class="flex-grow flex items-center justify-center py-10 px-4">
            <div class="container mx-auto max-w-4xl">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full md:w-5/12 bg-primary p-8 flex flex-col justify-center items-center text-white"
                            style="background-image: url('https://readdy.ai/api/search-image?query=forgot%20password%20illustration%2C%20students%20with%20lock%20and%20email%2C%20flat%20design&width=600&height=800&seq=forgot_bg&orientation=portrait'); background-size: cover; background-position: center;">
                        </div>
                        <div class="w-full md:w-7/12 p-8 md:p-10">
                            <div class="text-center mb-8">
                                <h1 class="text-3xl font-bold text-gray-800 mb-2">Lupa Password</h1>
                                <p class="text-gray-600">Masukkan email untuk reset password Anda</p>
                            </div>
                            @if (session('status'))
                                <div class="mb-4 text-green-600">{{ session('status') }}</div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="mb-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                    <input type="email" id="email" name="email"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded text-gray-700 text-sm"
                                        placeholder="Masukkan email Anda" required>
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-6">
                                    <button type="submit"
                                        class="w-full bg-accent text-primary font-semibold py-3 !rounded-button hover:bg-opacity-90 transition-all shadow-md whitespace-nowrap">
                                        Kirim Link Reset
                                    </button>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('login') }}" class="text-primary font-semibold hover:underline">Kembali ke Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>