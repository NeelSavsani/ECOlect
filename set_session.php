<?php
session_start();
if (isset($_POST['email'])) {
    $_SESSION['user_email'] = $_POST['email'];
    echo "Session set successfully";
} else {
    echo "Session not set";
}
?>