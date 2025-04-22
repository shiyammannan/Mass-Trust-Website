// global.js
function initializeSidebar() {
    const menuToggle = document.querySelector('.menu-toggle');
    const sidebar = document.querySelector('.sidebar');

    if (menuToggle) {
        menuToggle.addEventListener('click', function () {
            sidebar.classList.toggle('open');
        });
    }

    // Close sidebar when clicking outside it
    document.addEventListener('click', function (e) {
        if (!sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
            sidebar.classList.remove('open');
        }
    });

    // Close sidebar when clicking on a link inside it
    const sidebarLinks = document.querySelectorAll('.sidebar-menu li a');
    sidebarLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            sidebar.classList.remove('open');
        });
    });

    // Toggle shrink class on sidebar when clicking on arrow icon
    const arrowIcons = document.querySelectorAll('.sidebar .navbar-brand .arrow-icon');
    arrowIcons.forEach(function (arrow) {
        arrow.addEventListener('click', function (e) {
            e.preventDefault();
            sidebar.classList.toggle('shrink');
        });
    });
}

// Initialize the sidebar when DOM is fully loaded
document.addEventListener('DOMContentLoaded', function () {
    initializeSidebar();
});
