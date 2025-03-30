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

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT Fullname, Email, Phone, Address, Pincode, DateTime FROM `login_credentials` WHERE Email = ?");
$stmt->bind_param("s", $user_email);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    $fullname = $row['Fullname'];
    $email = $row['Email'];
    $phone = $row['Phone'];
    $datetime = $row['DateTime'];
    $formatted_date = date("d M Y, h:i A", strtotime($datetime));
    $address = $row['Address'];
    $pincode = $row['Pincode'];
} else {
    die("No records found for the given email.");
}

$stmt->close();
$conn->close();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
    <title>Profile - ECOlect</title>
</head>
<body>
    <button class="back-button" onclick="history.back()">
        <i class="fas fa-arrow-left"></i>Back</button>
    <div class="profile-container">
        <div class="profile-sidebar">
            <div class="profile-avatar">
                <img src="assets/Profile.png" alt="Profile Avatar" class="avatar-image">
                <h3 id="profileName"><?php echo $fullname;?></h3>
            </div>
            <div class="profile-nav">
                <button class="profile-nav-button active" data-section="account">
                    <i class="fas fa-user"></i> Account
                </button>
                <button class="profile-nav-button" data-section="password">
                    <i class="fas fa-lock"></i> Password
                </button>
                <button class="profile-nav-button" data-section="logout">
                    <i class="fa-solid fa-power-off"></i> Logout
                </button>
            </div>
        </div>

        <div class="profile-content">
            <div id="accountSection" class="account-section">
            <h2>Account Information</h2>
            <div id="displayInfo" class="account-details">
                <div class="detail-row">
                    <span class="detail-label">Full Name</span>
                    <span class="detail-value" id="fullName"><?php echo $fullname; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Email</span>
                    <span class="detail-value" id="email"><?php echo $email; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Phone Number</span>
                    <span class="detail-value" id="phoneNumber"><?php echo "+91 " . $phone; ?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Address</span>
                    <span class="detail-value" id="address"><php echo $address;?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Pincode</span>
                    <span class="detail-value" id="address"></php echo $pincode;?></span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Registered On</span>
                    <span class="detail-value" id="dateRegistered"><?php echo $formatted_date; ?></span>
                </div>
                <button class="update-profile-btn" id="updateProfileBtn">Update Profile</button>
            </div>

                <!-- Editable Form (Hidden by Default) -->
                <form id="editForm" class="account-details" style="display: none;" method="POST" action="update_profile.php">
                    <input type="hidden" name="user_email" value="<?php echo $email; ?>">

                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" value="<?php echo $fullname; ?>">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" maxlength="10" id="phone" name="phone" value="<?php echo $phone; ?>">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" value="<?php echo $address; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pincode">Pincode</label>
                        <input type="number" maxlength="6" id="pincode" name="pincode" value="<?php echo $pincode; ?>">
                    </div>

                    <button type="submit" class="update-profile-btn">Save Changes</button>
                    <button type="button" class="cancel-btn" id="cancelUpdate">Cancel</button>
                </form>
                <div id="passwordSection" class="password-section" style="display: none;">
                    <h2>Change Password</h2>
                    <form id="passwordChangeForm">
                        <div class="form-group">
                            <label for="currentPassword">Current Password</label>
                            <input type="password" id="currentPassword" name="currentPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" id="newPassword" name="newPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm New Password</label>
                            <input type="password" id="confirmPassword" name="confirmPassword" required>
                        </div>
                        <button type="submit" class="update-password-btn">Change Password</button>
                    </form>
                </div>
            </div>
        </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const updateProfileBtn = document.getElementById('updateProfileBtn');
            const editForm = document.getElementById('editForm');
            const displayInfo = document.getElementById('displayInfo');
            const cancelUpdate = document.getElementById('cancelUpdate');

            updateProfileBtn.addEventListener('click', () => {
                displayInfo.style.display = 'none';
                editForm.style.display = 'block';
            });

            cancelUpdate.addEventListener('click', () => {
                editForm.style.display = 'none';
                displayInfo.style.display = 'block';
            });
        });

        // Update Profile Button
        // const updateProfileBtn = document.getElementById('updateProfileBtn');
        // updateProfileBtn.addEventListener('click', () => {
        //     alert('Profile update functionality will be implemented in future.');
        // });

        // Password Change Form
        // const passwordChangeForm = document.getElementById('passwordChangeForm');
        // passwordChangeForm.addEventListener('submit', (e) => {
        //     e.preventDefault();
            
        //     const currentPassword = document.getElementById('currentPassword').value;
        //     const newPassword = document.getElementById('newPassword').value;
        //     const confirmPassword = document.getElementById('confirmPassword').value;

        //     if (newPassword !== confirmPassword) {
        //     alert('New passwords do not match!');
        //     return;
        //     }

        //     // In a real application, this would send data to backend
        //     alert('Password change functionality will be implemented in future.');
            
        //     // Reset form
        //     passwordChangeForm.reset();
        // });
    </script>
</body>
</html>