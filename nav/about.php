<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php"); 
    exit();
}

$user_email = isset($_GET['email']) ? $_GET['email'] : $_SESSION['user_email'];

echo "<script>console.log('Session Email in home.php: " . $user_email . "');</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../assets/favicon_io/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ECOlect</title>
    <link rel="stylesheet" href="../css/about.css">
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
            <a href="nearby.php?email=<?php echo urlencode($user_email);?>" class="nav-button">Nearby E-Waste</a>
            <a href="about.php?email=<?php echo urlencode($user_email);?>" class="nav-button active">About Us</a>
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
    <!-- main content -->
    <a href="quiz/quiz.php?email=<?php echo urlencode($user_email); ?>" class="quiz_container">
        <div class="quiz">Awareness Quiz <i class="fa-solid fa-question"></i></div>
    </a>
    <h1 class="main">&#127807; Welcome to ECOlect - Revolutionizing E-Waste Management</h1>
    <p class="main">
        At ECOlect, our mission is to provide a sustainable and innovative solution for electronic waste (e-waste) management. With the growing concern about environmental pollution caused by improper disposal of e-waste, we aim to create an ecosystem where users can responsibly manage their electronic waste, contributing to a cleaner, greener future.
    </p>
    <p class="main">
        We connect individuals, organizations, and local businesses to facilitate efficient collection, recycling, and safe disposal of e-waste. Our platform ensures that e-waste is processed in an environmentally friendly manner while also ensuring the security of data in electronic devices.
    </p>
    <h1 class="main"><i class="fa-solid fa-users"></i> Our Team</h1>
    <div class="team-card">
        <div class="image-section">
            <img src="../assets/Members/NeelG.jpg" onclick='window.open("../assets/Members/NeelG.jpg", "_blank");' alt="Neel Savsani">
        </div>
        <div class="info-section">
            <table class="info-table">
                <tr>
                    <th colspan="2">Neel Bipinbhai Savsani</th>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>Team Leader & Full Stack Developer</td>
                </tr>
                <tr>
                    <th>Background</th>
                    <td>Passionate technologist and environmental advocate with a vision to combine technology and sustainability.</td>
                </tr>
                <tr>
                    <th>Expertise</th>
                    <td>Web development, Project management, E-waste research</td>
                </tr>
                <tr>
                    <th>Skills</th>
                    <td>HTML, CSS, JavaScript, Figma, PHP, MySQL, UI/UX Design</td>
                </tr>
                <tr>
                    <th>GitHub</th>
                    <td><a href="https://www.github.com/NeelSavsani" target="blank">NeelSavsani</a> <i class="fa-brands fa-github"></i></td>
                </tr>
                <tr>
                    <th>LinkedIn</th>
                    <td><a href="https://www.linkedin.com/in/neel-savsani/" target="blank">neel-savsani</a> <i class="fa-brands fa-linkedin"></i></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:neelsavsani7@gmail.com" target="blank">Neel Savsani</a> <i class="fa-solid fa-envelope"></i></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="team-card">
        <div class="image-section">
            <img src="#" alt="Nehanshi Sanghani">
        </div>
        <div class="info-section">
            <table class="info-table">
                <tr>
                    <th colspan="2">Nehanshi Ashwinbhai Sanghani</th>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>Tech-Savvy Contributor & Sustainability Advocate</td>
                </tr>
                <tr>
                    <th>Background</th>
                    <td>Committed to using technology to advance eco-conscious initiatives.</td>
                </tr>
                <tr>
                    <th>Expertise</th>
                    <td> Team Support, E-waste Project Facilitation</td>
                </tr>
                <tr>
                    <th>Skills</th>
                    <td>HTML, JavaScript, Resource Co-ordination, Team Support</td>
                </tr>
                <tr>
                    <th>GitHub</th>
                    <td><a href="" target="blank">NehanshiSanghani</a> <i class="fa-brands fa-github"></i></td>
                </tr>
                <tr>
                    <th>LinkedIn</th>
                    <td><a href="https://www.linkedin.com/in/nehanshi-sanghani-733a212b7/" target="blank">nehanshi-sanghani</a> <i class="fa-brands fa-linkedin"></i></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:nehanshisanghani261@gmail.com" target="blank">Nehanshi Sanghani</a> <i class="fa-solid fa-envelope"></i></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="team-card">
        <div class="image-section">
            <img src="#" alt="Keshvi Jarsania">
        </div>
        <div class="info-section">
            <table class="info-table">
                <tr>
                    <th colspan="2">Keshvi Prakashbhai Jarsania</th>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>UI/UX Designer & Design Lead</td>
                </tr>
                <tr>
                    <th>Background</th>
                    <td>Passionate about crafting intuitive and visually appealing digital experiences.</td>
                </tr>
                <tr>
                    <th>Expertise</th>
                    <td>Proficient in HTML, CSS, Figma & Creating Seamless UI/UX Designs</td>
                </tr>
                <tr>
                    <th>Skills</th>
                    <td>HTML, CSS, Figma, UI/UX Design</td>
                </tr>
                <tr>
                    <th>GitHub</th>
                    <td><a href="https://github.com/Keshvi010" target="blank">Keshvi010</a> <i class="fa-brands fa-github"></i></td>
                </tr>
                <tr>
                    <th>LinkedIn</th>
                    <td><a href="https://www.linkedin.com/in/keshvi-jarsania-6080a52b7/" target="blank">keshvi-jarsania</a> <i class="fa-brands fa-linkedin"></i></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:keshvijarsania198@gmail.com" target="blank">Keshvi Jarsania</a> <i class="fa-solid fa-envelope"></i></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="team-card">
        <div class="image-section">
            <img src="../assets/Members/SaloniG.jpg" alt="Saloni Pabreja">
        </div>
        <div class="info-section">
            <table class="info-table">
                <tr>
                    <th colspan="2">Saloni Jaykumar Pabreja</th>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>PHP Developer & Database Administrator</td>
                </tr>
                <tr>
                    <th>Background</th>
                    <td>Aiming to integrate innovative technology with eco-friendly solutions.</td>
                </tr>
                <tr>
                    <th>Expertise</th>
                    <td>PHP Development, MySQL Database Management & Design</td>
                </tr>
                <tr>
                    <th>Skills</th>
                    <td>PHP, MySQL, Database</td>
                </tr>
                <tr>
                    <th>GitHub</th>
                    <td><a href="https://github.com/Salonip07" target="blank">SaloniP07</a> <i class="fa-brands fa-github"></i></td>
                </tr>
                <tr>
                    <th>LinkedIn</th>
                    <td><a href="https://www.linkedin.com/in/saloni-pabreja-07162a31a/" target="blank">saloni-pabreja</a> <i class="fa-brands fa-linkedin"></i></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:salonipabreja06@gmail.com" target="blank">Saloni Pabreja</a> <i class="fa-solid fa-envelope"></i></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="team-card">
        <div class="image-section">
            <img src="#" alt="Disha Thanki">
        </div>
        <div class="info-section">
            <table class="info-table">
                <tr>
                    <th colspan="2">Disha Bhagvanjibhai Thanki</th>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>AI/ML Specialist</td>
                </tr>
                <tr>
                    <th>Background</th>
                    <td>Innovative AI enthusiast and sustainability advocate dedicated to leveraging intelligent systems for environmental impact.</td>
                </tr>
                <tr>
                    <th>Expertise</th>
                    <td>AI & Machine Learning, Data Analysis, Research & Development</td>
                </tr>
                <tr>
                    <th>Skills</th>
                    <td>AI, ML, Python</td>
                </tr>
                <tr>
                    <th>GitHub</th>
                    <td><a href="https://github.com/dishathanki" target="blank">dishanthanki</a> <i class="fa-brands fa-github"></i></td>
                </tr>
                <tr>
                    <th>LinkedIn</th>
                    <td><a href="https://www.linkedin.com/in/disha-thanki-b18ab7259/" target="blank">disha-thanki</a> <i class="fa-brands fa-linkedin"></i></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:dishathanki2005@gmail.com" target="blank">Disha Thanki</a> <i class="fa-solid fa-envelope"></i></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="team-card">
        <div class="image-section">
            <img src="../assets/Members/AbhishekG.jpg" alt="Abhishek Sangani">
        </div>
        <div class="info-section">
            <table class="info-table">
                <tr>
                    <th colspan="2">Abhishek Bhadreshbhai Sangani</th>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>Responsive & UI/UX Design Specialist</td>
                </tr>
                <tr>
                    <th>Background</th>
                    <td>Dedicated web developer and eco-conscious innovator striving to merge technology with sustainable solutions.</td>
                </tr>
                <tr>
                    <th>Expertise</th>
                    <td>Web Development, Responsive Design, UI/UX Optimization</td>
                </tr>
                <tr>
                    <th>Skills</th>
                    <td>HTML, CSS, Responsive Design, UI/UX Design</td>
                </tr>
                <tr>
                    <th>GitHub</th>
                    <td><a href="https://github.com/Abhishek-Sangani" target="blank">AbhishekSangani</a> <i class="fa-brands fa-github"></i></td>
                </tr>
                <tr>
                    <th>LinkedIn</th>
                    <td><a href="https://www.linkedin.com/in/abhishek-sangani-0a243331a/" target="blank">abhishek-sangani</a> <i class="fa-brands fa-linkedin"></i></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:abhisheksangani5@gmail.com" target="blank">Abhishek Sangani</a> <i class="fa-solid fa-envelope"></i></td>
                </tr>
            </table>
        </div>
    </div>
    <h1 class="main">&#128161; Why Choose ECOlect?</h1>
    <ul class="main">
        <li class="main"><b>Sustainability:</b> We ensure that e-waste is recycled or disposed of in a way that minimizes harm to the environment.</li>
        <li class="main"><b>Secure Data Disposal:</b> Our platform ensures that all data in electronic devices is securely wiped before recycling.</li>
        <li class="main"><b>Innovative Approach:</b> With cutting-edge technology, we simplify the process of e-waste collection and recycling for individuals and organizations.</li>
    </ul>
    <h1 class="main">&#128640; Our Mission</h1>
    <p class="main">
        ECOlect is dedicated to transforming e-waste management practices through innovative solutions, promoting sustainability, and creating a cleaner environment for future generations. We are committed to offering secure and eco-friendly disposal options, ensuring the integrity of both the environment and personal data.
    </p>
    <h1 class="main">&#127919; Our Vision for SSIP & Beyond</h1>
    <p class="main">
        We aim to expand ECOlect into a nationally recognized platform endorsed by government bodies. Through SSIP, we seek mentorship, funding, and real-world feedback to further refine and implement our solution in communities across India.
    </p>
    <h1 class="main">&#x1F4DD; Give feedback</h1>
    <?php $feed_url = "../feedback.php?email=$user_email"; ?>
    <p class="main">Your feedback is valuable for us: <?php echo '<a href="'.$feed_url.'" target="_blank">Send Feedback ⤴</a>'; ?></p>
    <h1 class="main">&#129309; Get in Touch</h1>
    <p class="main">
        Have questions or want to partner with us?
        <ul class="main">
            <li class="main">&#128231; <b>Email:</b> abc@gmail.com</li>
            <li class="main">&#127760; <b>Website:</b> abc.com</li>
            <li class="main">&#128205; <b>Location:</b> <a href="https://maps.app.goo.gl/inKH7WusdqjQHpYx7" target="blank">LDRP-ITR</a></li>
        </ul>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.103141662906!2d72.6361558747766!3d23.239333508205455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2b933477ba9f%3A0xe440409e66bea08a!2sLDRP%20Institute%20of%20Technology%20and%20Research!5e0!3m2!1sen!2sin!4v1744475586930!5m2!1sen!2sin" width="600" height="450"></iframe>
    </p>
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