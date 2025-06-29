<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SahabatBK.com</title>
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

        .form-input:focus {
            outline: none;
            border-color: #03AED2;
            box-shadow: 0 0 0 3px rgba(3, 174, 210, 0.1);
        }

        .password-toggle {
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <div class="flex-grow flex items-center justify-center py-10 px-4">
            <div class="container mx-auto max-w-4xl">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <!-- Left Side - Illustration -->
                        <div class="w-full md:w-5/12 bg-primary p-8 flex flex-col justify-center items-center text-white"
                            style="background-image: url('https://readdy.ai/api/search-image?query=happy%20students%20registering%20for%20school%20online%2C%20flat%20illustration&width=600&height=800&seq=register_bg&orientation=portrait'); background-size: cover; background-position: center;">
                        </div>
                        <!-- Right Side - Form -->
                        <div class="w-full md:w-7/12 p-8 md:p-10">
                            <div class="text-center mb-8">
                                <h1 class="text-3xl font-bold text-gray-800 mb-2">Buat Akun Baru</h1>
                                <p class="text-gray-600">Isi data di bawah untuk mendaftar</p>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Name -->
                                <div class="mb-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama
                                        Lengkap</label>
                                    <input type="text" id="name" name="name"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded text-gray-700 text-sm"
                                        placeholder="Masukkan nama lengkap" required value="{{ old('name') }}">
                                    @error('name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Class -->
                                <div class="mb-6">
                                    <label for="class"
                                        class="block text-sm font-medium text-gray-700 mb-2">Kelas</label>
                                    <select id="class" name="class"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded text-gray-700 text-sm"
                                        required>
                                        <option value="" disabled {{ old('class') ? '' : 'selected' }}>Pilih Kelas
                                        </option>
                                        <option value="7" {{ old('class') == '7' ? 'selected' : '' }}>7</option>
                                        <option value="8" {{ old('class') == '8' ? 'selected' : '' }}>8</option>
                                        <option value="9" {{ old('class') == '9' ? 'selected' : '' }}>9</option>
                                    </select>
                                    @error('class')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Email -->
                                <div class="mb-6">
                                    <label for="email"
                                        class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                    <input type="email" id="email" name="email"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded text-gray-700 text-sm"
                                        placeholder="Masukkan email" required value="{{ old('email') }}">
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="mb-6">
                                    <label for="password"
                                        class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                                    <div class="relative">
                                        <input type="password" id="password" name="password"
                                            class="form-input w-full px-4 py-3 border border-gray-300 rounded text-gray-700 text-sm pr-12"
                                            placeholder="Buat password" required>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 password-toggle">
                                            <i class="ri-eye-off-line text-gray-400" id="password-toggle"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Password Confirmation -->
                                <div class="mb-6">
                                    <label for="password_confirmation"
                                        class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded text-gray-700 text-sm"
                                        placeholder="Ulangi password" required>
                                </div>
                                <!-- Submit Button -->
                                <div class="mb-6">
                                    <button type="submit"
                                        class="w-full bg-accent text-primary font-semibold py-3 !rounded-button hover:bg-opacity-90 transition-all shadow-md whitespace-nowrap">
                                        Daftar
                                    </button>
                                </div>
                                <div class="text-center">
                                    <span class="text-gray-600 text-sm">Sudah punya akun?</span>
                                    <a href="{{ route('login') }}"
                                        class="inline-block ml-2 text-primary font-semibold hover:underline">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password toggle visibility
            const passwordField = document.getElementById('password');
            const passwordToggle = document.getElementById('password-toggle');
            passwordToggle.addEventListener('click', function() {
                if (passwordField.type === 'password') {
                    passwordField.type = 'text';
                    passwordToggle.classList.remove('ri-eye-off-line');
                    passwordToggle.classList.add('ri-eye-line');
                } else {
                    passwordField.type = 'password';
                    passwordToggle.classList.remove('ri-eye-line');
                    passwordToggle.classList.add('ri-eye-off-line');
                }
            });
        });
    </script>
</body>

</html>
