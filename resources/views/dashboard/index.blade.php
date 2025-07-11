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
    <!-- Custom Cursor SVG -->
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

    <!-- Dashboard Container -->
    <div class="dashboard-container">
        <!-- Sidebar -->
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
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-line"></i>
                                <span>Analytics</span>
                            </a>
                        </li>
                    </ul>
                </div>

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
                        <h4>Admin User</h4>
                        <p>Super Administrator</p>
                    </div>
                </div>
                <a href="#" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Navigation -->
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
                                <a href="#"><i class="fas fa-film"></i> Add Anime</a>
                                <a href="#"><i class="fas fa-tags"></i> Add Genre</a>
                                <a href="#"><i class="fas fa-user-plus"></i> Add Staff</a>
                                <a href="#"><i class="fas fa-calendar-plus"></i> Add Schedule</a>
                            </div>
                        </div>
                    </div>
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="badge">5</span>
                    </div>
                </div>
            </header>

            <!-- Content Sections -->
            <div class="content-wrapper">
                <!-- Welcome Section -->
                <section class="welcome-section">
                    <h1>Welcome back, <span>Admin</span></h1>
                    <p>Here's what's happening with your platform today</p>
                </section>

                <!-- Stats Cards -->
                <section class="stats-section">
                    <div class="stats-grid">
                        <!-- Stat Card 1 -->
                        <div class="stat-card">
                            <div class="stat-icon" style="background: rgba(156, 39, 176, 0.1); color: #9c27b0;">
                                <i class="fas fa-film"></i>
                            </div>
                            <div class="stat-info">
                                <h3>Total Anime</h3>
                                <p>1,248</p>
                                <span class="stat-change up">+12 this week</span>
                            </div>
                        </div>

                        <!-- Stat Card 2 -->
                        <div class="stat-card">
                            <div class="stat-icon" style="background: rgba(33, 150, 243, 0.1); color: #2196f3;">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-info">
                                <h3>Active Users</h3>
                                <p>24,593</p>
                                <span class="stat-change up">+324 today</span>
                            </div>
                        </div>

                        <!-- Stat Card 3 -->
                        <div class="stat-card">
                            <div class="stat-icon" style="background: rgba(76, 175, 80, 0.1); color: #4caf50;">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="stat-info">
                                <h3>Total Views</h3>
                                <p>3.2M</p>
                                <span class="stat-change down">-5% this week</span>
                            </div>
                        </div>

                        <!-- Stat Card 4 -->
                        <div class="stat-card">
                            <div class="stat-icon" style="background: rgba(244, 67, 54, 0.1); color: #f44336;">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="stat-info">
                                <h3>Reports</h3>
                                <p>24</p>
                                <span class="stat-change">Need attention</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Recent Activity -->
                <section class="content-section">
                    <div class="section-header">
                        <h2>Recent Activity</h2>
                        <a href="#" class="see-all">View All</a>
                    </div>
                    <div class="activity-list">
                        <!-- Activity Item 1 -->
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Staff01</strong> added new anime <strong>Jujutsu Kaisen Season 2</strong></p>
                                <span class="activity-time">2 hours ago</span>
                            </div>
                            <button class="activity-action">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>

                        <!-- Activity Item 2 -->
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-user-edit"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Admin</strong> updated user <strong>AnimeFan123</strong> permissions</p>
                                <span class="activity-time">5 hours ago</span>
                            </div>
                            <button class="activity-action">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>

                        <!-- Activity Item 3 -->
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-comment-slash"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Moderator02</strong> deleted inappropriate comment</p>
                                <span class="activity-time">Yesterday</span>
                            </div>
                            <button class="activity-action">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>

                        <!-- Activity Item 4 -->
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-tags"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Staff03</strong> added new genre <strong>Isekai</strong></p>
                                <span class="activity-time">2 days ago</span>
                            </div>
                            <button class="activity-action">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </section>

                <!-- Quick Actions -->
                <section class="content-section">
                    <div class="section-header">
                        <h2>Quick Actions</h2>
                    </div>
                    <div class="quick-actions-grid">
                        <a href="#" class="quick-action-card">
                            <div class="action-icon">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                            <h3>Add New Anime</h3>
                            <p>Upload new anime to the platform</p>
                        </a>

                        <a href="#" class="quick-action-card">
                            <div class="action-icon">
                                <i class="fas fa-edit"></i>
                            </div>
                            <h3>Edit Existing</h3>
                            <p>Modify anime information</p>
                        </a>

                        <a href="#" class="quick-action-card">
                            <div class="action-icon">
                                <i class="fas fa-user-cog"></i>
                            </div>
                            <h3>Manage Users</h3>
                            <p>View and manage user accounts</p>
                        </a>

                        <a href="#" class="quick-action-card">
                            <div class="action-icon">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <h3>View Reports</h3>
                            <p>Analytics and statistics</p>
                        </a>
                    </div>
                </section>

                <!-- Pending Tasks -->
                <section class="content-section">
                    <div class="section-header">
                        <h2>Pending Tasks</h2>
                        <a href="#" class="see-all">5 tasks remaining</a>
                    </div>
                    <div class="tasks-list">
                        <!-- Task 1 -->
                        <div class="task-item">
                            <div class="task-checkbox">
                                <input type="checkbox" id="task1">
                                <label for="task1"></label>
                            </div>
                            <div class="task-content">
                                <h3>Verify new anime submissions</h3>
                                <p>3 new anime waiting for approval</p>
                            </div>
                            <div class="task-priority high"></div>
                        </div>

                        <!-- Task 2 -->
                        <div class="task-item">
                            <div class="task-checkbox">
                                <input type="checkbox" id="task2">
                                <label for="task2"></label>
                            </div>
                            <div class="task-content">
                                <h3>Update seasonal schedule</h3>
                                <p>Fall 2023 anime lineup</p>
                            </div>
                            <div class="task-priority medium"></div>
                        </div>

                        <!-- Task 3 -->
                        <div class="task-item">
                            <div class="task-checkbox">
                                <input type="checkbox" id="task3">
                                <label for="task3"></label>
                            </div>
                            <div class="task-content">
                                <h3>Respond to user reports</h3>
                                <p>5 new reports to review</p>
                            </div>
                            <div class="task-priority high"></div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <!-- Custom Cursor -->
    <div id="cursor" class="Cursor"></div>

    <script src="{{ asset('js/dashboard/script.js') }}"></script>
    <script src="{{ asset('js/dashboard/cursor.js') }}"></script>
</body>

</html>
