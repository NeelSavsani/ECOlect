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
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <input type="text" placeholder="Email or Phone" name="login_email" id="login_email">
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
                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="register-account">
                    Don't have an account?<a href="#">Register</a>
                </div>
                <div class="login-button">
                    <a href="#">
                        <button type="submit">Log In</button>
                    </a>
                </div>
            </div>
        </div>
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                include 'dbconnect.php';
                $login_email = $_POST['login_email'];
                $login_pass = $_POST['login_pass'];
                $login_user = explode('@', $login_email)[0];
                if ($login_email != NULL && $login_pass != NULL){
                    $sql = "SELECT * FROM `$table` WHERE `EMAIL` = '$login_email' and `PASSWORD` = '$login_pass'";
                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num == 1){
                        echo "<script>
                                alert('Login Successful, Welcome $login_user, Redirecting you to homepage...');
                                window.location.href = 'home.php';
                            </script>";

                        echo '<meta http-equiv="refresh" content="2;url=home.php">';
                        exit();
                    }else{
                        echo "<script>
                                alert('Invalid login credentials...');
                                document.getElementById('login_email').focus();
                            </script>";
                    }
                }
                else{
                    echo "<script>
                            alert('Email and Password are required!');
                            document.getElementById('login_email').focus();
                    </script>";
                }
            }
        ?>
    </form>


    <!-- =================PASSWORD VISIBILITY======================================== -->
    <script>            
        function togglePassword() {
            let passwordInput = document.getElementById("login_pass");
            let eyeIcon = document.querySelector(".eye-icon i");
            
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }

        function checkInputs() {
            let username = document.getElementById("login_email").value.trim();
            let password = document.getElementById("login_pass").value.trim();
            let loginButton = document.querySelector(".login-button a button");

            if (username !== "" && password !== "") {
                loginButton.style.backgroundColor = "#0077CC"; // Change color when filled
            } else {
                loginButton.style.backgroundColor = "#257C9F"; // Default color
            }
        }

        document.getElementById("login_email").addEventListener("input", checkInputs);
        document.getElementById("login_pass").addEventListener("input", checkInputs);

    </script>
</body>
</html>