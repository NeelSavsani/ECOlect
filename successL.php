<?php
include 'dbconnect.php';
if (isset($_GET['email'])) {
  $email = $_GET['email'];
  $sql = "SELECT Fullname FROM `$logintb` WHERE `Email` = '$email'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $fullname = $row['Fullname'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You!</title>
  <link rel="stylesheet" href="css/success.css">
  <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
</head>
<body>
  <div class="container">
    <div class="checkmark"></div>
    <h2><?php echo "Dear $fullname, you are logged in to ECOLECT"; ?></h2>
    <p></p>
  </div>

  <?php
    echo '<script>
    setTimeout(function() {
      window.location.href = "home.php?email=' .$email. '";
    }, 5000);
     </script>';
    exit();
  ?>
</body>
</html>
