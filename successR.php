<?php
if (isset($_GET['name'])) {
  $name = $_GET['name'];
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
    <h2><?php echo "Thank You $name for registeration to our platoform ECOLECT"; ?></h2>
    <p></p>
  </div>

  <?php
    echo '<script>
      setTimeout(function() {
        window.location.href = "login.php";
      }, 5000);
    </script>';
    exit();
  ?>
</body>
</html>
