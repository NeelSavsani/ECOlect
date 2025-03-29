<?php
session_start();
include 'dbconnect.php';
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php"); // Redirect if not logged in
    exit();
}

$user_email = $_SESSION['user_email']; // Retrieve stored email
$sql = "SELECT Fullname, Email, Phone, DateTime  FROM `login_credentials` WHERE EMAIL = '$user_email'";
$result = mysqli_query($conn, $sql);
if($result)
{
    $row = mysqli_fetch_assoc($result);
    $fullname = $row['Fullname'];
    $email = $row['Email'];
    $phone = $row['Phone'];
    $datetime = $row['DateTime'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
    <title>ECOlect - Profile</title>
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
            </div>
        </div>

        <div class="profile-content">
            <div id="accountSection" class="account-section">
                <h2>Account Information</h2>
                <div class="account-details">
                    <div class="detail-row">
                        <span class="detail-label">Full Name</span>
                        <span class="detail-value" id="fullName"><?php echo $fullname;?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Email</span>
                        <span class="detail-value" id="email"><?php echo $email;?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Phone Number</span>
                        <span class="detail-value" id="phoneNumber"><?php echo "+91 ".$phone;?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Address</span>
                        <span class="detail-value" id="address">123 Green Tech Lane, Eco City, EN 54321</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Registered On</span>
                        <span class="detail-value" id="dateRegistered"><?php echo $datetime;?></span>
                    </div>
                </div>
                <button class="update-profile-btn" id="updateProfileBtn">Update Profile</button>
            </div>

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
        // Navigation buttons
        const navButtons = document.querySelectorAll('.profile-nav-button');
        const accountSection = document.getElementById('accountSection');
        const passwordSection = document.getElementById('passwordSection');

        navButtons.forEach(button => {
            button.addEventListener('click', () => {
            // Remove active class from all buttons
            navButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            button.classList.add('active');

            // Show/hide sections
            if (button.dataset.section === 'account') {
                accountSection.style.display = 'block';
                passwordSection.style.display = 'none';
            } else {
                accountSection.style.display = 'none';
                passwordSection.style.display = 'block';
            }
            });
        });

        // Update Profile Button
        const updateProfileBtn = document.getElementById('updateProfileBtn');
        updateProfileBtn.addEventListener('click', () => {
            alert('Profile update functionality will be implemented in future.');
        });

        // Password Change Form
        const passwordChangeForm = document.getElementById('passwordChangeForm');
        passwordChangeForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const currentPassword = document.getElementById('currentPassword').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (newPassword !== confirmPassword) {
            alert('New passwords do not match!');
            return;
            }

            // In a real application, this would send data to backend
            alert('Password change functionality will be implemented in future.');
            
            // Reset form
            passwordChangeForm.reset();
        });
        });
    </script>
</body>
</html>