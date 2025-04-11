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
});