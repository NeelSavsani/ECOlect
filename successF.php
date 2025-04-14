<?php
if (isset($_GET['name'])) {
  $name = $_GET['name'];
  $user_email = $_GET['email'];
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
    <h2><?php echo "Thank You $name for your feedback"; ?></h2>
    <p></p>
  </div>

  <?php
    echo '<script>
      setTimeout(function() {
        window.location.href = "nav/about.php?email=' . $user_email . '";
      }, 3000);
    </script>';
  ?>
</body>
</html>
