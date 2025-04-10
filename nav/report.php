<?php
session_start();
include '../dbconnect.php';

if (isset($_GET['email'])) {
    $user_email = $_GET['email']; // Fetch from URL parameter
} elseif (isset($_SESSION['user_email'])) {
    $user_email = $_SESSION['user_email']; // Default to session email
} else {
    header("Location: login.php"); // Redirect if no email is found
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/new/ECOlect/assets/favicon_io/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report E-Waste - ECOlect</title>
    <link rel="stylesheet" href="../css/report.css">
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
            <a href="report.php?email=<?php echo urlencode($user_email);?>" class="nav-button active">Report E-Waste</a>
            <a href="nearby.php?email=<?php echo urlencode($user_email);?>" class="nav-button">Nearby E-Waste</a>
            <a href="about.php?email=<?php echo urlencode($user_email);?>" class="nav-button">About Us</a>
            <div class="profile-container" onclick="toggleDropdown()">
                <i class="fas fa-user-circle profile-icon"></i>
                <i class="fas fa-chevron-down dropdown-arrow" id="arrow"></i>
                <ul class="dropdown-menu" id="profile-dropdown">
                    <li><a href="../profile.php?email=<?php echo urlencode($user_email); ?>">My Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="../login.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <button class="hamburger">☰</button>
    </nav>
    <div class="content">
        <!-- main content -->
         <h1 class="main">Report E-Waste:</h1>
         <p class="main">
            ECOlect is a user-friendly platform that simplifies e-waste reporting and disposal. Users can easily submit details of discarded electronics like phones, laptops, and batteries, specifying type, quantity, and location. The platform then connects them with authorized recyclers, ensuring proper disposal to prevent pollution and promote sustainability. By facilitating responsible e-waste management, ECOlect helps conserve resources and contributes to a cleaner, greener future.
         </p>
         <table>
            <tr>
                <td>
                    <h3 class="main">Address:</h3>
                </td>
                <td>
                    <textarea name="address" id="address" rows="5" cols="70"></textarea>
                </td>
            </tr>
            
            <tr>
                <td>
                    <h3 class="main">Type of E-Waste:</h3>
                </td>
                <td>
                <select name="typeE" id="typeE">
                <option value="--1">--Select--</option>
                <option value="Large Household Appliances">Large Household Appliances</option>
                <option value="Small Household Appliances">Small Household Appliances</option>
                <option value="Consumer Electronics">Consumer Electronics</option>
                <option value="IT and Telecommunications Equipment">IT and Telecommunications Equipment</option>
                <option value="Lighting Equipment">Lighting Equipment</option>
                <option value="Electrical and Electronic Tools">Electrical and Electronic Tools</option>
                <option value="Medical Devices">Medical Devices</option>
                <option value="Automatic Dispensers">Automatic Dispensers</option>
                <option value="Toys, Leisure, and Sports Equipment">Toys, Leisure, and Sports Equipment</option>
                <option value="Batteries and Accumulators">Batteries and Accumulators</option>
                <option value="Cables and Wires">Cables and Wires</option>
                <option value="Industrial Electronics">Industrial Electronics</option>
                <option value="Security and Surveillance Equipment">Security and Surveillance Equipment</option>
                <option value="Wearable Technology">Wearable Technology</option>
                <option value="Scientific and Laboratory Equipment">Scientific and Laboratory Equipment</option>
                <option value="Energy Generation and Storage Devices">Energy Generation and Storage Devices</option>
                <option value="Gaming and Virtual Reality Devices">Gaming and Virtual Reality Devices</option>
                <option value="Other">Other</option>
                </select>
                <small>*only select <i><b>Other</b></i> if there are more than one type of e-waste or type of e-waste is not listed above</small>
                </td>
            </tr>
            <tr>
                <div id="e-name-wrapper">
                    <td>
                        <h3 class="main">Name of E-Waste</h3>
                    </td>
                    <td>
                        <input type="text" name="e-name" id="e-name">
                    </td>
                </div>
            </tr>
            <tr>
                <td>
                    <h3 class="main">Quantity of E-Waste</h3>
                </td>
                <td>
                    <input type="number" name="weight" id="weight"> <small>(in number in kilograms)</small>
                </td>
            </tr>
            <tr>
                <td>
                    <h3 class="main">Location</h3>
                </td>
                <td>
                    <button onclick="getLocation()">Upload your location</button> <span id="location"></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                     Report e-waste only when e-waste is with you, or while reporting e-waste, e-waste is with you. Because we are going to access your location for better relibility and exact location for e-waste for database. <br>
                     <b><input type="checkbox" name="location access" id="location_access"> I assure that e-waste is with me and allowing to acces my location</b>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="button" id="reportBtn" value="Report E-Waste" onclick="reportEwaste()" disabled>
                </td>
            </tr>
         </table>
    </div>
    <script>
    const typeDropdown = document.getElementById("typeE");
    const eNameInput = document.getElementById("e-name");
    const eNameWrapper = document.getElementById("e-name-wrapper");

    function toggleENameField() {
        const selectedValue = typeDropdown.value;

        if (selectedValue === "Other") {
            eNameWrapper.style.display = "none";     // Hide the wrapper
            eNameInput.disabled = true;
            eNameInput.value = "";
        } else {
            eNameWrapper.style.display = "block";    // Show the wrapper
            eNameInput.disabled = false;
        }

        if (typeof validateForm === "function") {
            validateForm(); // Optional validation call
        }
    }

    // Initial setup
    toggleENameField();
    typeDropdown.addEventListener("change", toggleENameField);

    </script>

    <script>
        let locationUploaded = false;
        let locationSpan = document.getElementById("location");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        locationUploaded = true;
                        validateForm();
                        locationSpan.innerText = "📍 Location uploaded successfully!";
                    },
                    function (error) {
                        alert("❌ Location access denied or failed: " + error.message);
                        locationSpan.innerText = ""; // clear message on error
                        locationUploaded = false;
                        validateForm();
                    }
                );
            } else {
                alert("Geolocation is not supported by your browser.");
            }
        }

        function validateForm() {
            const address = document.getElementById("address").value.trim();
            const weight = document.getElementById("weight").value.trim();
            const typeE = document.getElementById("typeE").value;
            const name = document.getElementById("e-name").value.trim();
            const isChecked = document.getElementById("location_access").checked;
            const reportBtn = document.getElementById("reportBtn");

            // Name is only required if type is "Other"
            const eNameIsValid = (typeE === "Other") || (name !== "");

            if (address !== "" && weight !== "" && typeE !== "--1" && eNameIsValid && isChecked && locationUploaded) {
                reportBtn.disabled = false;
            } else {
                reportBtn.disabled = true;
            }
        }

        // Attach listeners
        document.getElementById("address").addEventListener("input", validateForm);
        document.getElementById("weight").addEventListener("input", validateForm);
        document.getElementById("typeE").addEventListener("change", validateForm);
        document.getElementById("location_access").addEventListener("change", validateForm);

    </script>


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


     <!--Scroll to bottom  -->
    <button id="scrollBottom"><i class="fa-solid fa-down-long"></i></button>
    <script>
        const btn = document.getElementById("scrollBottom");
        function checkScroll() {
            const scrollTop = window.scrollY;
            const windowHeight = window.innerHeight;
            const docHeight = document.documentElement.scrollHeight;

            if (scrollTop > 40 && scrollTop + windowHeight < docHeight - 10) {
                btn.style.display = "block"; // Show button if not at the bottom
            } else {
                btn.style.display = "none"; // Hide button when at the bottom
            }
        }

        window.addEventListener("scroll", checkScroll);

        btn.addEventListener("click", () => {
            window.scrollTo({
                top: document.body.scrollHeight,
                behavior: "smooth"
            });

            btn.style.display = "none"; // Hide button after clicking
        });
    </script>


    <!-- Menu -->
    <script>
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
    </script>

<script>
    function requestLocationPermission(retryCount = 0) {
        if (retryCount >= 5) {
        console.log("⛔ Max retries reached. User denied location.");
        return;
        }

        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
            console.log("✅ Location access granted");
            console.log("Latitude:", position.coords.latitude);
            console.log("Longitude:", position.coords.longitude);
            },
            (error) => {
            console.warn("⚠ Location access denied or failed:", error.message);

            // Retry after delay (if user hasn't permanently blocked)
            setTimeout(() => {
                requestLocationPermission(retryCount + 1);
            }, 3000); // retry every 3 seconds
            }
        );
        } else {
        alert("Geolocation is not supported by this browser.");
        }
    }

    // Start the permission loop
    requestLocationPermission();
    </script>
</body>
</html>