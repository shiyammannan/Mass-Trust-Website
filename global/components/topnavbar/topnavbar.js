document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('solid');
        } else {
            navbar.classList.remove('solid');
        }
    });

    const navbarToggle = document.getElementById('navbar-toggle');
    const navLinks = document.getElementById('nav-links');

    navbarToggle.addEventListener('click', function() {
        navLinks.classList.toggle('active');
    });
});
