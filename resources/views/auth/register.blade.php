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
        <div class="flex-grow flex items-center justify-center py-6 px-4">
            <div class="container mx-auto max-w-4xl">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <!-- Left Side - Illustration -->
                        <div class="w-full md:w-5/12 bg-primary p-8 flex flex-col justify-center items-center text-white"
                            style="background-image: url('https://readdy.ai/api/search-image?query=educational%2520illustration%2520with%2520students%2520learning%2520online%252C%2520using%2520digital%2520devices%252C%2520surrounded%2520by%2520educational%2520symbols%2520like%2520books%252C%2520formulas%252C%2520and%2520science%2520icons%252C%2520in%2520blue%2520and%2520yellow%2520color%2520scheme%252C%2520modern%2520flat%2520design%252C%2520clean%2520composition&width=600&height=800&seq=register_bg&orientation=portrait'); background-size: cover; background-position: center;">
                        </div>
                        <!-- Right Side - Form -->
                        <div class="w-full md:w-7/12 p-6 md:p-8">
                            <div class="text-center mb-6">
                                <h1 class="text-2xl font-bold text-gray-800 mb-1">Buat Akun Baru</h1>
                                <p class="text-gray-600 text-sm">Isi data di bawah untuk mendaftar</p>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Name -->
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama
                                        Lengkap</label>
                                    <input type="text" id="name" name="name"
                                        class="form-input w-full px-4 py-2.5 border border-gray-300 rounded text-gray-700 text-sm"
                                        placeholder="Masukkan nama lengkap" required value="{{ old('name') }}">
                                    @error('name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Class -->
                                <div class="mb-4">
                                    <label for="class"
                                        class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
                                    <select id="class" name="class"
                                        class="form-input w-full px-4 py-2.5 border border-gray-300 rounded text-gray-700 text-sm"
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
                                <div class="mb-4">
                                    <label for="email"
                                        class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input type="email" id="email" name="email"
                                        class="form-input w-full px-4 py-2.5 border border-gray-300 rounded text-gray-700 text-sm"
                                        placeholder="Masukkan email" required value="{{ old('email') }}">
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="mb-4">
                                    <label for="password"
                                        class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                                    <div class="relative">
                                        <input type="password" id="password" name="password"
                                            class="form-input w-full px-4 py-2.5 border border-gray-300 rounded text-gray-700 text-sm pr-10"
                                            placeholder="Buat password" required>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 password-toggle" id="password-toggle-btn">
                                            <i class="ri-eye-off-line text-gray-400" id="password-toggle"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Password Confirmation -->
                                <div class="mb-4">
                                    <label for="password_confirmation"
                                        class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                                    <div class="relative">
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            class="form-input w-full px-4 py-2.5 border border-gray-300 rounded text-gray-700 text-sm pr-10"
                                            placeholder="Ulangi password" required>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 password-toggle" id="password-confirmation-toggle-btn">
                                            <i class="ri-eye-off-line text-gray-400" id="password-confirmation-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- Submit Button -->
                                <div class="mb-4">
                                    <button type="submit"
                                        class="w-full bg-accent text-primary font-semibold py-2.5 !rounded-button hover:bg-opacity-90 transition-all shadow-md whitespace-nowrap">
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
            const passwordConfirmationField = document.getElementById('password_confirmation');
            const passwordConfirmationToggle = document.getElementById('password-confirmation-toggle');
            
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

            passwordConfirmationToggle.addEventListener('click', function() {
                if (passwordConfirmationField.type === 'password') {
                    passwordConfirmationField.type = 'text';
                    passwordConfirmationToggle.classList.remove('ri-eye-off-line');
                    passwordConfirmationToggle.classList.add('ri-eye-line');
                } else {
                    passwordConfirmationField.type = 'password';
                    passwordConfirmationToggle.classList.remove('ri-eye-line');
                    passwordConfirmationToggle.classList.add('ri-eye-off-line');
                }
            });
        });
    </script>
</body>

</html>
