<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Form | ECOlect</title>
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="feedback-container">
        <h2>We value your Feedback! 🌱</h2>
        <form method="POST">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" id="fullname" required>

            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" required>

            <label for="rating">Rating</label>
            <select name="rating" id="rating" required>
                <option value="-1">Select</option>
                <option value="Excellent">Excellent 🌟🌟🌟🌟🌟</option>
                <option value="Very Good">Very Good 🌟🌟🌟🌟</option>
                <option value="Good">Good 🌟🌟🌟</option>
                <option value="Average">Average 🌟🌟</option>
                <option value="Poor">Poor 🌟</option>
            </select>

            <label for="comments">Your Comments</label>
            <textarea name="comments" id="comments" rows="5" required></textarea>

            <button type="submit">Submit Feedback</button>
        </form>
    </div>
</body>
</html>
<?php
include 'dbconnect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];
    $sql = "INSERT INTO `$database`.`$ftable`(`Sr. No.`, `Name`, `Email`, `Rating`, `Feedback`) VALUES ('', '$name', '$email', '$rating', '$comments')";
    $result = mysqli_query($conn, $sql);
}
?>