<?php
if(isset($_GET['email'])){
    $user_email = $_GET['email'];
}
?>

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
            <?php echo '<form action="feedbackF.php?user_email='.$user_email.'" method="post">'; ?>
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" id="fullname" required>
            <label for="email">Email Address</label>
            <input type="email" name="email" value="<?php echo $user_email; ?>" id="email" required>
            <label for="rating">Rating</label>
            <select name="rating" id="rating" required>
                <option value="">Select</option>
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
