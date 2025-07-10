<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeFlix - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
</head>

<body>
    <div class="auth-container">
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
    </div>

    <script src="{{ asset('js/auth/script.js') }}"></script>
</body>

</html>