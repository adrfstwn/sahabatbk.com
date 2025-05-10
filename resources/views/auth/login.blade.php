<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#03AED2',
                        secondary: '#68D2E8',
                        accent: '#FDDE55',
                        light: '#FEEFAD'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

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


        .check-icon {
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .password-toggle {
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-accent to-secondary">
    <div class="min-h-screen flex flex-col">
        <!-- Main Content -->
        <div class="flex-grow flex items-center justify-center py-10 px-4">
            <div class="container mx-auto max-w-4xl">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <!-- Left Side - Illustration -->
                        <div class="w-full md:w-5/12 bg-primary p-8 flex flex-col justify-center items-center text-white"
                            style="background-image: url('https://readdy.ai/api/search-image?query=educational%2520illustration%2520with%2520students%2520learning%2520online%252C%2520using%2520digital%2520devices%252C%2520surrounded%2520by%2520educational%2520symbols%2520like%2520books%252C%2520formulas%252C%2520and%2520science%2520icons%252C%2520in%2520blue%2520and%2520yellow%2520color%2520scheme%252C%2520modern%2520flat%2520design%252C%2520clean%2520composition&width=600&height=800&seq=register_bg&orientation=portrait'); background-size: cover; background-position: center;">
                        </div>
                        <!-- Right Side - Form -->
                        <div class="w-full md:w-7/12 p-8 md:p-10">
                            <div class="text-center mb-8">
                                <h1 class="text-3xl font-bold text-gray-800 mb-2">Login to your Account!</h1>
                                <p class="text-gray-600">lets get started...</p>
                            </div>
                            <form method="POST" action="{{ route('auth') }}">
                                @csrf

                                <!-- Email -->
                                <div class="mb-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email
                                        Address</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                        <input type="email" id="email" name="email"
                                            class="form-input w-full pl-10 pr-4 py-3 border border-gray-300 rounded text-gray-700 text-sm"
                                            placeholder="Enter your email address" required>
                                    </div>
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="mb-6">
                                    <label for="password"
                                        class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                                            <i class="ri-lock-line"></i>
                                        </div>
                                        <input type="password" id="password" name="password"
                                            class="form-input w-full pl-10 pr-12 py-3 border border-gray-300 rounded text-gray-700 text-sm"
                                            placeholder="Create a password" required>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 password-toggle">
                                            <i class="ri-eye-off-line text-gray-400" id="password-toggle"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Submit Button -->
                                <div class="mb-6">
                                    <button type="submit"
                                        class="w-full bg-accent text-primary font-semibold py-3 !rounded-button hover:bg-opacity-90 transition-all shadow-md whitespace-nowrap">Sign
                                        In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Password toggle visibility
            const passwordField = document.getElementById('password');
            const passwordToggle = document.getElementById('password-toggle');
            passwordToggle.addEventListener('click', function () {
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