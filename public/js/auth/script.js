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

    const passwordInput = document.getElementById('password');
    if (passwordInput) {
        passwordInput.addEventListener('input', function () {
            const strengthMeter = document.querySelector('.strength-meter .strength-bar');
            const strengthText = document.querySelector('.strength-text');
            const password = this.value;

            strengthMeter.className = 'strength-bar';
            strengthMeter.style.width = '0%';

            if (password.length === 0) {
                strengthText.textContent = '';
                return;
            }

            let strength = 0;

            strength += Math.min(password.length * 3, 40);

            const hasLower = /[a-z]/.test(password);
            const hasUpper = /[A-Z]/.test(password);
            const hasNumber = /[0-9]/.test(password);
            const hasSpecial = /[^A-Za-z0-9]/.test(password);

            if (hasLower) strength += 10;
            if (hasUpper) strength += 10;
            if (hasNumber) strength += 10;
            if (hasSpecial) strength += 10;

            const charTypes = [hasLower, hasUpper, hasNumber, hasSpecial].filter(Boolean).length;
            if (charTypes >= 3) strength += 10;
            if (charTypes === 4) strength += 10;

            strength = Math.min(strength, 100);

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

    const socialButtons = document.querySelectorAll('.social-btn');
    socialButtons.forEach(button => {
        button.addEventListener('click', function () {
            const provider = this.classList.contains('google') ? 'Google' : 'Discord';
            alert(`Redirecting to ${provider} login...`);
        });
    });
});