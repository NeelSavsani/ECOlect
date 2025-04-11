// GETTING LOCATION
let locationUploaded = false;
let locationSpan = document.getElementById("location");

// Declare lat/lon in outer scope so they can be shared
let lat = null;
let lon = null;
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                latitude = position.coords.latitude;
                longitude = position.coords.longitude;
                locationUploaded = true;
                validateForm();
                locationSpan.innerText = `📍 Location uploaded successfully!`;
                console.log(latitude, longitude);
            },
            function (error) {
                alert("❌ Location access denied or failed: " + error.message);
                locationSpan.innerText = ""; // clear message on error
                locationUploaded = false;
                latitude = null;
                longitude = null;
                validateForm();
            }
        );
    } else {
        alert("Geolocation is not supported by your browser.");
    }
}