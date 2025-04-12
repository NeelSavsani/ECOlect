function toggleSidebar() {
    const icon = document.getElementById("hamburger-icon");
    const sidebar = document.getElementById("sidebar");

    sidebar.classList.toggle("open");

    if (sidebar.classList.contains("open")) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-xmark");

        // Add event listener to detect outside clicks
        document.addEventListener("click", handleOutsideClick);
    } else {
        icon.classList.remove("fa-xmark");
        icon.classList.add("fa-bars");

        // Remove listener when sidebar is closed
        document.removeEventListener("click", handleOutsideClick);
    }
}

function handleOutsideClick(event) {
    const sidebar = document.getElementById("sidebar");
    const hamburger = document.querySelector(".hamburger");

    if (!sidebar.contains(event.target) && !hamburger.contains(event.target)) {
        sidebar.classList.remove("open");

        const icon = document.getElementById("hamburger-icon");
        icon.classList.remove("fa-xmark");
        icon.classList.add("fa-bars");

        document.removeEventListener("click", handleOutsideClick);
    }
}
