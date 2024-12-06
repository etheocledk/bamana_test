document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eye');
    const eyeOffIcon = document.getElementById('eye-off');
    const togglePassword = document.getElementById('toggle-password');

    if (togglePassword) {
        togglePassword.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.style.display = 'none';
                eyeOffIcon.style.display = 'block';
            } else {
                passwordInput.type = 'password';
                eyeIcon.style.display = 'block';
                eyeOffIcon.style.display = 'none';
            }
        });
    }

    const passwordInput2 = document.getElementById('password-confirm');
    const eyeIcon2 = document.getElementById('eye-confirm');
    const eyeOffIcon2 = document.getElementById('eye-off-confirm');
    const togglePassword2 = document.getElementById('toggle-password-confirm');

    if (togglePassword2) {
        togglePassword2.addEventListener('click', function () {
            if (passwordInput2.type === 'password') {
                passwordInput2.type = 'text';
                eyeIcon2.style.display = 'none';
                eyeOffIcon2.style.display = 'block';
            } else {
                passwordInput2.type = 'password';
                eyeIcon2.style.display = 'block';
                eyeOffIcon2.style.display = 'none';
            }
        });
    }

    const passwordInput3 = document.getElementById('password-login');
    const eyeIcon3 = document.getElementById('eye-login');
    const eyeOffIcon3 = document.getElementById('eye-off-login');
    const togglePassword3 = document.getElementById('toggle-login');

    if (togglePassword3) {
        togglePassword3.addEventListener('click', function () {
            if (passwordInput3.type === 'password') {
                passwordInput3.type = 'text';
                eyeIcon3.style.display = 'none';
                eyeOffIcon3.style.display = 'block';
            } else {
                passwordInput3.type = 'password';
                eyeIcon3.style.display = 'block';
                eyeOffIcon3.style.display = 'none';
            }
        });
    }

});