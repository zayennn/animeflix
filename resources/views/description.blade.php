@extends('layouts.main')
@section('content')
    <!-- Parallax Background -->
    <div class="jumbotron"
        style="background: url('{{ asset('images/anime/One Piece Wano Kuni Arc.jpg') }}') no-repeat center; background-size: cover;"
        data-paroller-factor="0.5" data-paroller-factor-xs="0.2">
        <div class="parallax-overlay"></div>
    </div>

    <!-- Anime Detail Section -->
    <div class="anime-detail-container">
        <div class="anime-poster">
            <img src="{{ asset('images/anime/one piece.jpeg') }}" alt="One Piece Poster">
            <button class="play-btn"><i class="fas fa-play"></i> Watch Now</button>
        </div>
        <div class="anime-info">
            <h1>One Piece: Wano Kuni Arc</h1>
            <div class="meta-section">
                <div class="meta-rating">
                    <span class="rating"><i class="fas fa-star"></i> 9.8</span>
                    <span class="votes"><i class="fas fa-users"></i> 1.2M votes</span>
                </div>
                <div class="meta-tags">
                    <span class="quality">HD</span>
                    <span class="age-rating">16+</span>
                </div>
            </div>
            <div class="detail-grid">
                <div class="detail-item">
                    <span class="detail-label">Producer:</span>
                    <span class="detail-value">Toei Animation</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Type:</span>
                    <span class="detail-value">TV Series</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Status:</span>
                    <span class="detail-value">Ongoing</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Episodes:</span>
                    <span class="detail-value">1080+</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Duration:</span>
                    <span class="detail-value">24 min/ep</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Released:</span>
                    <span class="detail-value">Oct 20, 1999</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Studio:</span>
                    <span class="detail-value">Toei Animation</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Genre:</span>
                    <span class="detail-value">
                        <a href="#">Action</a>,
                        <a href="#">Adventure</a>,
                        <a href="#">Comedy</a>,
                        <a href="#">Fantasy</a>
                    </span>
                </div>
            </div>
            <div class="action-buttons">
                <button class="add-btn"><i class="fas fa-plus"></i> Add to List</button>
                <button class="like-btn"><i class="fas fa-thumbs-up"></i> Like</button>
                <button class="share-btn"><i class="fas fa-share-alt"></i> Share</button>
            </div>
        </div>
    </div>

    <!-- Synopsis Section -->
    <section class="synopsis-section">
        <div class="container">
            <h2>Synopsis</h2>
            <div class="synopsis-content">
                <p>One Piece follows the adventures of Monkey D. Luffy, a young man whose body gained the properties of
                    rubber after unintentionally eating a Devil Fruit. With his diverse crew of pirates, named the Straw
                    Hat Pirates, Luffy explores the Grand Line in search of the world's ultimate treasure known as "One
                    Piece" in order to become the next Pirate King.</p>
                <p>In the Wano Country arc, Luffy and his crew arrive in the isolated land of Wano, which is modeled
                    after feudal Japan. The country is under the tyrannical rule of the shogun Kurozumi Orochi and the
                    powerful Emperor Kaido of the Beasts Pirates. Luffy allies with the samurai of Wano and other
                    powerful figures to liberate the country from oppression and take down Kaido.</p>
                <p>The arc features epic battles, emotional backstories, and the revelation of many secrets about the
                    world of One Piece, including the true nature of the ancient weapons and the Void Century.</p>
            </div>
        </div>
    </section>

    <!-- Episodes Section -->
    <section class="episodes-section">
        <div class="container">
            <div class="section-header">
                <h2>Episodes</h2>
                <div class="episode-filter">
                    <select>
                        <option>All Episodes</option>
                        <option>Season 1</option>
                        <option>Season 2</option>
                        <option>Wano Arc</option>
                    </select>
                    <select>
                        <option>Sort by: Latest</option>
                        <option>Sort by: Oldest</option>
                    </select>
                </div>
            </div>

            <div class="episodes-list">
                <!-- Episode List -->
                <div class="episode-item">
                    <a href="#" class="episode-link">One Piece Wano Kuni Arc Episode 1080</a>
                    <span class="episode-date">May 28, 2023</span>
                </div>

                <div class="episode-item">
                    <a href="#" class="episode-link">One Piece Wano Kuni Arc Episode 1079</a>
                    <span class="episode-date">May 21, 2023</span>
                </div>

                <div class="episode-item">
                    <a href="#" class="episode-link">One Piece Wano Kuni Arc Episode 1078</a>
                    <span class="episode-date">May 14, 2023</span>
                </div>

                <!-- More episodes would go here -->
            </div>

            <button class="load-more">Load More Episodes</button>
        </div>
    </section>

    <!-- Recommendations Section -->
    <section class="recommendations-section">
        <div class="container">
            <div class="section-header">
                <h2>You Might Also Like</h2>
                <a href="#" class="see-all">See All</a>
            </div>
            <div class="content-row">
                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/demon slayer.jpg') }}" alt="Anime">
                        <div class="card-badge">Trending</div>
                    </div>
                    <div class="card-info">
                        <h3>Demon Slayer</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 9.5</span>
                            <span>55 Episodes</span>
                        </div>
                    </div>
                </div>

                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/aot.jpg') }}" alt="Anime">
                    </div>
                    <div class="card-info">
                        <h3>Attack on Titan</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 9.3</span>
                            <span>89 Episodes</span>
                        </div>
                    </div>
                </div>

                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/jujutsu kaisen.jpg') }}" alt="Anime">
                    </div>
                    <div class="card-info">
                        <h3>Jujutsu Kaisen</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 8.9</span>
                            <span>24 Episodes</span>
                        </div>
                    </div>
                </div>

                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/naruto shippuden.jpg') }}" alt="Anime">
                    </div>
                    <div class="card-info">
                        <h3>Naruto: Shippuden</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 8.7</span>
                            <span>500 Episodes</span>
                        </div>
                    </div>
                </div>

                <div class="content-card">
                    <div class="card-img">
                        <img src="{{ asset('images/anime/Bleach Thousand-Year Blood War.avif') }}" alt="Anime">
                    </div>
                    <div class="card-info">
                        <h3>Bleach: TYBW</h3>
                        <div class="card-meta">
                            <span><i class="fas fa-star"></i> 9.4</span>
                            <span>13 Episodes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comments Section -->
    <section class="comments-section">
        <div class="container">
            <div class="section-header">
                <h2>Comments</h2>
                <span class="comment-count">24 Comments</span>
            </div>

            <div class="comment-form">
                <div class="user-avatar">
                    <img src="{{ asset('images/profile/capibara gamer.jpeg') }}" alt="User Avatar">
                </div>
                <form>
                    <textarea placeholder="Add a comment..." rows="3"></textarea>
                    <div class="form-actions">
                        <button type="submit" class="submit-comment">Post Comment</button>
                    </div>
                </form>
            </div>

            <div class="comments-list">
                <div class="comment">
                    <div class="user-avatar">
                        <img src="{{ asset('images/profile/guess.png') }}" alt="User Avatar">
                    </div>
                    <div class="comment-content">
                        <div class="comment-header">
                            <span class="username">AnimeFan123</span>
                            <span class="comment-date">2 days ago</span>
                        </div>
                        <p class="comment-text">This episode was absolutely insane! The animation quality was through the
                            roof. Luffy's Gear 5 transformation exceeded all my expectations.</p>
                        <div class="comment-actions">
                            <button class="like-comment"><i class="fas fa-thumbs-up"></i> 124</button>
                            <button class="reply-comment"><i class="fas fa-reply"></i> Reply</button>
                        </div>

                        <div class="replies">
                            <div class="comment">
                                <div class="user-avatar">
                                    <img src="{{ asset('images/profile/guess.png') }}" alt="User Avatar">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-header">
                                        <span class="username">OnePieceLover</span>
                                        <span class="comment-date">1 day ago</span>
                                    </div>
                                    <p class="comment-text">I agree! The way they adapted this chapter from the manga was
                                        perfect. Toei really outdid themselves.</p>
                                    <div class="comment-actions">
                                        <button class="like-comment"><i class="fas fa-thumbs-up"></i> 42</button>
                                        <button class="reply-comment"><i class="fas fa-reply"></i> Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="comment">
                    <div class="user-avatar">
                        <img src="{{ asset('images/profile/guess.png') }}" alt="User Avatar">
                    </div>
                    <div class="comment-content">
                        <div class="comment-header">
                            <span class="username">ZoroFan99</span>
                            <span class="comment-date">3 days ago</span>
                        </div>
                        <p class="comment-text">While Luffy's fight was amazing, I think Zoro's battle with King was the
                            real highlight of this arc. The sword choreography was breathtaking!</p>
                        <div class="comment-actions">
                            <button class="like-comment"><i class="fas fa-thumbs-up"></i> 89</button>
                            <button class="reply-comment"><i class="fas fa-reply"></i> Reply</button>
                        </div>
                    </div>
                </div>
            </div>

            <button class="load-more-comments">Load More Comments</button>
        </div>
    </section>

    <script>
        // Initialize parallax effect
        document.addEventListener('DOMContentLoaded', function() {
            const image = document.querySelector('.parallax-bg');
            new simpleParallax(image, {
                scale: 1.2,
                delay: 0.6,
                transition: 'cubic-bezier(0,0,0,1)'
            });
        });
    </script>
@endsection
