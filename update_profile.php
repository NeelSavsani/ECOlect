<?php
session_start();
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_email = $_POST['user_email'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $address = $_POST['address']; // If stored in DB, modify accordingly.

    // Update query
    $sql = "UPDATE `login_credentials` SET Fullname = ?, Phone = ? WHERE Email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $fullname, $phone, $user_email);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['message'] = "Profile updated successfully!";
    } else {
        $_SESSION['error'] = "Error updating profile.";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    header("Location: profile.php"); // Redirect back to profile
    exit();
}
?>
