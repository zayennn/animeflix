@extends('layouts.main')
@section('content')
    <!-- Hero Banner with Swiper -->
    <section class="hero-banner">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="slide-content" style="background-image: url('../images/anime/One Piece Wano Kuni Arc.jpg')">
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
                                <button class="play-btn" id="route-description"><i class="fas fa-play"></i> Watch
                                    Now</button>
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
                <div class="genre-card" style="background-image: url('../images/anime/Kaoru Hana wa Rin to Saku.jpg')">
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


    <script>
        const btnRoute = document.getElementById('route-description')
        btnRoute.addEventListener('click', function() {
            window.location.href = '/description'
        })
    </script>
@endsection
