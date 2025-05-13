<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];
    $user_email = $_GET['user_email'];

    $sql = "INSERT INTO `$database`.`$feedbacktb`(`Sr. No.`, `Name`, `Email`, `Rating`, `Feedback`) 
            VALUES ('', '$name', '$email', '$rating', '$comments')";
    $result = mysqli_query($conn, $sql);

    header("Location: successF.php?name=$name&email=$user_email");
    exit();
}
?>
