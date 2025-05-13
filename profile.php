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
$stmt = $conn->prepare("SELECT Fullname, Email, Phone, Address, Pincode, DateTime FROM `$logintb` WHERE Email = ?");
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


    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js";
        import { getAuth, signInWithEmailAndPassword, reauthenticateWithCredential, updatePassword, EmailAuthProvider } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-auth.js";

        const firebaseConfig = {
            apiKey: "AIzaSyBPkvRug6sTUnhVxX8P3K5lFQS8lzKrss4",
            authDomain: "authtest-2d91d.firebaseapp.com",
            databaseURL: "https://authtest-2d91d-default-rtdb.firebaseio.com",
            projectId: "authtest-2d91d",
            storageBucket: "authtest-2d91d.firebasestorage.app",
            messagingSenderId: "751675073643",
            appId: "1:751675073643:web:08a7d5af38db205e64bd2e",
            measurementId: "G-1XQVN4FN3P"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const auth = getAuth(app);
        document.addEventListener('DOMContentLoaded', () => {
            const passwordChangeForm = document.getElementById('passwordChangeForm');

            passwordChangeForm.addEventListener('submit', async (e) => {
                e.preventDefault();

                const currentPassword = document.getElementById('currentPassword').value;
                const newPassword = document.getElementById('newPassword').value;
                const confirmPassword = document.getElementById('confirmPassword').value;

                if (newPassword !== confirmPassword) {
                    alert('New passwords do not match!');
                    return;
                }

                const user = auth.currentUser;
                if (!user) {
                    alert("No user signed in!");
                    return;
                }

                const email = "<?php echo $email; ?>"; // Get email from PHP session
                const credential = EmailAuthProvider.credential(email, currentPassword);

                try {
                    await reauthenticateWithCredential(user, credential);
                    await updatePassword(user, newPassword);

                    // Send AJAX request to update password in database
                    fetch('update_password.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: new URLSearchParams({
                            email: email,
                            newPassword: newPassword
                        })
                    })
                    .then(response => response.text())
                    .then(data => {
                        alert(data); // Show success or error message
                        passwordChangeForm.reset();
                        accountSection.style.display = 'block';
                        passwordSection.style.display = 'none';
                    })
                    .catch(error => {
                        console.error("Error updating password:", error);
                        alert("An error occurred while updating the password.");
                    });

                } catch (error) {
                    alert('Error: ' + error.message);
                }
            });
        });

    </script>

    <script src="js/profile.js"></script>
</body>
</html>