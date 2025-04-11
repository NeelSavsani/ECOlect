<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <title>Login - ECOlect</title>
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
                <div class="profile">
                    <img src="assets/Profile.png" alt="">
                </div>
                <div class="credentials">
                    <div class="username-div">
                        <div class="user-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <input type="email" placeholder="Email" name="login_email" id="login_email">
                    </div>
                    <div class="password-div">
                        <div class="pass-icon">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" placeholder="Password" name="login_pass" id="login_pass">
                        <div class="eye-icon" onclick="togglePassword()">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="login-button">
                    <a href="#">
                        <button type="submit" id="login-btn" disabled>Log In</button>
                    </a>
                </div>
                <div class="forgot-password">
                    <a href="forgot.php">Forgot Password?</a>
                </div>
                <div class="register-account">
                    Don't have an account?<a href="register.php">Register</a>
                </div>
            </div>
        </div>
    </form>

    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js";
        import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-auth.js";

        const firebaseConfig = {
            apiKey: "AIzaSyBPkvRug6sTUnhVxX8P3K5lFQS8lzKrss4",
            authDomain: "authtest-2d91d.firebaseapp.com",
            databaseURL: "https://authtest-2d91d-default-rtdb.firebaseio.com",
            projectId: "authtest-2d91d",
            storageBucket: "authtest-2d91d.firebasestorage.app",
            messagingSenderId: "751675073643",
            appId: "1:751675073643:web:08a7d5af38db205e64bd2e",
            measurementId: "G-1XQVN4FN3P"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const auth = getAuth(app);

        document.getElementById("login-btn").addEventListener("click", function (event) {
            event.preventDefault(); // Prevent form submission
            const email = document.getElementById("login_email").value;
            const password = document.getElementById("login_pass").value;

            if (!email || !password) {
                alert("⚠ Please enter email and password.");
                return;
            } else if (email === "admin" && password === "123") {
                window.location.href = "admin/admin_login.php";
            }

            signInWithEmailAndPassword(auth, email, password)
                .then((userCredential) => {
                    const user = userCredential.user;
                    console.log("User logged in successfully:", user);
                    localStorage.setItem("user_email", user.email);

                    return fetch("set_session.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/x-www-form-urlencoded" },
                        body: "email=" + encodeURIComponent(user.email)
                    });
                })
                .then(response => response.text())
                .then(data => {
                    console.log("Session Set Response:", data);
                    if (data.includes("Session set successfully")) {
                        alert("✅ Login successful! Redirecting...");
                        setTimeout(() => {
                            window.location.href = "home.php?email=" + encodeURIComponent(localStorage.getItem("user_email"));
                        }, 2000);
                    } else {
                        alert("❌ Session was not set correctly. Please try again.");
                    }
                })
                .catch((error) => {
                    console.error("Firebase Auth Error Code:", error.code);
                    console.error("Firebase Auth Error Message:", error.message);
                    alert("❌ Error: " + error.message);
                });
            });
    </script>
    <script src="js/togglePassword.js"></script>
    <script src="js/checkInputs.js"></script>
</body>
</html>