function openModal(id, fullname, email, phone, password, address, pincode) {
    console.log("openModal triggered with values:", id, fullname, email, phone);

    document.getElementById('edit-id').value = id;
    document.getElementById('edit-fullname').value = fullname;
    document.getElementById('edit-email').value = email;
    document.getElementById('edit-phone').value = phone;
    document.getElementById('edit-password').value = password;
    document.getElementById('edit-address').value = address;
    document.getElementById('edit-pincode').value = pincode;

    document.getElementById('editModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('editModal').style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == document.getElementById('editModal')) {
        closeModal();
    }
}