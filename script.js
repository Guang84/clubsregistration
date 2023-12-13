document.addEventListener('DOMContentLoaded', function () {
    const loginTab = document.getElementById('login-tab');
    const signupTab = document.getElementById('signup-tab');
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');

    loginTab.addEventListener('click', function () {
        loginForm.classList.add('active');
        signupForm.classList.remove('active');
        loginTab.style.backgroundColor = '#3498db';
        signupTab.style.backgroundColor = '#fff';
    });

    signupTab.addEventListener('click', function () {
        signupForm.classList.add('active');
        loginForm.classList.remove('active');
        signupTab.style.backgroundColor = '#3498db';
        loginTab.style.backgroundColor = '#fff';
    });
});
