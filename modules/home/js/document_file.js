document.getElementById('fileInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file && file.type === 'application/pdf') {
        const fileName = file.name;
        const fileSize = (file.size / 1024).toFixed(2) + ' KB';
        const fileURL = URL.createObjectURL(file);

        // Update file info
        document.getElementById('fileName').textContent = fileName;
        document.getElementById('fileSize').textContent = fileSize;
        document.getElementById('downloadButton').href = fileURL;

        // Create PDF thumbnail
        const thumbnail = document.getElementById('thumbnail');
        thumbnail.innerHTML = ''; // Clear existing thumbnail
        const img = document.createElement('img');
        img.src = fileURL + '#page=1&zoom=100';
        thumbnail.appendChild(img);

        // Show the file download card
        document.getElementById('fileDownloadCard').style.display = 'flex';
    }
});
