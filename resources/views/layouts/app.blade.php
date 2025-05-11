<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SahabatBK.com')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            background-color: #FEEFAD;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: white;
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .card-hover {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(3, 174, 210, 0.15);
        }

        .quick-access-btn {
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .quick-access-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(3, 174, 210, 0.2);
        }

        input:focus {
            outline: none;
        }

        .custom-checkbox {
            display: none;
        }

        .checkbox-label {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
        }

        .checkbox-label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
            border: 2px solid #03AED2;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .custom-checkbox:checked+.checkbox-label:before {
            background-color: #03AED2;
        }

        .custom-checkbox:checked+.checkbox-label:after {
            content: '';
            position: absolute;
            left: 7px;
            top: 3px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
    </style>

    @yield('styles')
    @stack('styles')
</head>

<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    @yield('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile menu toggle
            const menuButton = document.querySelector('.ri-menu-line');
            if (menuButton) {
                menuButton.addEventListener('click', function () {
                    // Mobile menu functionality would go here
                    alert('Mobile menu clicked');
                });
            }
            // Quick access buttons
            const quickAccessButtons = document.querySelectorAll('.quick-access-btn');
            quickAccessButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const subject = this.querySelector('h3').textContent;
                    alert(`You selected: ${subject}`);
                });
            });
        });
    </script>
</body>

</html>