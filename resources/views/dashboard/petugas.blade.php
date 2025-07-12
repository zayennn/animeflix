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
                    <i class="fas fa-chart-pie"></i>
                </div>
                <h3>View Reports</h3>
                <p>Analytics and statistics</p>
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