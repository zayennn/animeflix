<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AnimeFlix | Streaming Anime HD Gratis - Koleksi Terlengkap</title>
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
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="#" class="logo">Anime<span>Flix</span></a>
            </div>
            <div class="nav-menu">
                <ul class="nav-list">
                    <li class="nav-item active"><a href="#">Home</a></li>
                    <li class="nav-item"><a href="#">Genres</a></li>
                    <li class="nav-item"><a href="#">New Releases</a></li>
                </ul>
            </div>
            <div class="nav-right">
                <div class="search-box">
                    <input type="text" placeholder="Search anime...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                @if (Auth::check())
                    <div class="profile-container" id="profile-dropdown-trigger">
                        <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('images/profile/default.png') }}"
                            alt="Profile" class="profile-pic">
                        <span class="profile-name">{{ auth()->user()->name }}</span>
                        <div class="profile-dropdown" id="profile-dropdown">
                            <ul>
                                <li><a href="{{ route('profile.edit') }}"><i class="fas fa-user"></i> Profile</a></li>
                                <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i> Sign Out
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <button class="subscribe-btn" id="sign-in">Sign in</button>
                @endif
            </div>
            <div class="hamburger-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Hero Banner with Swiper -->
    <section class="hero-banner">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="slide-content"
                        style="background-image: url('../images/anime/One Piece Wano Kuni Arc.jpg')">
                        <div class="hero-overlay"></div>
                        <div class="hero-content">
                            <h1>One Piece: Wano Kuni Arc</h1>
                            <div class="meta-info">
                                <span class="rating"><i class="fas fa-star"></i> 9.8</span>
                                <span class="year">2023</span>
                                <span class="quality">HD</span>
                                <span class="episodes">1080 Episodes</span>
                            </div>
                            <p class="description">Luffy and his crew arrive in Wano Country, a closed-off land
                                resembling feudal Japan,
                                to take down the tyrannical shogun Orochi and free the country from Kaido's rule.</p>
                            <div class="action-buttons">
                                <button class="play-btn"><i class="fas fa-play"></i> Watch Now</button>
                                <button class="add-btn"><i class="fas fa-plus"></i> My List</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="slide-content" style="background-image: url('../images/anime/Demon Slayer.jpg')">
                        <div class="hero-overlay"></div>
                        <div class="hero-content">
                            <h1>Demon Slayer: Entertainment District Arc</h1>
                            <div class="meta-info">
                                <span class="rating"><i class="fas fa-star"></i> 9.5</span>
                                <span class="year">2022</span>
                                <span class="quality">HD</span>
                                <span class="episodes">11 Episodes</span>
                            </div>
                            <p class="description">Tanjiro and his comrades accompany the Hashira Tengen Uzui to an
                                entertainment district where undercover demon slayers have gone missing.</p>
                            <div class="action-buttons">
                                <button class="play-btn"><i class="fas fa-play"></i> Watch Now</button>
                                <button class="add-btn"><i class="fas fa-plus"></i> My List</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="slide-content" style="background-image: url('../images/anime/Jujutsu Kaisen.jpg')">
                        <div class="hero-overlay"></div>
                        <div class="hero-content">
                            <h1>Jujutsu Kaisen: Shibuya Incident</h1>
                            <div class="meta-info">
                                <span class="rating"><i class="fas fa-star"></i> 9.7</span>
                                <span class="year">2023</span>
                                <span class="quality">HD</span>
                                <span class="episodes">21 Episodes</span>
                            </div>
                            <p class="description">Yuji Itadori and his allies battle against the cursed spirits in
                                Shibuya, where a large-scale attack has been orchestrated by the villainous Geto.</p>
                            <div class="action-buttons">
                                <button class="play-btn"><i class="fas fa-play"></i> Watch Now</button>
                                <button class="add-btn"><i class="fas fa-plus"></i> My List</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination with Progress -->
            <div class="swiper-pagination"></div>

            <!-- Scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>

    <!-- Content Sections -->
    <div class="container">
        {{-- continue watching --}}
        <section class="content-section">
            <div class="section-header">
                <h2>Continue Watching</h2>
                <a href="#" class="see-all">See All</a>
            </div>
            <div class="content-row">
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/aot.jpg') }}" alt="Anime">
                        <div class="progress-bar" style="width: 65%"></div>
                        <div class="episode-info">Ep 12</div>
                    </div>
                    <div class="card-info">
                        <h3>Attack on Titan</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-eye"></i> 65%</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/demon slayer.jpg') }}" alt="Anime">
                        <div class="progress-bar" style="width: 30%"></div>
                        <div class="episode-info">Ep 5</div>
                    </div>
                    <div class="card-info">
                        <h3>Demon Slayer</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-eye"></i> 30%</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/jujutsu kaisen.jpg') }}" alt="Anime">
                        <div class="progress-bar" style="width: 80%"></div>
                        <div class="episode-info">Ep 24</div>
                    </div>
                    <div class="card-info">
                        <h3>Jujutsu Kaisen</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-eye"></i> 80%</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/boku no hero.png') }}" alt="Anime">
                        <div class="progress-bar" style="width: 45%"></div>
                        <div class="episode-info">Ep 8</div>
                    </div>
                    <div class="card-info">
                        <h3>My Hero Academia</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-eye"></i> 45%</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/chainsaw man.jpg') }}" alt="Anime">
                        <div class="progress-bar" style="width: 10%"></div>
                        <div class="episode-info">Ep 1</div>
                    </div>
                    <div class="card-info">
                        <h3>Chainsaw Man</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-eye"></i> 10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- popular anime --}}
        <section class="content-section">
            <div class="section-header">
                <h2>Popular Anime</h2>
                <a href="#" class="see-all">See All</a>
            </div>
            <div class="content-row">
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/spy x family.jpg') }}" alt="Anime">
                        <div class="card-badge">Trending</div>
                    </div>
                    <div class="card-info">
                        <h3>Spy x Family</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 9.5</span>
                            <span>24 Episodes</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/vindland saga.jpg') }}" alt="Anime">
                    </div>
                    <div class="card-info">
                        <h3>Vinland Saga</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 9.3</span>
                            <span>24 Episodes</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/blue lock.jpg') }}" alt="Anime">
                    </div>
                    <div class="card-info">
                        <h3>Blue Lock</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 8.9</span>
                            <span>24 Episodes</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/jigokuraku.jpg') }}" alt="Anime">
                    </div>
                    <div class="card-info">
                        <h3>Hell's Paradise</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 8.7</span>
                            <span>13 Episodes</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/The Eminence in Shadow.jpg') }}" alt="Anime">
                    </div>
                    <div class="card-info">
                        <h3>The Eminence in Shadow</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 8.5</span>
                            <span>20 Episodes</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- new releases --}}
        <section class="content-section">
            <div class="section-header">
                <h2>New Releases</h2>
                <a href="#" class="see-all">See All</a>
            </div>
            <div class="content-row">
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/zom 100.jpg') }}" alt="Anime">
                        <div class="card-badge">New</div>
                    </div>
                    <div class="card-info">
                        <h3>Zom 100</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 9.1</span>
                            <span>2023</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/mushoku tensei s2.jpg') }}" alt="Anime">
                        <div class="card-badge">New</div>
                    </div>
                    <div class="card-info">
                        <h3>Mushoku Tensei S2</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 9.0</span>
                            <span>2023</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/Dr Stone New World.jpg') }}" alt="Anime">
                        <div class="card-badge">New</div>
                    </div>
                    <div class="card-info">
                        <h3>Dr. Stone: New World</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 8.8</span>
                            <span>2023</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/Bleach Thousand-Year Blood War.avif') }}" alt="Anime">
                        <div class="card-badge">New</div>
                    </div>
                    <div class="card-info">
                        <h3>Bleach: Thousand-Year Blood War</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 9.4</span>
                            <span>2023</span>
                        </div>
                    </div>
                </div>
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/oshi no ko.jpg') }}" alt="Anime">
                        <div class="card-badge">New</div>
                    </div>
                    <div class="card-info">
                        <h3>Oshi no Ko</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 9.2</span>
                            <span>2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- genres --}}
        <section class="content-section">
            <h2>Browse by Genres</h2>
            <div class="genre-grid">
                <div class="genre-card" style="background-image: url('../images/anime/jigokuraku.jpg')">
                    <div class="genre-overlay"
                        style="background: linear-gradient(135deg, rgba(142, 68, 173, 0.7), rgba(155, 89, 182, 0.7))">
                    </div>
                    <div class="genre-content">
                        <h3>Action</h3>
                        <p>120 Titles</p>
                    </div>
                </div>
                <div class="genre-card" style="background-image: url('../images/anime/mushoku tensei s2.jpg')">
                    <div class="genre-overlay"
                        style="background: linear-gradient(135deg, rgba(52, 152, 219, 0.7), rgba(41, 128, 185, 0.7))">
                    </div>
                    <div class="genre-content">
                        <h3>Adventure</h3>
                        <p>85 Titles</p>
                    </div>
                </div>
                <div class="genre-card" style="background-image: url('../images/anime/spy x family.jpg')">
                    <div class="genre-overlay"
                        style="background: linear-gradient(135deg, rgba(231, 76, 60, 0.7), rgba(192, 57, 43, 0.7))">
                    </div>
                    <div class="genre-content">
                        <h3>Comedy</h3>
                        <p>150 Titles</p>
                    </div>
                </div>
                <div class="genre-card" style="background-image: url('../images/anime/oshi no ko.jpg')">
                    <div class="genre-overlay"
                        style="background: linear-gradient(135deg, rgba(26, 188, 156, 0.7), rgba(22, 160, 133, 0.7))">
                    </div>
                    <div class="genre-content">
                        <h3>Drama</h3>
                        <p>90 Titles</p>
                    </div>
                </div>
                <div class="genre-card" style="background-image: url('../images/anime/Dr Stone New World.jpg')">
                    <div class="genre-overlay"
                        style="background: linear-gradient(135deg, rgba(243, 156, 18, 0.7), rgba(230, 126, 34, 0.7))">
                    </div>
                    <div class="genre-content">
                        <h3>Fantasy</h3>
                        <p>110 Titles</p>
                    </div>
                </div>
                <div class="genre-card"
                    style="background-image: url('../images/anime/Kaoru Hana wa Rin to Saku.jpg')">
                    <div class="genre-overlay"
                        style="background: linear-gradient(135deg, rgba(46, 204, 113, 0.7), rgba(39, 174, 96, 0.7))">
                    </div>
                    <div class="genre-content">
                        <h3>Romance</h3>
                        <p>75 Titles</p>
                    </div>
                </div>
                <div class="genre-card" style="background-image: url('../images/anime/Takopii no Genzai.jpg')">
                    <div class="genre-overlay"
                        style="background: linear-gradient(135deg, rgba(156, 39, 176, 0.7), rgba(103, 58, 183, 0.7))">
                    </div>
                    <div class="genre-content">
                        <h3>Sci-Fi</h3>
                        <p>60 Titles</p>
                    </div>
                </div>
                <div class="genre-card" style="background-image: url('../images/anime/chainsaw man.jpg')">
                    <div class="genre-overlay"
                        style="background: linear-gradient(135deg, rgba(52, 73, 94, 0.7), rgba(44, 62, 80, 0.7))">
                    </div>
                    <div class="genre-content">
                        <h3>Thriller</h3>
                        <p>45 Titles</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <a href="#" class="logo">Anime<span>Flix</span></a>
                <p>Your ultimate anime streaming platform</p>
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">TV Series</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">New Releases</a></li>
                        <li><a href="#">Popular</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">DMCA</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Connect With Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-discord"></i></a>
                    </div>
                    <div class="app-download">
                        <p>Download our app</p>
                        <div class="app-buttons">
                            <a href="#"><img src="{{ asset('images/assets/google play.png') }}"
                                    alt="App Store"></a>
                            <a href="#"><img src="{{ asset('images/assets/app store.png') }}"
                                    alt="Google Play"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 AnimeFlix. All Rights Reserved.</p>
        </div>
    </footer>


    <script src="{{ asset('js/home/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        const btnSignIn = document.getElementById('sign-in')
        btnSignIn.addEventListener('click', function() {
            window.location.href = '/login'
        })
    </script>
</body>

</html>
