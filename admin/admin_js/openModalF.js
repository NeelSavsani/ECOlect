function openModal(id, name, email, rating, feedback) {
    document.getElementById('edit-id').value = id;
    document.getElementById('edit-name').value = name;
    document.getElementById('edit-email').value = email;
    document.getElementById('edit-rating').value = rating.trim();
    document.getElementById('edit-feedback').value = feedback;
    document.getElementById('editModal').style.display = 'block';
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