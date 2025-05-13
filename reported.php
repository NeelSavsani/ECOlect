<?php
session_start();
include 'dbconnect.php';

if (isset($_GET['email'])) {
    $user_email = $_GET['email']; // Fetch from URL parameter
} elseif (isset($_SESSION['user_email'])) {
    $user_email = $_SESSION['user_email']; // Default to session email
} else {
    header("Location: login.php"); // Redirect if no email is found
    exit();
}
echo "<br>";
$fullname = '';
$sql = "SELECT * FROM `$logintb` WHERE EMAIL = '$user_email'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $fullname = $row['Fullname'];
} else {
    echo "error"; // Instead of full message
    exit;
}

$sql = "SELECT * FROM `$ewastetb` WHERE FULLNAME = '$fullname'";
$result = mysqli_query($conn, $sql);
$nor = mysqli_num_rows($result)+1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOlect - Reported E-Waste</title>
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="admin/admin_css/pagination.css">
    <link rel="stylesheet" href="css/reported.css">
</head>
<body>
    <button class="back-button" onclick="window.location.href='home.php?email<?php echo $user_email;?>';">
        <i class="fa-solid fa-arrow-left"></i> Back
    </button>
    <div class="container">
        <h1>Welcome, <?php echo $fullname; ?></h1>
        <p>You have Reported <strong><?php echo $nor-1;?></strong> E-Waste on our platform ECOlect! &#127881;</p>
        <?php if ($nor > 0): ?>
            <div class="table-wrapper">
                <table id="data-table">
                    <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Type Of E-Waste</th>
                        <th>Name of E-Waste</th>
                        <th>Quantity of E-Waste</th>
                        <th>Address</th>
                        <th>Reported DateTime</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 1; ?>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo $row['Type']; ?></td>
                            <td><?php echo $row['EName']; ?></td>
                            <td><?php echo $row['Quantity']; ?></td>
                            <td><?php echo $row['Address']; ?></td>
                            <td><?php echo $row['Datetime']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
    <div class="table-pagination">
        <div class="pagination-info" id="pagination-info">Loading...</div>
        <div class="pagination-controls">
            <button class="pagination-button" id="prev-button">Previous</button>
            <div id="page-numbers"></div>
            <button class="pagination-button" id="next-button">Next</button>
        </div>
    </div>
    <script src="admin/admin_js/pagination.js"></script>
</body>
</html>