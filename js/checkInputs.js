function checkInputs() {
    let username = document.getElementById("login_email").value.trim();
    let password = document.getElementById("login_pass").value.trim();
    let loginButton = document.querySelector(".login-button a button");

    if (username !== "" && password !== "") {
        loginButton.style.backgroundColor = "#0077CC"; // Change color when filled
        loginButton.disabled = false;
    } else {
        loginButton.style.backgroundColor = "#808080"; // Default color
        loginButton.disabled = true;
    }
}

document.getElementById("login_email").addEventListener("input", checkInputs);
document.getElementById("login_pass").addEventListener("input", checkInputs);