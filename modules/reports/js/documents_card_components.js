document.querySelectorAll('.preview-icon').forEach(icon => {
    icon.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent the card click event
        // Logic to preview the document
        alert('Preview document'); // Replace with your preview logic
    });
});
function openModal(pdfPath) {
    document.getElementById("pdfModal").style.display = "block";
    document.getElementById("pdfFrame").src = pdfPath;
}

function closeModal() {
    document.getElementById("pdfModal").style.display = "none";
    document.getElementById("pdfFrame").src = ""; // Clear the source to stop loading the PDF
}

// Close modal when clicking outside of the modal content
window.onclick = function(event) {
    var modal = document.getElementById("pdfModal");
    if (event.target == modal) {
        modal.style.display = "none";
        document.getElementById("pdfFrame").src = "";
    }
}
