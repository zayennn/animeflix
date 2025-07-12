<aside class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="logo">Anime<span>Flix</span></a>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-section">
            <h4>Main</h4>
            <ul>
                <li class="active">
                    <a href="#">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#">
                        <i class="fas fa-chart-line"></i>
                        <span>Analytics</span>
                    </a>
                </li> --}}
            </ul>
        </div>

        @if (Auth::user()->role_id == 2)
            <div class="nav-section">
                <h4>Content Management</h4>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fas fa-film"></i>
                            <span>Anime List</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-plus-circle"></i>
                            <span>Add New Anime</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-tags"></i>
                            <span>Genres</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Schedule</span>
                        </a>
                    </li>
                </ul>
            </div>
        @else
            <div class="nav-section">
                <h4>User Management</h4>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fas fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-user-shield"></i>
                            <span>Staff</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-comments"></i>
                            <span>Comments</span>
                        </a>
                    </li>
                </ul>
            </div>
        @endif

        <div class="nav-section">
            <h4>System</h4>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-server"></i>
                        <span>Server Status</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-history"></i>
                        <span>Activity Log</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="sidebar-footer">
        <div class="user-profile">
            <img src="{{ asset('images/profile/capibara gamer.jpeg') }}" alt="Profile">
            <div class="user-info">
                <h4>{{ Auth::user()->username }}</h4>
                <p>
                    @if (Auth::user()->role_id == 3)
                        Admin
                    @elseif (Auth::user()->role_id == 2)
                        Petugas
                    @endif
                </p>
            </div>
        </div>
        <form method="POST" action="{{ route('logout') }}" id="logout-form">
            @csrf
            <a href="#" class="logout-btn"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </form>
    </div>
</aside>
