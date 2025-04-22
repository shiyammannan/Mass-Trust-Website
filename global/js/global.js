function openNav() {
    document.getElementById("mySidenav").classList.add("show");
}

function closeNav() {
    document.getElementById("mySidenav").classList.remove("show");
}

document.addEventListener('DOMContentLoaded', function() {
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav-links a');
    const menuLength = menuItem.length;
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].classList.add('active');
        }
    }
});