<?php
include '../dbconnect.php';
$admin_name = isset($_GET['admin']) ? htmlspecialchars($_GET['admin']) : "Admin";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['fullname']; 
    $email = $_POST['email'];
    $rating = $_POST['rating'];      
    $feedback = $_POST['feedback'];

    $update_sql = "UPDATE `$feedbacktb` SET `Name`='$name', `Email` = '$email', `Rating` = '$rating', `Feedback` = '$feedback' WHERE `Sr.NO`='$id'";
    mysqli_query($conn, $update_sql);
}

$sql = "SELECT * FROM `$feedbacktb`";
$result = mysqli_query($conn, $sql);
$nor = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Admin Reported Feedback E-Waste Panel</title>
    <link rel='shortcut icon' href='../assets/favicon_io/favicon.ico' type='image/x-icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel='stylesheet' href='admin_css/admin.css'>
    <link rel="stylesheet" href="admin_css/pagination.css">
</head>
<body>
    <input type="hidden" id="nrows" value="<?php echo $nor-1; ?>">
    <button class="logout-button" onclick="window.location.href = 'admin_login.php';">
        LogOut <i class="fa-solid fa-power-off"></i>
    </button>
    <div id="sidebar" class="sidebar">
        <ul>
            <li><a href="admin.php?admin=<?php echo urlencode($admin_name);?>"><i class="fa-solid fa-users-viewfinder"></i></i>&nbsp;&nbsp; Users</a></li>
            <li><a href="admin_report.php?admin=<?php echo urlencode($admin_name);?>"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp; Reported E-Waste</a></li>
            <li class="active"><a href="#"><i class="fa-solid fa-comment"></i>&nbsp;&nbsp;Reported Feedback</a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>
        </ul>
    </div>
    <div class="hamburger" onclick="toggleSidebar()">
        <i id="hamburger-icon" class="fa-solid fa-bars"></i>
    </div>
    <div class='container'>
    <h1>Welcome, <?php echo $admin_name;?></h1>
        <p><strong><?php echo $nor; ?></strong> users have reported feedback in our portal!</p>
        <?php if ($nor > 0): ?>
            <div class='table-wrapper'>
                <table id="data-table">
                    <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Rating</th>
                        <th>Feedback</th>
                        <th>Action</th>
                    </tr>
                    <?php $counter = 1; ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Rating']; ?></td>
                            <td><?php echo $row['Feedback']; ?></td>
                            <td>
                                <div class='action-buttons'>
                                    <button class='btn-success' onclick="openModal(
                                    '<?php echo addslashes($row['Sr. No.']); ?>',
                                    '<?php echo addslashes($row['Name']); ?>',
                                    '<?php echo addslashes($row['Email']); ?>',
                                    '<?php echo addslashes($row['Rating']); ?>',
                                    '<?php echo addslashes($row['Feedback']); ?>')"><i class="fa-solid fa-pen"></i></button>
                                    <button class='btn-danger'><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
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
                <input type="text" name="name" id="edit-name" placeholder="Name" required>
                <input type="email" name="email" id="edit-email" placeholder="Email" required>
                <select name="rating" id="edit-rating">
                    <option value="">Select</option>
                    <option value="Excellent">Excellent </option>
                    <option value="Very Good">Very Good </option>
                    <option value="Good">Good </option>
                    <option value="Average">Average </option>
                    <option value="Poor">Poor </option>
                </select>
                <textarea name="feedback" id="edit-feedback" placeholder="Feedback" rows="4" required></textarea>
                <div class="modal-buttons">
                    <button type="submit" name="update" class="submit-btn"><i class="fa-solid fa-check"></i></button>
                    <button type="button" name="cancel" onclick="closeModal()" id="cancel-btn" class="cancel-update-btn"><i class="fa-solid fa-x"></i></button>
                </div>
            </form>
        </div>
    </div>

    
    <script src="admin_js/pagination.js"></script>
    <script src="admin_js/toggleSidebar.js"></script>
    <script src="admin_js/openModalF.js"></script>
</body>
</html>