function reportEwaste() {
    const address = document.getElementById("address").value.trim();
    const typeE = document.getElementById("typeE").value;
    const eName = document.getElementById("e-name").value.trim();
    const weight = document.getElementById("weight").value.trim();
    const location = locationSpan.innerText; // You may want to pass actual lat/lon instead

    const email = "<?php echo $user_email; ?>";

    const formData = new FormData();
    formData.append("address", address);
    formData.append("typeE", typeE);
    formData.append("eName", eName);
    formData.append("weight", weight);
    formData.append("latitude", latitude);
    formData.append("longitude", longitude);
    formData.append("email", email);

    // AJAX call
    fetch("reportE.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        alert("✅ E-waste reported successfully!");
        // Optionally clear form fields or show a confirmation message
        document.getElementById("reportBtn").disabled = true;
        document.getElementById("address").value = "";
        document.getElementById("typeE").value = "--1";
        document.getElementById("e-name").value = "";
        document.getElementById("weight").value = "";
        document.getElementById("location_access").checked = false;
        locationSpan.innerText = "";
        locationUploaded = false;
        validateForm();
    })
    .catch(error => {
        alert("❌ Failed to report e-waste. Please try again.");
        console.error("Error:", error);
    });
}