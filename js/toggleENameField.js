const typeDropdown = document.getElementById("typeE");
    const eNameInput = document.getElementById("e-name");
    const eNameWrapper = document.getElementById("e-name-wrapper");

    function toggleENameField() {
        const selectedValue = typeDropdown.value;

        if (selectedValue === "Other") {
            eNameWrapper.style.display = "none";     // Hide the wrapper
            eNameInput.disabled = true;
            eNameInput.value = "other";
        } else {
            eNameWrapper.style.display = "block";    // Show the wrapper
            eNameInput.disabled = false;
        }

        if (typeof validateForm === "function") {
            validateForm(); // Optional validation call
        }
    }

    // Initial setup
    toggleENameField();
    typeDropdown.addEventListener("change", toggleENameField);