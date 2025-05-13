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
         <h1 class="main">Types Of E-Waste: A Detailed Classification Based on Composition and Function</h1>
         <p class="main">E-waste, or electronic waste, encompasses a vast range of electrical and electronic devices that have reached the end of their useful life. Due to the complexity of electronic products, e-waste can be classified into various categories based on their composition, function, and intended use. Each category consists of devices and equipment that contribute to the growing problem of e-waste, each posing unique environmental and health hazards if not managed properly. Below is an in-depth classification of e-waste, including examples and explanations of each type:</p>
        <div class="e-waste-item">
            <ul class="main">
                <li class="main">
                    Large Household Appliances:
                    <p class="sub-main">Large household appliances, also known as white goods, are some of the most significant contributors to e-waste due to their size, weight, and widespread use in homes and commercial spaces. These appliances are primarily used for food storage, cleaning, heating, and cooling. Most of them contain metallic components, plastic parts, electrical circuits, and refrigerants, some of which may be hazardous if not disposed of correctly.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Refrigerators, washing machines, air conditioners, dishwashers, ovens, water heaters, freezers, microwave ovens.</li>
                        <li class="sub-main"><b>Hazards:</b> Refrigerants in air conditioners and refrigerators contain chlorofluorocarbons (CFCs) and hydrofluorocarbons (HFCs), which are harmful to the ozone layer and contribute to global warming. Washing machines and dishwashers contain electrical circuits, plastic components, and heavy metals that can contaminate the environment. </li>
                    </ul>
                </li>
            </ul>
            <img src="https://5.imimg.com/data5/ANDROID/Default/2022/3/UL/AV/ZF/31924029/product-jpeg.jpg" alt="Refrigerator" class="e-waste-image">
        </div>
        <div class="e-waste-item">
            <img src="https://5.imimg.com/data5/SELLER/Default/2024/3/396397634/GE/NG/MS/3749094/electric-iron-ginni.jpg" alt="Iron" class="e-waste-image">
            <ul class="main">
                <li class="main">
                    Small Household Appliances:
                    <p class="sub-main">This category consists of compact electrical devices commonly used for cooking, cleaning, grooming, and personal care. These appliances are found in almost every household and, despite their smaller size, collectively contribute to significant amounts of e-waste due to their short lifespan and frequent replacement cycles.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Irons, toasters, vacuum cleaners, blenders, coffee machines, electric kettles, hairdryers, shavers, curling irons, electric toothbrushes.</li>
                        <li class="sub-main"><b>Hazards:</b> Many small household appliances contain plastic casings, metallic components, batteries, heating elements, and circuit boards. When disposed of improperly, they can release toxic chemicals such as lead, mercury, and cadmium, contaminating soil and water sources.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="e-waste-item">
            <ul class="main">
                <li class="main">
                    Consumer Electronics:
                    <p class="sub-main">Consumer electronics, also known as brown goods, are entertainment and media devices that have a relatively short lifespan due to technological advancements and consumer preferences. These devices are widely used in households, workplaces, and entertainment industries.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Televisions, radios, music systems, DVD players, home theater systems, gaming consoles, remote controls, speakers, headphones, digital cameras, smartwatches.</li>
                        <li class="sub-main"><b>Hazards:</b> Many consumer electronics contain cathode ray tubes (CRTs), leaded glass, mercury-containing screens, and circuit boards, which pose health risks when dismantled improperly. Batteries and plastic components add to environmental pollution. </li>
                    </ul>
                </li>
            </ul>
            <img src="https://4.imimg.com/data4/CM/DW/ANDROID-48171918/product.jpeg" alt="Television" class="e-waste-image">
        </div>
        <div class="e-waste-item">
            <img src="https://5.imimg.com/data5/ANDROID/Default/2023/5/308010653/WX/FI/ZP/30595398/product-jpeg-500x500.jpg" alt="Laptop" class="e-waste-image">
            <ul class="main">
                <li class="main">
                    IT and Telecommunication Equipment
                    <p class="sub-main">Information technology (IT) and telecommunication devices form one of the fastest-growing categories of e-waste due to the rapid advancement in digital technology. Frequent upgrades, software incompatibility, and consumer demand for new features result in the continuous disposal of old IT devices. These electronic devices contain valuable metals like gold, silver, and copper, but also hazardous materials that require proper recycling.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Desktop computers, laptops, tablets, mobile phones, routers, modems, printers, scanners, fax machines, keyboards, computer mice, hard drives, USB drives.</li>
                        <li class="sub-main"><b>Hazards:</b> IT devices contain circuit boards with lead, arsenic, and brominated flame retardants, which are harmful if burned or left in landfills. Lithium-ion batteries in mobile phones and laptops pose a fire and explosion risk if not handled correctly. </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="e-waste-item">
            <ul class="main">
                <li class="main">
                    Lighting Equipment:
                    <p class="sub-main">Lighting equipment includes electrical devices designed to illuminate spaces in homes, offices, streets, and industrial settings. Many of these lighting devices contain toxic substances such as mercury, phosphor powder, and lead, making their improper disposal hazardous.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Refrigerators, washing machines, air conditioners, dishwashers, ovens, water heaters, freezers, microwave ovens.</li>
                        <li class="sub-main"><b>Hazards:</b> Refrigerants in air conditioners and refrigerators contain chlorofluorocarbons (CFCs) and hydrofluorocarbons (HFCs), which are harmful to the ozone layer and contribute to global warming. Washing machines and dishwashers contain electrical circuits, plastic components, and heavy metals that can contaminate the environment. </li>
                    </ul>
                </li>
            </ul>
            <img src="https://5.imimg.com/data5/ANDROID/Default/2022/7/VX/WC/VN/149207443/product-500x500.jpg" alt="Washing Machine" class="e-waste-image">
        </div>
        <div class="e-waste-item">
            <img src="https://5.imimg.com/data5/SELLER/Default/2024/11/465507556/BZ/CK/UX/96904267/bosch-electric-drill-500x500.jpg" alt="Drill Machine" class="e-waste-image">
            <ul class="main">
                <li class="main">
                    Electrical and Electronic Tools:
                    <p class="sub-main">Electrical tools, also known as power tools, are used in construction, manufacturing, and household repairs. These tools contain motors, batteries, circuit boards, and plastic casings, making their disposal challenging.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Drills, saws, electric screwdrivers, welding machines, electric hammers, lawnmowers, sewing machines.</li>
                        <li class="sub-main"><b>Hazards:</b> Many power tools contain rechargeable lithium-ion batteries, which pose a risk of explosion if not disposed of correctly. Some industrial-grade tools contain heavy metals and toxic coatings that can leach into the environment.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="e-waste-item">
            <ul class="main">
                <li class="main">
                    Medical Devices:
                    <p class="sub-main">Medical equipment plays a crucial role in healthcare, diagnostics, and patient treatment, but as technology advances, older medical devices become obsolete and contribute to e-waste. These devices often contain radioactive materials, hazardous chemicals, and biohazardous waste that require special disposal procedures.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> MRI machines, X-ray machines, CT scanners, ECG machines, ultrasound machines, defibrillators, infusion pumps, thermometers, blood pressure monitors.</li>
                        <li class="sub-main"><b>Hazards:</b> X-ray machines and CT scanners contain radioactive substances that can pose serious health risks if not properly managed. Mercury-containing thermometers and blood pressure monitors can release toxic mercury vapor into the air. </li>
                    </ul>
                </li>
            </ul>
            <img src="https://5.imimg.com/data5/SELLER/Default/2024/2/384276882/UU/IO/ZK/54366076/siemens-magnetom-essenza-1-5-t-mri-machine-500x500.jpg" alt="MRI Machine" class="e-waste-image">
        </div>
        <div class="e-waste-item">
            <img src="https://5.imimg.com/data5/ANDROID/Default/2021/5/VZ/VJ/MK/7966465/product-jpeg.jpg" alt="ATM Machine" class="e-waste-image">
            <ul class="main">
                <li class="main">
                    Automatic Dispensers:
                    <p class="sub-main">Automatic dispensers are electronic machines that distribute products or services automatically. They are commonly found in public places and workplaces.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> ATMs, vending machines, water dispensers, ticket machines..</li>
                        <li class="sub-main"><b>Hazards:</b> These machines contain circuit boards, screens, and metal parts, which contribute to electronic waste if improperly handled.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="e-waste-item">
            <ul class="main">
                <li class="main">
                    Toys, Leisure, and Sports Equipment:
                    <p class="sub-main">Electronic toys and sports equipment are increasingly popular, but they contribute significantly to e-waste due to their short lifespan and frequent disposal.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Remote-controlled cars, drones, gaming consoles, electric bicycles, smart fitness equipment.</li>
                        <li class="sub-main"><b>Hazards:</b>  Many toys contain small batteries with lead and lithium, which can leak hazardous chemicals into the environment.</li>
                    </ul>
                </li>
            </ul>
            <img src="https://5.imimg.com/data5/SELLER/Default/2023/11/358015484/EL/EN/JM/188297556/kids-remote-control-car-500x500.jpg" alt="Remote Controlled Car" class="e-waste-image">
        </div>
        <div class="e-waste-item">
            <img src="https://4.imimg.com/data4/LA/IW/ANDROID-50268126/product-500x500.jpeg" alt="Mobile Charger" class="e-waste-image">
            <ul class="main">
                <li class="main">
                    Batteries and Accumulators:
                    <p class="sub-main">Batteries and electrical cables are essential components of electronic devices, but they also contribute significantly to electronic waste pollution. Batteries, in particular, contain toxic heavy metals, while cables consist of insulated wires made of copper, aluminum, and plastic coatings.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Rechargeable and non-rechargeable batteries (lithium-ion, lead-acid, nickel-cadmium), phone chargers, laptop adapters, power strips, extension cords, Ethernet cables, HDMI cables.</li>
                        <li class="sub-main"><b>Hazards:</b> Lead-acid batteries used in vehicles and backup power systems contain lead and sulfuric acid, which are highly toxic. Lithium-ion batteries, commonly found in mobile phones and laptops, pose a risk of fire and explosion if damaged. Electrical cables, when burned, release toxic fumes and dioxins that pollute the air and contribute to respiratory diseases.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="e-waste-item">
            <ul class="main">
                <li class="main">
                    Cables and Wires:
                    <p class="sub-main">Cables and wires are used in electrical and communication systems. They often contain valuable metals that can be recycled.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Power cords, USB cables, ethernet cables, coaxial cables.</li>
                        <li class="sub-main"><b>Hazards:</b> Many cables contain PVC, which releases toxic dioxins when burned. Some wires have lead or other metals that can harm the environment.</li>
                    </ul>
                </li>
            </ul>
            <img src="https://5.imimg.com/data5/SELLER/Default/2025/1/478765057/ZC/KY/QE/71855595/cat-8-ethernet-cable-500x500.jpg" alt="Ethernet Cable" class="e-waste-image">
        </div>
        <div class="e-waste-item">
            <img src="https://5.imimg.com/data5/ANDROID/Default/2022/7/XA/PS/HX/28436273/img-20220718-wa0002-jpg-500x500.jpg" alt="Generator" class="e-waste-image">
            <ul class="main">
                <li class="main">
                    Industrial Electronics:
                    <p class="sub-main">These are large-scale electronic devices used in factories, power plants, and industrial automation.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Control panels, generators, industrial computers, robotic systems.</li>
                        <li class="sub-main"><b>Hazards:</b> Industrial electronics contain large amounts of hazardous materials, including heavy metals and flame retardants, which can cause soil and water contamination.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="e-waste-item">
            <ul class="main">
                <li class="main">
                    Security and Surveillance Equipment:
                    <p class="sub-main">Security devices are used to monitor and protect properties and individuals.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> CCTV cameras, alarm systems, biometric scanners, motion sensors.</li>
                        <li class="sub-main"><b>Hazards:</b>  Surveillance equipment contains plastic, metal, and electronic components that contribute to e-waste. Some systems have rechargeable lithium-ion batteries that pose fire risks.</li>
                    </ul>
                </li>
            </ul>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjswfCUthhH2dNxWxQ7aHVpSlDBdNC9OlHRA&s" alt="CCTV Camera" class="e-waste-image">
        </div>
        <div class="e-waste-item">
            <img src="https://5.imimg.com/data5/ANDROID/Default/2023/1/DH/YA/IR/147418218/product-jpeg.jpg" alt="Smartwatch" class="e-waste-image">
            <ul class="main">
                <li class="main">
                    Wearable Technology:
                    <p class="sub-main">Wearable electronics are smart devices worn on the body for various purposes, such as fitness tracking and communication.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Smartwatches, fitness bands, smart glasses, hearing aids.</li>
                        <li class="sub-main"><b>Hazards:</b> Wearables contain small batteries and electronic components that can leak harmful chemicals into the environment.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="e-waste-item">
            <ul class="main">
                <li class="main">
                    Scientific and Laboratory Equipment:
                        <p class="sub-main">These devices are used in research, testing, and education. They are often highly specialized and require proper disposal methods.</p>
                        <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Microscopes, spectrometers, centrifuges, oscilloscopes.</li>
                        <li class="sub-main"><b>Hazards:</b> Some laboratory equipment contains mercury, radioactive materials, and other hazardous chemicals that can be dangerous if released into the environment.</li>
                    </ul>
                </li>
            </ul>
            <img src="https://5.imimg.com/data5/SELLER/Default/2023/7/327086495/KP/LM/FF/12569182/compound-microscope-2.jpeg" alt="Microscope" class="e-waste-image">
        </div>
        <div class="e-waste-item">
            <img src="https://5.imimg.com/data5/QO/WR/IE/ANDROID-86983096/1558681091263-jpg-500x500.jpg" alt="Solar Panel" class="e-waste-image">
            <ul class="main">
                <li class="main">
                    Energy Generation and Storage Devices:
                    <p class="sub-main">These devices are used to produce, store, and manage electricity.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> Solar panels, inverters, batteries, fuel cells, uninterruptible power supplies (UPS).</li>
                        <li class="sub-main"><b>Hazards:</b> Solar panels contain toxic heavy metals such as cadmium and lead. Batteries in energy storage systems can leak hazardous chemicals if damaged or improperly discarded.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="e-waste-item">
            <ul class="main">
                <li class="main">
                    Gaming and Virtual Reality Devices:
                    <p class="sub-main">Gaming and VR devices are entertainment gadgets with increasing popularity but also contribute to e-waste.</p>
                    <ul class="sub-main" type="circle">
                        <li class="sub-main"><b>Examples:</b> VR headsets, gaming controllers, gaming consoles, arcade machines.</li>
                        <li class="sub-main"><b>Hazards:</b> Gaming devices contain circuit boards with lead and other hazardous substances. Lithium-ion batteries in controllers and VR headsets pose a risk of explosion or leakage.</li>
                    </ul>
                </li>
            </ul>
            <img src="https://5.imimg.com/data5/SELLER/Default/2023/12/369644131/ZQ/MB/VV/157184861/2-4-g-wireless-controller-gamepad.jpeg" alt="Gaming Controller" class="e-waste-image">
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

