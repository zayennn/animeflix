@extends('layouts.dashboard')
@section('content')
    <!-- Welcome Section -->
    <section class="welcome-section">
        <h1>Welcome back, <span>{{ Auth::user()->username }}</span></h1>
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
                    <i class="fas fa-user-cog"></i>
                </div>
                <h3>Manage Users</h3>
                <p>View and manage user accounts</p>
            </a>
        </div>
    </section>

    <!-- Pending Tasks -->
    {{-- <section class="content-section">
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
    </section> --}}
@endsection
