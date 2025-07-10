document.addEventListener('DOMContentLoaded', function () {
    // Toggle password visibility
    const togglePasswordButtons = document.querySelectorAll('.toggle-password');

    togglePasswordButtons.forEach(button => {
        button.addEventListener('click', function () {
            const input = this.parentElement.querySelector('input');
            const icon = this.querySelector('i');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });

    // Password strength indicator (for register page)
    const passwordInput = document.getElementById('password');
    if (passwordInput) {
        passwordInput.addEventListener('input', function () {
            const strengthMeter = document.querySelector('.strength-meter .strength-bar');
            const strengthText = document.querySelector('.strength-text');
            const password = this.value;

            // Reset classes and width
            strengthMeter.className = 'strength-bar';
            strengthMeter.style.width = '0%';

            if (password.length === 0) {
                strengthText.textContent = '';
                return;
            }

            // Calculate strength score (0-100)
            let strength = 0;

            // Length (max 40 points)
            strength += Math.min(password.length * 3, 40);

            // Character variety (max 60 points)
            const hasLower = /[a-z]/.test(password);
            const hasUpper = /[A-Z]/.test(password);
            const hasNumber = /[0-9]/.test(password);
            const hasSpecial = /[^A-Za-z0-9]/.test(password);

            if (hasLower) strength += 10;
            if (hasUpper) strength += 10;
            if (hasNumber) strength += 10;
            if (hasSpecial) strength += 10;

            // Bonus for multiple character types
            const charTypes = [hasLower, hasUpper, hasNumber, hasSpecial].filter(Boolean).length;
            if (charTypes >= 3) strength += 10;
            if (charTypes === 4) strength += 10;

            // Cap at 100
            strength = Math.min(strength, 100);

            // Update UI
            const width = `${strength}%`;
            strengthMeter.style.width = width;

            if (strength < 40) {
                strengthMeter.classList.add('weak');
                strengthText.textContent = 'Weak';
            } else if (strength < 70) {
                strengthMeter.classList.add('medium');
                strengthText.textContent = 'Medium';
            } else {
                strengthMeter.classList.add('strong');
                strengthText.textContent = 'Strong';
            }
        });
    }

    // Form validation and submission
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Simple validation
            const email = this.elements['email'].value;
            const password = this.elements['password'].value;

            if (!email || !password) {
                alert('Please fill in all fields');
                return;
            }

            // Here you would typically send data to server
            console.log('Login submitted:', { email, password });

            // Simulate successful login
            alert('Login successful! Redirecting...');
            window.location.href = 'index.html';
        });
    }

    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form values
            const username = this.elements['username'].value;
            const email = this.elements['email'].value;
            const password = this.elements['password'].value;
            const confirmPassword = this.elements['confirmPassword'].value;
            const terms = this.elements['terms'].checked;

            // Validation
            if (!username || !email || !password || !confirmPassword) {
                alert('Please fill in all fields');
                return;
            }

            if (password !== confirmPassword) {
                alert('Passwords do not match');
                return;
            }

            if (!terms) {
                alert('You must agree to the terms and conditions');
                return;
            }

            // Here you would typically send data to server
            console.log('Registration submitted:', { username, email, password });

            // Simulate successful registration
            alert('Registration successful! Redirecting to login...');
            window.location.href = 'login.html';
        });
    }

    // Social login buttons
    const socialButtons = document.querySelectorAll('.social-btn');
    socialButtons.forEach(button => {
        button.addEventListener('click', function () {
            const provider = this.classList.contains('google') ? 'Google' : 'Discord';
            alert(`Redirecting to ${provider} login...`);
            // In a real app, this would redirect to OAuth flow
        });
    });
});