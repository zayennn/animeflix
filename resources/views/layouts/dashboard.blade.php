<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeFlix | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800" style="display: none">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 35 -15"
                    result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop" />
            </filter>
        </defs>
    </svg>

    <div class="dashboard-container">
        @include('components.dashboard.aside')

        <main class="main-content">
            @include('components.dashboard.navbar')

            <div class="content-wrapper">
                @yield('content')
            </div>
        </main>
    </div>

    <div id="cursor" class="Cursor"></div>

    <script src="{{ asset('js/dashboard/script.js') }}"></script>
    <script src="{{ asset('js/dashboard/cursor.js') }}"></script>
</body>

</html>