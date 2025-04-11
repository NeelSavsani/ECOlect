document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navbarLinks = document.querySelector('.navbar-links');
    const profileContainer = document.querySelector(".profile-container");
    const dropdown = document.getElementById("profile-dropdown");
    const arrow = document.getElementById("arrow");

    // Toggle Navbar
    hamburger.addEventListener('click', (event) => {
        event.stopPropagation(); // Prevents closing the menu when clicking the button
        navbarLinks.classList.toggle('active');

        // Toggle hamburger icon
        hamburger.textContent = navbarLinks.classList.contains('active') ? '✕' : '☰';
    });

    // Close Navbar when clicking outside
    document.addEventListener('click', (event) => {
        if (!navbarLinks.contains(event.target) && !hamburger.contains(event.target)) {
            navbarLinks.classList.remove('active');
            hamburger.textContent = '☰';
        }
    });

    // Toggle Profile Dropdown
    profileContainer.addEventListener("click", function (event) {
        event.stopPropagation();
        dropdown.classList.toggle("show-dropdown");
        arrow.classList.toggle("rotate");
    });

    // Close Profile Dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!profileContainer.contains(event.target)) {
            dropdown.classList.remove("show-dropdown");
            arrow.classList.remove("rotate");
        }
    });
});