<?php
session_start();
include 'dbconnect.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $_SESSION['user_email'] = $_POST['email'];
    $_SESSION['user_password'] = $_POST['password']; // store password if really needed (not recommended)
    $user_email = $_SESSION['user_email'];
    $user_password = $_SESSION['user_password'];
    $sql = "UPDATE `$logintb` SET Password = '$user_password' WHERE Email = '$user_email'";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Updated";
    }else{
        echo "Not updated";
    }
    echo "Session set successfully";
} else {
    echo "Missing email or password";
}
?>
