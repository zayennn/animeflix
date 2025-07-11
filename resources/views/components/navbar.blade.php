<nav class="navbar">
    <div class="navbar-container">
        <div class="logo-container">
            <a href="#" class="logo">Anime<span>Flix</span></a>
        </div>
        <div class="nav-menu">
            <ul class="nav-list">
                <li class="nav-item active"><a href="/">Home</a></li>
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
