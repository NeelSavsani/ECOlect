<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <title>Forgot Password - ECOlect</title>
    <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/forgot.css">
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
                </div>
                <div class="send-button">
                    <a href="#">
                        <button type="submit" id="send-btn" disabled>Send Reset Link</button>
                    </a>
                </div>
                <div class="login-account">
                    <a href="login.php">Have an account? Login</a>
                </div>
                <div class="register-account">
                    Don't have an account?<a href="register.php">Register</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

<script>
    document.getElementById('login_email').addEventListener('input', function(){
        const sendBtn = document.getElementById('send-btn');
        const email = document.getElementById('login_email').value.trim();
        if( email !== "" ){
            sendBtn.style.backgroundColor = "#0077CC";
            sendBtn.disabled = false;
        } else {
            sendBtn.style.backgroundColor = "#808080";
            sendBtn.disabled = true;
        }
    });
</script>

<!-- Firebase JS SDKs -->
<script type="module">
  // ✅ Import Firebase
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js";
  import { getAuth, sendPasswordResetEmail } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-auth.js";

  // ✅ Your Firebase config (replace with your actual config)
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

  // ✅ Initialize Firebase App
  const app = initializeApp(firebaseConfig);

  // ✅ Now you can use Firebase services
  const auth = getAuth(app);

  // ✅ Button Event
  document.getElementById("send-btn").addEventListener("click", (e) => {
    e.preventDefault();
    const email = document.getElementById("login_email").value.trim();

    if (email === "") {
        alert("Please enter a valid email.");
        return;
    }

    sendPasswordResetEmail(auth, email)
        .then(() => {
        alert("✅ Reset link sent to " + email);
        window.location.href = "login.php";
        })
        .catch((error) => {
        alert("❌ Error: " + error.message);
        console.error("Error:", error);
        });
    });
</script>
