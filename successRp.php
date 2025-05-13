<?php
include 'dbconnect.php';
if (isset($_GET['ename']) && isset($_GET['email'])) {
  $ename = $_GET['ename'];
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
</head>
<body>
  <div class="container">
    <div class="checkmark"></div>
    <h2><?php echo "Thank You $fullname for reporting E-Waste on ECOLECT <br> Your E-Waste: $ename has been Reported Successfully!!"; ?></h2>
    <p></p>
  </div>

  <?php
    echo '<script>
      setTimeout(function() {
        window.location.href = "reported.php?email=' . $email . '";
      }, 5000);
    </script>';
    exit();
  ?>
</body>
</html>
