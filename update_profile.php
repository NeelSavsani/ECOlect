<?php
session_start();
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $pincode = trim($_POST['pincode']);
    $email = trim($_POST['email']); // Unique identifier

    // Validate input
    if (empty($fullname) || empty($phone) || empty($address) || empty($pincode) || empty($email)) {
        echo "All fields are required.";
        exit();
    }

    // Update query
    $stmt = $conn->prepare("UPDATE `$logintb` SET Fullname = ?, Phone = ?, Address = ?, Pincode = ? WHERE Email = ?");
    $stmt->bind_param("sssss", $fullname, $phone, $address, $pincode, $email);

    if ($stmt->execute()) {
        echo "✅ Profile updated successfully!";
    } else {
        echo "❌ Failed to update profile.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request!";
}
?>
