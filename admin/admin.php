<?php
include '../dbconnect.php';

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

$sql = "SELECT * FROM `$table`";
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
    <link rel='stylesheet' href='admin.css'>
</head>
<body>
    <div class='container'>
        <h1>Welcome, Admin</h1>
        <p><strong><?php echo $nor; ?></strong> users have registered in our portal!</p>
        <?php if ($nor > 0): ?>
            <div class='table-wrapper'>
                <table>
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
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['Sr.NO']; ?></td>
                            <td><?php echo $row['Fullname']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Phone']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td><?php echo $row['Address']; ?></td>
                            <td><?php echo $row['Pincode']; ?></td>
                            <td><?php echo $row['DateTime']; ?></td>
                            <td>
                                <div class='action-buttons'>
                                    <button class='btn-success' onclick="openModal('<?php echo $row['Sr.NO']; ?>', '<?php echo $row['Fullname']; ?>', '<?php echo $row['Email']; ?>', '<?php echo $row['Phone']; ?>', '<?php echo $row['Password']; ?>', '<?php echo $row['Address']; ?>', '<?php echo $row['Pincode']; ?>')">Edit</button>
                                    <button class='btn-danger'>Delete</button>
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
                <input type="email" name="email" id="edit-email" placeholder="Email" required>
                <input type="text" name="phone" id="edit-phone" placeholder="Phone" required>
                <div class="password-wrapper">
                    <input type="password" name="password" id="edit-password" placeholder="Password" required>
                    <span class="toggle-password" onclick="togglePassword()">👁️</span>
                </div>
                <textarea name="address" id="edit-address" placeholder="Address" rows="4" required></textarea>
                <input type="text" name="pincode" id="edit-pincode" placeholder="Pincode" required>
                <div class="modal-buttons">
                    <button type="submit" name="update" class="submit-btn">Update</button>
                    <button type="button" name="cancel" id="cancel-btn" class="cancel-update-btn">Cancel</button>
                </div>

            </form>
        </div>
    </div>

    <script>
        function openModal(id, fullname, email, phone, password, address, pincode) {
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-fullname').value = fullname;
            document.getElementById('edit-email').value = email;
            document.getElementById('edit-phone').value = phone;
            document.getElementById('edit-password').value = password;
            document.getElementById('edit-address').value = address;
            document.getElementById('edit-pincode').value = pincode;
            document.getElementById('editModal').style.display = 'block';
        }
        document.getElementById("cancel-btn").addEventListener("click", function(){
            document.getElementById('editModal').style.display = 'none';
        });

        function closeModal() {
            document.getElementById('editModal').style.display = 'none';
        }

        function togglePassword() {
            const passField = document.getElementById("edit-password");
            passField.type = passField.type === "password" ? "text" : "password";
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('editModal')) {
                closeModal();
            }
        }
    </script>
</body>
</html>