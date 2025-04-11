<?php
include '../dbconnect.php';
$admin_name = isset($_GET['admin']) ? htmlspecialchars($_GET['admin']) : "Admin";

$sql = "SELECT * FROM `$ewaste`";
$result = mysqli_query($conn, $sql);
$nor = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Reported E-Waste Panel</title>
    <link rel='shortcut icon' href='../assets/favicon_io/favicon.ico' type='image/x-icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="admin_css/admin.css">
</head>
<body>
    <button class="logout-button" onclick="window.location.href = 'admin_login.php';"> LogOut <i class="fa-solid fa-power-off"></i></button>
    <div id="sidebar" class="sidebar">
        <ul>
            <li><a href="admin.php"><i class="fa-solid fa-users-viewfinder"></i>Users</a></li>
            <li class="active"><a href="#"><i class="fa-solid fa-trash"></i>Reported E-Waste</a></li>
            <li><a href="#"><i class="fa-solid fa-id-card"></i>Account</a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i>Settings</a></li>
        </ul>
    </div>
    <div class="hamburger" onclick="toggleSidebar()">
        <i class="fa-solid fa-bars" id="hamburger-icon"></i>
    </div>
    <div class="container">
        <h1>Welcome, <?php echo $admin_name; ?></h1>
        <p><strong><?php echo $nor; ?></strong> users have reported e-waste on our platform!</p>
        <?php if ($nor > 0): ?>
            <div class="table-wrapper">
                <table>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Fullname</th>
                        <th>Type</th>
                        <th>E-Waste Name</th>
                        <th>Quantity</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['Sr.No']; ?></td>
                            <td><?php echo $row['Fullname']; ?></td>
                            <td><?php echo $row['Type']; ?></td>
                            <td><?php echo $row['EName']; ?></td>
                            <td><?php echo $row['Quantity']; ?></td>
                            <td><?php echo $row['Latitude']; ?></td>
                            <td><?php echo $row['Longitude']; ?></td>
                            <td><?php echo $row['Address']; ?></td>
                            <td>
                            <div class='action-buttons'>
                                    <button class='btn-success' onclick="openModal('<?php echo $row['Sr.No']; ?>', '<?php echo $row['Fullname']; ?>', '<?php echo $row['Type']; ?>', '<?php echo $row['EName']; ?>', '<?php echo $row['Quantity']; ?>', '<?php echo $row['Latitude']; ?>', '<?php echo $row['Longitude']; ?>', '<?php echo $row['Address']; ?>')"><i class="fa-solid fa-pen"></i></button>
                                    <button class='btn-danger'><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        <?php endif; ?>
    </div>

    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <form method="POST">
                <input type="hidden" name="id" id="edit-id">
                <input type="text" name="fullname" id="edit-fullname" placeholder="Fullname" required>
                <select name="type" id="edit-type">
                <option value="--1">--Select--</option>
                        <option value="Large Household Appliances">Large Household Appliances</option>
                        <option value="Small Household Appliances">Small Household Appliances</option>
                        <option value="Consumer Electronics">Consumer Electronics</option>
                        <option value="IT and Telecommunications Equipment">IT and Telecommunications Equipment</option>
                        <option value="Lighting Equipment">Lighting Equipment</option>
                        <option value="Electrical and Electronic Tools">Electrical and Electronic Tools</option>
                        <option value="Medical Devices">Medical Devices</option>
                        <option value="Automatic Dispensers">Automatic Dispensers</option>
                        <option value="Toys, Leisure, and Sports Equipment">Toys, Leisure, and Sports Equipment</option>
                        <option value="Batteries and Accumulators">Batteries and Accumulators</option>
                        <option value="Cables and Wires">Cables and Wires</option>
                        <option value="Industrial Electronics">Industrial Electronics</option>
                        <option value="Security and Surveillance Equipment">Security and Surveillance Equipment</option>
                        <option value="Wearable Technology">Wearable Technology</option>
                        <option value="Scientific and Laboratory Equipment">Scientific and Laboratory Equipment</option>
                        <option value="Energy Generation and Storage Devices">Energy Generation and Storage Devices</option>
                        <option value="Gaming and Virtual Reality Devices">Gaming and Virtual Reality Devices</option>
                        <option value="Other">Other</option>
                </select>
                <input type="text" name="ename" id="edit-ename" placeholder="Name of E-Waste" required>
                <input type="number" name="quantity" id="edit-quantity" placeholder="Quantity" required>
                <input type="number" name="latitude" id="edit-latitude" placeholder="Latitude" required>
                <input type="number" name="longitude" id="edit-longitude" placeholder="Longitude" required>
                <textarea name="address" id="edit-address" placeholder="Address" rows="4" required></textarea>
                <div class="modal-buttons">
                    <button type="submit" name="update" class="submit-btn"><i class="fa-solid fa-check"></i></button>
                    <button type="button" name="cancel" id="cancel-btn" class="cancel-update-btn"><i class="fa-solid fa-x"></i></button>
                </div>

            </form>
        </div>
    </div>
    
    <script src="admin_js/toggleSidebar.js"></script>
    <script src="admin_js/openModal.js"></script>
</body>
</html>