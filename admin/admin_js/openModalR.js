function openModal(id, fullname, type, ename, quantity, latitude, longitude, address, datetime) {
    console.log("Type received:", type);
    document.getElementById('edit-id').value = id;
    document.getElementById('edit-fullname').value = fullname;
    document.getElementById('edit-type').value = type.trim();
    document.getElementById('edit-ename').value = ename;
    document.getElementById('edit-quantity').value = quantity;
    document.getElementById('edit-latitude').value = latitude;
    document.getElementById('edit-longitude').value = longitude;
    document.getElementById('edit-address').value = address;
    document.getElementById("edit-datetime").value = datetime;
    document.getElementById('editModal').style.display = 'block';
    console.log("Hello");
}
document.getElementById("cancel-btn").addEventListener("click", function(){
    document.getElementById('editModal').style.display = 'none';
});

function closeModal() {
    document.getElementById('editModal').style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == document.getElementById('editModal')) {
        closeModal();
    }
}