function validateForm() {
    const address = document.getElementById("address").value.trim();
    const weight = document.getElementById("weight").value.trim();
    const typeE = document.getElementById("typeE").value;
    const name = document.getElementById("e-name").value.trim();
    const isChecked = document.getElementById("location_access").checked;
    const reportBtn = document.getElementById("reportBtn");

    // Name is only required if type is "Other"
    const eNameIsValid = (typeE === "Other") || (name !== "");

    if (address !== "" && weight !== "" && typeE !== "--1" && eNameIsValid && isChecked && locationUploaded) {
        reportBtn.disabled = false;
        console.log(address, weight, typeE, name, latitude, longitude);
    } else {
        reportBtn.disabled = true;
    }
}
document.getElementById("address").addEventListener("input", validateForm);
document.getElementById("weight").addEventListener("input", validateForm);
document.getElementById("typeE").addEventListener("change", validateForm);
document.getElementById("location_access").addEventListener("change", validateForm);