<?php
include '../dbconnect.php';
$admin_name = isset($_GET['admin']) ? htmlspecialchars($_GET['admin']) : "Admin";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];

    $update_sql = "UPDATE `$table` SET `Fullname`='$fullname', `Email`='$email', `Phone`='$phone', `Password`='$password', `Address`='$address', `Pincode`='$pincode' WHERE `Sr.NO`='$id'";
    mysqli_query($conn, $update_sql);
}

$sql = "SELECT * FROM `$logintb`";
$result = mysqli_query($conn, $sql);
$nor = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin Panel</title>
    <link rel='shortcut icon' href='../assets/favicon_io/favicon.ico' type='image/x-icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel='stylesheet' href='admin_css/admin.css'>
    <link rel="stylesheet" href="admin_css/pagination.css">
</head>
<body>
    <button class="logout-button" onclick="window.location.href = 'admin_login.php';">
        LogOut <i class="fa-solid fa-power-off"></i>
    </button>
    <div id="sidebar" class="sidebar">
        <ul>
            <li class="active"><a href="#"><i class="fa-solid fa-users-viewfinder"></i></i>&nbsp;&nbsp; Users</a></li>
            <!-- <li><a href="admin_report.php"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp; Reported E-Waste</a></li> -->
            <li><a href="admin_report.php?admin=<?php echo urlencode($admin_name);?>"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Reported E-Waste</a></li>
            <li><a href="admin_feedback.php?admin=<?php echo urlencode($admin_name);?>"><i class="fa-solid fa-comment"></i>&nbsp;&nbsp;Reported Feedback</a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
        </ul>
    </div>
    <div class="hamburger" onclick="toggleSidebar()">
        <i id="hamburger-icon" class="fa-solid fa-bars"></i>
    </div>
    <div class='container'>
    <h1>Welcome, <?php echo $admin_name;?></h1>
        <p><strong><?php echo $nor-2; ?></strong> users have registered in our portal!</p>
        <?php if ($nor > 0): ?>
            <div class='table-wrapper'>
                <table id="data-table">
                    <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Pincode</th>
                        <th>Registration Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 1; ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo $row['Fullname']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Phone']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><?php echo $row['Address']; ?></td>
                            <td><?php echo $row['Pincode']; ?></td>
                            <td><?php echo $row['DateTime']; ?></td>
                            <td>
                                <div class='action-buttons'>
                                    <button class='btn-success' onclick="openModal(
                                    '<?php echo addslashes($row['Sr.NO']); ?>',
                                    '<?php echo addslashes($row['Fullname']); ?>',
                                    '<?php echo addslashes($row['Email']); ?>',
                                    '<?php echo addslashes($row['Phone']); ?>',
                                    '<?php echo addslashes($row['Password']); ?>',
                                    '<?php echo addslashes($row['Address']); ?>',
                                    '<?php echo addslashes($row['Pincode']); ?>')"><i class="fa-solid fa-pen"></i></button>
                                    <button class='btn-danger'><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
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

    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <form method="POST">
                <input type="hidden" name="id" id="edit-id">
                <input type="text" name="fullname" id="edit-fullname" placeholder="Fullname" required>
                <input type="email" name="email" id="edit-email" placeholder="Email" required>
                <input type="text" name="phone" id="edit-phone" placeholder="Phone" required>
                <div class="password-wrapper">
                    <input type="password" name="password" id="edit-password" placeholder="Password" required>
                    <i class="fa-solid fa-eye toggle-password" id="togglePasswordIcon" onclick="togglePassword()"></i>
                </div>
                <textarea name="address" id="edit-address" placeholder="Address" rows="4" required></textarea>
                <input type="text" name="pincode" id="edit-pincode" placeholder="Pincode" required>
                <div class="modal-buttons">
                    <button type="submit" name="update" class="submit-btn"><i class="fa-solid fa-check"></i></button>
                    <button type="button" name="cancel" onclick="closeModal()" id="cancel-btn" class="cancel-update-btn"><i class="fa-solid fa-x"></i></button>
                </div>
            </form>
        </div>
    </div>

    
    <script src="admin_js/pagination.js"></script>
    <script src="admin_js/toggleSidebar.js"></script>
    <script src="admin_js/togglePassword.js"></script>
    <script src="admin_js/openModalU.js"></script>
</body>
</html>