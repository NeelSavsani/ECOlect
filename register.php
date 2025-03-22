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
                    <input type="checkbox" name="tnc_check" id="tnc_check"> I agree to the <a href="#">Terms & Conditions</a>
                </div>
                <div class="register-button">
                    <a href="#">
                        <button type="submit" disabled>Register</button>
                    </a>
                </div>
                <div class="login-account">
                    Have an account? <a href="login.php" class="login_class">Login</a>
                </div>
            </div>
        </div>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            include 'dbconnect.php';
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $pass = $_POST['pass'];
            $confirm = $_POST['confirm'];
            $user = explode(' ', $fullname)[0];
            if ($pass == $confirm && $pass != NULL) {
                if (strlen($phone) == 10){
                    $sql = "SELECT * FROM `$table` WHERE `PHONE` = '$phone'";
                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num == 1){
                        echo "<script>
                                alert('Account already exists. Log In');
                                document.querySelector('.login_class').focus();
                        </script>";
                    } else {
                        $sql = "INSERT INTO `$table` (`User_ID`, `Fullname`, `Phone`, `Password`, `Date-Time`) VALUES ('', '$fullname', '$phone', '$pass', current_timestamp())";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            echo "<script>
                                    alert('$fullname, your account created successfully..!!');
                                    window.location.href = 'login.php';
                            </script>";
                        }
                    }
                } else {
                    echo "<script>
                        alert('Phone number must be of 10 digits');
                        document.getElementById('phone').focus();
                    </script>";
                }
            }
        }
    ?>

    <script>
        function togglePassword() {
            let passwordInput = document.getElementById("pass");
            let confirmInput = document.getElementById("confirm");
            let passIcon = document.querySelector(".eye-icon-pass i");
            let confirmIcon = document.querySelector(".eye-icon-confirm i");
            
            if (passwordInput.type === "password" && confirmInput.type === "password") {
                passwordInput.type = "text";
                confirmInput.type = "text";
                passIcon.classList.remove("fa-eye");
                passIcon.classList.add("fa-eye-slash");
                confirmIcon.classList.remove("fa-eye");
                confirmIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                confirmInput.type = "password";
                passIcon.classList.remove("fa-eye-slash");
                passIcon.classList.add("fa-eye");
                confirmIcon.classList.remove("fa-eye-slash");
                confirmIcon.classList.add("fa-eye");
            }
        }

        function updateButtonState() {
            let username = document.getElementById("fullname").value.trim();
            let phone = document.getElementById("phone").value.trim();
            let password = document.getElementById("pass").value.trim();
            let confirm = document.getElementById("confirm").value.trim();
            let registerButton = document.querySelector(".register-button button");
            let check = document.getElementById("tnc_check").checked;

            if (username !== "" && phone !== "" && password !== "" && confirm !== "" && check) {
                registerButton.style.backgroundColor = "#0077CC"; // Active color
                registerButton.disabled = false; // Enable button
            } else {
                registerButton.style.backgroundColor = "#257C9F"; // Inactive color
                registerButton.disabled = true; // Disable button
            }
        }

        // Get all input fields and checkbox
        let inputs = document.querySelectorAll("#fullname, #phone, #pass, #confirm, #tnc_check");

        // Add event listeners to all input fields and checkbox
        inputs.forEach(input => {
            input.addEventListener("input", updateButtonState);
        });

        document.getElementById("tnc_check").addEventListener("change", updateButtonState);

    </script>
</body>
</html>
