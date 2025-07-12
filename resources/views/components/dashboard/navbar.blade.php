<header class="top-nav">
    <div class="hamburger-menu">
        <i class="fas fa-bars"></i>
    </div>

    <div class="search-box">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search...">
    </div>

    <div class="top-nav-right">
        <div class="quick-actions">
            <div class="quick-btn">
                <i class="fas fa-plus"></i> Quick Add
                <div class="quick-add-dropdown">
                    @if (Auth::user()->role_id == 3)
                        <a href="#"><i class="fas fa-user-plus"></i> Add Staff</a>
                    @else
                        <a href="#"><i class="fas fa-film"></i> Add Anime</a>
                        <a href="#"><i class="fas fa-tags"></i> Add Genre</a>
                        <a href="#"><i class="fas fa-calendar-plus"></i> Add Schedule</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="notifications">
            <i class="fas fa-bell"></i>
            <span class="badge">5</span>
        </div>
    </div>
</header>
