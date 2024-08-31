// script.js

function previewImage(event) {
    var preview = document.getElementById('preview');
    preview.innerHTML = ''; // Limpiar cualquier previsualización anterior

    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
        var image = new Image();
        image.src = e.target.result;
        image.style.maxWidth = '100%';
        image.style.maxHeight = '100%';
        preview.appendChild(image);
    };

    reader.readAsDataURL(file);
}









