<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'dbconnect.php';

    $table = 'login_credentials';  // Replace with your actual table name

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];

    // Insert new user (Remove SrNO if it's Auto Increment)
    $sql = "INSERT INTO `$table` (`FullName`,`Email`, `Phone`, `Password`, `DateTime`) 
            VALUES ('$fullname', '$email', '$phone', '$pass', current_timestamp())";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "User registered in MySQL.";
    } else {
        echo "Error: Could not store user.";
    }
}
?>
