@extends('layouts.auth')
@section('content')
    <div class="auth-header">
        <a href="index.html" class="logo">Anime<span>Flix</span></a>
        <h1>Welcome Back</h1>
        <p>Login to continue your anime journey</p>
    </div>

    <form id="loginForm" class="auth-form">
        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <button type="button" class="toggle-password" aria-label="Toggle password visibility">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>
        </div>

        <button type="submit" class="auth-btn">Login</button>

        <div class="auth-divider">
            <span>or</span>
        </div>

        <div class="social-login">
            <button type="button" class="social-btn google">
                <i class="fab fa-google"></i> Continue with Google
            </button>
            <button type="button" class="social-btn discord">
                <i class="fab fa-discord"></i> Continue with Discord
            </button>
        </div>

        <div class="auth-footer">
            Don't have an account? <a href="/register">Sign up</a>
        </div>
    </form>
@endsection