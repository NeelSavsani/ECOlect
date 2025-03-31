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
    $formatted_phone = substr($phone, 0, 5) . " " . substr($phone, 5);
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
    <script src="https://kit.fontawesome.com/e05d24f6c7.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
    <title>ECOlect - Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <button class="back-button" onclick="history.back()">
        <i class="fa-solid fa-arrow-left"></i> Back
    </button>
    <div class="profile-container">
        <div class="profile-sidebar">
            <div class="profile-avatar">
                 <img src="assets/Profile.png" alt="">
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
                        <span class="detail-value" id="phoneNumber"><?php echo "+91 ".$formatted_phone;?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Address</span>
                        <span class="detail-value" id="address"><?php echo $address;?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Pincode</span>
                        <span class="detail-value" id="pincode"><?php echo $pincode;?></span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Registered On</span>
                        <span class="detail-value" id="dateRegistered"><?php echo $formatted_date;?></span>
                    </div>
                </div>
                <button class="update-profile-btn" id="updateProfileBtn">Update Profile</button>
                <button onclick="window.location.href = 'login.php';" class="logout-profile-btn">Logout</button>
            </div>

            <div id="updateProfileForm" class="update-profile-form" style="display: none;">
                <h2>Update Profile</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="updateFullName">Full Name</label>
                        <input type="text" id="updateFullName" name="fullname" value="<?php echo $fullname; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="updatePhone">Phone Number</label>
                        <input type="text" id="updatePhone" name="phone" value="<?php echo $phone; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="updateAddress">Address</label>
                        <textarea name="address" cols="70" rows="5" id="updateAddress" required><?php echo $address; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="updatePincode">Pincode</label>
                        <input type="text" id="updatePincode" name="pincode" value="<?php echo $pincode; ?>" required>
                    </div>
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <button type="submit" class="save-profile-btn">Save Changes</button>
                    <button type="button" class="cancel-update-btn" id="cancelUpdateBtn">Cancel</button>
                </form>
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
        document.addEventListener("DOMContentLoaded", function () {
            const updateForm = document.getElementById("updateProfileForm");
            const saveButton = document.querySelector(".save-profile-btn");
            
            saveButton.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent default form submission

                // Get values from input fields
                const fullname = document.getElementById("updateFullName").value.trim();
                const phone = document.getElementById("updatePhone").value.trim();
                const address = document.getElementById("updateAddress").value.trim();
                const pincode = document.getElementById("updatePincode").value.trim();
                const email = "<?php echo $email; ?>"; // Pass email from PHP

                // Validate inputs
                if (!fullname || !phone || !address || !pincode) {
                    alert("All fields are required!");
                    return;
                }

                // Create a FormData object
                const formData = new FormData();
                formData.append("fullname", fullname);
                formData.append("phone", phone);
                formData.append("address", address);
                formData.append("pincode", pincode);
                formData.append("email", email);

                // Send the data using Fetch API
                fetch("update_profile.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.text()) // Convert response to text
                .then(data => {
                    alert(data); // Show success or error message

                    // Dynamically update profile details in the UI
                    document.getElementById("fullName").textContent = fullname;
                    document.getElementById("phoneNumber").textContent = "+91 " + phone;
                    document.getElementById("address").textContent = address;
                    document.getElementById("pincode").textContent = pincode;

                    // Hide the form and show account section
                    document.getElementById("updateProfileForm").style.display = "none";
                    document.getElementById("accountSection").style.display = "block";
                })
                .catch(error => {
                    console.error("Error updating profile:", error);
                    alert("An error occurred while updating the profile.");
                });
            });
        });

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
                    updateProfileForm.style.display = 'none'
                    passwordSection.style.display = 'none';
                } else {
                    accountSection.style.display = 'none';
                    updateProfileForm.style.display = 'none'
                    passwordSection.style.display = 'block';
                }
                });
            });

            // Update Profile Button
            const updateProfileBtn = document.getElementById('updateProfileBtn');
            updateProfileBtn.addEventListener('click', () => {
                accountSection.style.display = 'none'; // Hide account details
                updateProfileForm.style.display = 'block'; // Show update form
            });
            cancelUpdateBtn.addEventListener('click', () => {
                updateProfileForm.style.display = 'none'; // Hide form
                accountSection.style.display = 'block'; // Show account details again
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