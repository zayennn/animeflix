<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AnimeFlix | {{ $title }}</title>
    <meta name="description"
        content="Nonton anime subtitle Indonesia & Inggris kualitas HD. Ribuan judul anime terbaru dan klasik tersedia dengan update episode tercepat. Gratis tanpa iklan mengganggu.">
    <meta name="keywords"
        content="anime, streaming anime, nonton anime, anime sub indo, anime terbaru, anime HD, anime gratis, download anime">
    <meta name="author" content="Elang Atha Zahran">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook (Social Media) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://animeflix.example.com/">
    <meta property="og:title" content="AnimeFlix | Streaming Anime HD Gratis - Koleksi Terlengkap">
    <meta property="og:description"
        content="Nonton anime subtitle Indonesia & Inggris kualitas HD. Ribuan judul anime terbaru dan klasik tersedia dengan update episode tercepat.">
    <meta property="og:image" content="https://animeflix.example.com/images/social-preview.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="AnimeFlix">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://animeflix.example.com/">
    <meta property="twitter:title" content="AnimeFlix | Streaming Anime HD Gratis - Koleksi Terlengkap">
    <meta property="twitter:description"
        content="Nonton anime subtitle Indonesia & Inggris kualitas HD. Ribuan judul anime terbaru dan klasik tersedia dengan update episode tercepat.">
    <meta property="twitter:image" content="https://animeflix.example.com/images/social-preview.jpg">

    <!-- Favicon & App Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#9c27b0">
    <meta name="msapplication-TileColor" content="#0f0f1a">
    <meta name="theme-color" content="#0f0f1a">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://animeflix.example.com/">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Noto+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Preload Critical Resources -->
    <link rel="preload" href="styles.css" as="style">
    <link rel="preload" href="script.js" as="script">
    <link rel="preload" href="images/hero-banner.jpg" as="image">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    {{-- web icon --}}
    <link rel="web icon" type="icon" href="{{ asset('images/assets/animeflix-icon.svg') }}">

    <!-- Structured Data / Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "AnimeFlix",
        "url": "https://animeflix.example.com",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://animeflix.example.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        },
        "description": "Platform streaming anime terlengkap dengan kualitas HD dan update episode tercepat",
        "publisher": {
            "@type": "Organization",
            "name": "AnimeFlix",
            "logo": {
                "@type": "ImageObject",
                "url": "https://animeflix.example.com/images/logo.png"
            }
        }
    }
    </script>
</head>

<body>
    <!-- Navigation Bar -->
    @include('components.navbar')

    {{-- main content --}}
    @yield('content')

    <!-- Footer -->
    @include('components.footer')

    {{-- costume cursor --}}
    @include('components.cursor')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/paroller.js@1.4.6/dist/jquery.paroller.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Paroller.js
            $('.jumbotron').paroller();

            // Rest of your existing JavaScript code...
        });
    </script>
    <script src="{{ asset('js/home/script.js') }}"></script>
    <script src="{{ asset('js/home/cursor.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        const btnSignIn = document.getElementById('sign-in')
        btnSignIn.addEventListener('click', function() {
            window.location.href = '/login'
        })
    </script>
</body>

</html>
