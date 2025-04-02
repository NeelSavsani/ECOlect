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
    <link rel="shortcut icon" href="/new/ECOlect/assets/favicon_io/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types Of E-Waste - ECOlect</title>
    <link rel="stylesheet" href="../css/types.css">
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
            <a href="types.php?email=<?php echo urlencode($user_email);?>" class="nav-button active">Types of E-Waste</a>
            <a href="report.php?email=<?php echo urlencode($user_email);?>" class="nav-button">Report E-Waste</a>
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
         <h1 class="main">Types Of E-Waste: A Detailed Classification Based on Composition and Function</h1>
         <p class="main">E-waste, or electronic waste, encompasses a vast range of electrical and electronic devices that have reached the end of their useful life. Due to the complexity of electronic products, e-waste can be classified into various categories based on their composition, function, and intended use. Each category consists of devices and equipment that contribute to the growing problem of e-waste, each posing unique environmental and health hazards if not managed properly. Below is an in-depth classification of e-waste, including examples and explanations of each type:</p>
         <ol class="main">
            <li class="main">
                Large Household Appliances:
                <p class="sub-main">Large household appliances, also known as white goods, are some of the most significant contributors to e-waste due to their size, weight, and widespread use in homes and commercial spaces. These appliances are primarily used for food storage, cleaning, heating, and cooling. Most of them contain metallic components, plastic parts, electrical circuits, and refrigerants, some of which may be hazardous if not disposed of correctly.</p>
                <ul class="sub-main" type="disc">
                    <li class="sub-main"><b>Examples:</b> Refrigerators, washing machines, air conditioners, dishwashers, ovens, water heaters, freezers, microwave ovens.</li>
                    <li class="sub-main"><b>Hazards:</b> Refrigerants in air conditioners and refrigerators contain chlorofluorocarbons (CFCs) and hydrofluorocarbons (HFCs), which are harmful to the ozone layer and contribute to global warming. Washing machines and dishwashers contain electrical circuits, plastic components, and heavy metals that can contaminate the environment. </li>
                </ul>
            </li>
            <li class="main">
                Small Household Appliances:
                <p class="sub-main">This category consists of compact electrical devices commonly used for cooking, cleaning, grooming, and personal care. These appliances are found in almost every household and, despite their smaller size, collectively contribute to significant amounts of e-waste due to their short lifespan and frequent replacement cycles.</p>
                <ul class="sub-main" type="disc">
                    <li class="sub-main"><b>Examples:</b> Irons, toasters, vacuum cleaners, blenders, coffee machines, electric kettles, hairdryers, shavers, curling irons, electric toothbrushes.</li>
                    <li class="sub-main"><b>Hazards:</b> Many small household appliances contain plastic casings, metallic components, batteries, heating elements, and circuit boards. When disposed of improperly, they can release toxic chemicals such as lead, mercury, and cadmium, contaminating soil and water sources.</li>
                </ul>
            </li>
            <li class="main">
                IT and Telecommunication Equipment
                <p class="sub-main">Information technology (IT) and telecommunication devices form one of the fastest-growing categories of e-waste due to the rapid advancement in digital technology. Frequent upgrades, software incompatibility, and consumer demand for new features result in the continuous disposal of old IT devices. These electronic devices contain valuable metals like gold, silver, and copper, but also hazardous materials that require proper recycling.</p>
                <ul class="sub-main" type="disc">
                    <li class="sub-main"><b>Examples:</b> Desktop computers, laptops, tablets, mobile phones, routers, modems, printers, scanners, fax machines, keyboards, computer mice, hard drives, USB drives.</li>
                    <li class="sub-main"><b>Hazards:</b> IT devices contain circuit boards with lead, arsenic, and brominated flame retardants, which are harmful if burned or left in landfills. Lithium-ion batteries in mobile phones and laptops pose a fire and explosion risk if not handled correctly. </li>
                </ul>
            </li>
            <li class="main">
                Consumer Electronics:
                <p class="sub-main">Consumer electronics, also known as brown goods, are entertainment and media devices that have a relatively short lifespan due to technological advancements and consumer preferences. These devices are widely used in households, workplaces, and entertainment industries.</p>
                <ul class="sub-main" type="disc">
                    <li class="sub-main"><b>Examples:</b> Televisions, radios, music systems, DVD players, home theater systems, gaming consoles, remote controls, speakers, headphones, digital cameras, smartwatches.</li>
                    <li class="sub-main"><b>Hazards:</b> Many consumer electronics contain cathode ray tubes (CRTs), leaded glass, mercury-containing screens, and circuit boards, which pose health risks when dismantled improperly. Batteries and plastic components add to environmental pollution. </li>
                </ul>
            </li>
            <li class="main">
                Lighting Equipment:
                <p class="sub-main">Lighting equipment includes electrical devices designed to illuminate spaces in homes, offices, streets, and industrial settings. Many of these lighting devices contain toxic substances such as mercury, phosphor powder, and lead, making their improper disposal hazardous.</p>
                <ul class="sub-main" type="disc">
                    <li class="sub-main"><b>Examples:</b> Refrigerators, washing machines, air conditioners, dishwashers, ovens, water heaters, freezers, microwave ovens.</li>
                    <li class="sub-main"><b>Hazards:</b> Refrigerants in air conditioners and refrigerators contain chlorofluorocarbons (CFCs) and hydrofluorocarbons (HFCs), which are harmful to the ozone layer and contribute to global warming. Washing machines and dishwashers contain electrical circuits, plastic components, and heavy metals that can contaminate the environment. </li>
                </ul>
            </li>
            <li class="main">
                Medical Devices:
                <p class="sub-main">Medical equipment plays a crucial role in healthcare, diagnostics, and patient treatment, but as technology advances, older medical devices become obsolete and contribute to e-waste. These devices often contain radioactive materials, hazardous chemicals, and biohazardous waste that require special disposal procedures.</p>
                <ul class="sub-main" type="disc">
                    <li class="sub-main"><b>Examples:</b> MRI machines, X-ray machines, CT scanners, ECG machines, ultrasound machines, defibrillators, infusion pumps, thermometers, blood pressure monitors.</li>
                    <li class="sub-main"><b>Hazards:</b> X-ray machines and CT scanners contain radioactive substances that can pose serious health risks if not properly managed. Mercury-containing thermometers and blood pressure monitors can release toxic mercury vapor into the air. </li>
                </ul>
            </li>
            <li class="main">
                Electrical and Electronic Tools:
                <p class="sub-main">Electrical tools, also known as power tools, are used in construction, manufacturing, and household repairs. These tools contain motors, batteries, circuit boards, and plastic casings, making their disposal challenging.</p>
                <ul class="sub-main" type="disc">
                    <li class="sub-main"><b>Examples:</b> Drills, saws, electric screwdrivers, welding machines, electric hammers, lawnmowers, sewing machines.</li>
                    <li class="sub-main"><b>Hazards:</b> Many power tools contain rechargeable lithium-ion batteries, which pose a risk of explosion if not disposed of correctly. Some industrial-grade tools contain heavy metals and toxic coatings that can leach into the environment.</li>
                </ul>
            </li>
            <li class="main">
                Batteries and Cables:
                <p class="sub-main">Batteries and electrical cables are essential components of electronic devices, but they also contribute significantly to electronic waste pollution. Batteries, in particular, contain toxic heavy metals, while cables consist of insulated wires made of copper, aluminum, and plastic coatings.</p>
                <ul class="sub-main" type="disc">
                    <li class="sub-main"><b>Examples:</b> Rechargeable and non-rechargeable batteries (lithium-ion, lead-acid, nickel-cadmium), phone chargers, laptop adapters, power strips, extension cords, Ethernet cables, HDMI cables.</li>
                    <li class="sub-main"><b>Hazards:</b> Lead-acid batteries used in vehicles and backup power systems contain lead and sulfuric acid, which are highly toxic. Lithium-ion batteries, commonly found in mobile phones and laptops, pose a risk of fire and explosion if damaged. Electrical cables, when burned, release toxic fumes and dioxins that pollute the air and contribute to respiratory diseases.</li>
                </ul>
            </li>
         </ol>
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
</body>
</html>