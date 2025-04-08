<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $_SESSION["user_email"] = $_POST["email"];
    echo "Session set successfully";
} else {
    echo "Failed to set session";
}
?>