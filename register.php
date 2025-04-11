<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <title>Register - ECOlect</title>
</head>
<body>
    <form method="post">
        <div class="container">
            <div class="logo">
                <div class="icon">
                    <img src="assets/ECOlet_rm.png" alt="">
                </div>
                <div class="logo-name">
                    ECOLECT
                </div>
            </div>
            <div class="box">
                <h1 class="heading">Create an Account</h1>
                <div class="credentials">
                    <div class="username-div">
                        <div class="user-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <input type="text" placeholder="Full Name" name="fullname" id="fullname">
                    </div>
                    <div class="email-div">
                        <div class="email-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <input type="email" placeholder="Email Id" name="email" id="email">
                    </div>
                    <div class="phone-div">
                        <div class="phone-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <input type="number" placeholder="Phone Number" name="phone" id="phone">
                    </div>
                    <div class="password-div">
                        <div class="pass-icon">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" placeholder="Password" name="pass" id="pass">
                        <div class="eye-icon-pass" id="pi" onclick="togglePassword()">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="confirm-div">
                        <div class="confirm-icon">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" Placeholder="Confirm Password" name="confirm" id="confirm">
                        <div class="eye-icon-confirm" id="ci" onclick="togglePassword()">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="tnc">
                    <input type="checkbox" name="tnc_check" id="tnc_check"> I agree to the <a href="T&C ECOlect.pdf" target="blank">Terms & Conditions</a>
                </div>
                <div class="register-button">
                    <a href="#">
                        <button type="submit" id="register" disabled>Register</button>
                    </a>
                </div>
                <div class="login-account">
                    Have an account? <a href="login.php" class="login_class">Login</a>
                </div>
            </div>
        </div>
    </form>

    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js";
        import { getAuth, createUserWithEmailAndPassword, sendEmailVerification } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-auth.js";

        const firebaseConfig = {
            apiKey: "AIzaSyBPkvRug6sTUnhVxX8P3K5lFQS8lzKrss4",
            authDomain: "authtest-2d91d.firebaseapp.com",
            databaseURL: "https://authtest-2d91d-default-rtdb.firebaseio.com",
            projectId: "authtest-2d91d",
            storageBucket: "authtest-2d91d.appspot.com",
            messagingSenderId: "751675073643",
            appId: "1:751675073643:web:3de96ea8c4ee726b64bd2e",
            measurementId: "G-ZN3B90NH66"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const auth = getAuth(app);

        document.getElementById("register").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent form from submitting by default

            const fullname = document.getElementById("fullname").value.trim();
            const email = document.getElementById("email").value.trim();
            const phone = document.getElementById("phone").value.trim();
            const password = document.getElementById("pass").value.trim();
            const confirmPassword = document.getElementById("confirm").value.trim();

            if (!fullname || !email || !phone || !password || !confirmPassword) {
                alert("⚠ Please fill all fields.");
                return;
            }

            if (password !== confirmPassword) {
                alert("⚠ Passwords do not match.");
                return;
            }

            if (phone.length !== 10 || isNaN(phone)) {
                alert("⚠ Phone number must be exactly 10 digits.");
                return;
            }

            createUserWithEmailAndPassword(auth, email, password)
                .then((userCredential) => {
                    const user = userCredential.user;

                    sendEmailVerification(user).then(() => {
                        alert("✅ Verification email sent! Check your inbox.");

                        // Send data to PHP via AJAX
                        fetch("registerS.php", {
                            method: "POST",
                            headers: { "Content-Type": "application/x-www-form-urlencoded" },
                            body: `fullname=${fullname}&email=${email}&phone=${phone}&password=${password}`
                        })
                        .then(response => response.text())
                        .then(data => console.log("Server Response:", data));

                        setTimeout(() => {
                            window.location.href = "login.php";
                        }, 3000);
                    });
                })
                .catch((error) => {
                    alert("❌ Error: " + error.message);
                });
        });


    </script>

    <script src="js/togglePasswordR.js"></script>
    <script src="js/updateButtonState.js"></script>
</body>
</html>
