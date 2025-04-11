<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ECOlect Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="admin_css/admin_login.css">
    <title>ECOlect - Admin Login</title>
</head>
<body>
    <div class="login-container">
        <img src="../assets/ECOlet_rm.png" alt="ECOlect Logo" class="logo">
        <h2>Admin Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <div class="password-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <span class="toggle-password" onclick="togglePassword()">Show</span>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const toggleBtn = document.querySelector(".toggle-password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleBtn.textContent = "Hide";
            } else {
                passwordInput.type = "password";
                toggleBtn.textContent = "Show";
            }
        }
    </script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usr = $_POST['username'];
    $psd = $_POST['password'];
    $allowed_users = ["Neel", "Nehanshi", "Keshvi", "Abhishek", "Disha", "Saloni", "Kaushal", "admin"];

    if(in_array($usr, $allowed_users)) {
        $authenticated = true;
    }

    if (isset($authenticated) && $authenticated === true && $psd === "123") {
        header("Location: admin.php?admin=$usr");
        exit;
    } elseif ($usr == "user" && $psd == "456") {
        header("Location: ../login.php");
    } else{
        echo "<script>alert('Invalid username or password')</script>";
    }
}
?>