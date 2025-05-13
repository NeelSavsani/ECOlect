<?php
include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    // $newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT); // Hash password before storing
    $newPassword = $_POST['newPassword'];

    $stmt = $conn->prepare("UPDATE `$logintb` SET Password = ? WHERE Email = ?");
    $stmt->bind_param("ss", $newPassword, $email);

    if ($stmt->execute()) {
        echo "Password updated successfully!";
    } else {
        echo "Error updating password.";
    }

    $stmt->close();
    $conn->close();
}
?>
