<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php"); 
    exit();
}

$user_email = isset($_GET['email']) ? $_GET['email'] : $_SESSION['user_email'];

// Debugging: Print session email in browser
echo "<script>console.log('Session Email in home.php: " . $user_email . "');</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../assets/favicon_io/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nearby E-Waste - ECOlect</title>
    <link rel="stylesheet" href="../css/nearby.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/scroll.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="../home.php" class="brand-link">
                <img src="../assets/ECOlet_rm.png" alt="E-Waste Recycling Logo" class="logo" />
                <span class="brand-name">ECOLECT</span>
            </a>
        </div>
        <div class="navbar-links">
            <a href="types.php?email=<?php echo urlencode($user_email);?>" class="nav-button">Types of E-Waste</a>
            <a href="report.php?email=<?php echo urlencode($user_email);?>" class="nav-button">Report E-Waste</a>
            <a href="nearby.php?email=<?php echo urlencode($user_email);?>" class="nav-button active">Nearby E-Waste</a>
            <a href="about.php?email=<?php echo urlencode($user_email);?>" class="nav-button">About Us</a>
            <div class="profile-container" onclick="toggleDropdown()">
                <i class="fas fa-user-circle profile-icon"></i>
                <i class="fas fa-chevron-down dropdown-arrow" id="arrow"></i>
                <ul class="dropdown-menu" id="profile-dropdown">
                    <li><a href="../profile.php?email=<?php echo urlencode($user_email); ?>">My Profile</a></li>
                    <li><a href="../reported.php?email=<?php echo urlencode($user_email); ?>">Reported E-Waste</a></li>
                    <li><a href="../login.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <button class="hamburger">☰</button>
    </nav>
    <div class="content">
        <a href="quiz/quiz.php?email=<?php echo urlencode($user_email); ?>" class="quiz_container">
            <div class="quiz">Awareness Quiz <i class="fa-solid fa-question"></i></div>
        </a>
        <!-- main content -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.7518863323853!2d72.90236947472002!3d21.241685180432434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be045b201ae2557%3A0x7d4e51f9792a169a!2sSaffron%20Luxuria!5e0!3m2!1sen!2sin!4v1744437425042!5m2!1sen!2sin"></iframe>
    </div>
    </div>

    <footer>
        <div class="footer-label">Let's Connect</div>
        <div class="social-icons">
            <a href="facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="x.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="in.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="mailto:neelsavani7@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
        </div>
        <p class="ftr">© 2025 Team <b>ABHYUDAY</b>. All Rights Reserved.</p>
     </footer>


    <button id="scrollBottom"><i class="fa-solid fa-down-long"></i></button>
    
    <script src="../js/scroll.js"></script>
    <script src="../js/menu.js"></script>
</body>
</html>