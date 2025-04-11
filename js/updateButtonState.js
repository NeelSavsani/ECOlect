function updateButtonState() {
    let fullname = document.getElementById("fullname").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let pass = document.getElementById("pass").value.trim();
    let confirm = document.getElementById("confirm").value.trim();
    let registerButton = document.querySelector(".register-button button");
    let check = document.getElementById("tnc_check").checked;
    if (fullname !== "" && phone !== "" && pass !== "" && confirm !== "" && check) {
        registerButton.style.backgroundColor = "#0077CC"; // Active color
        registerButton.disabled = false; // Enable button
    } else {
        registerButton.style.backgroundColor = "#808080"; // Inactive color
        registerButton.disabled = true; // Disable button
    }
}
let inputs = document.querySelectorAll("#fullname, #phone, #pass, #confirm, #tnc_check");
inputs.forEach(input => {
    input.addEventListener("input", updateButtonState);
});
document.getElementById("tnc_check").addEventListener("change", updateButtonState);