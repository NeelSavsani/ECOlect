function togglePassword() {
    let passwordInput = document.getElementById("pass");
    let confirmInput = document.getElementById("confirm");
    let passIcon = document.querySelector(".eye-icon-pass i");
    let confirmIcon = document.querySelector(".eye-icon-confirm i");
    
    if (passwordInput.type === "password" && confirmInput.type === "password") {
        passwordInput.type = "text";
        confirmInput.type = "text";
        passIcon.classList.remove("fa-eye");
        passIcon.classList.add("fa-eye-slash");
        confirmIcon.classList.remove("fa-eye");
        confirmIcon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        confirmInput.type = "password";
        passIcon.classList.remove("fa-eye-slash");
        passIcon.classList.add("fa-eye");
        confirmIcon.classList.remove("fa-eye-slash");
        confirmIcon.classList.add("fa-eye");
    }
}