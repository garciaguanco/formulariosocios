
document.addEventListener('DOMContentLoaded', function() {
    // Hacemos una solicitud a PHP para obtener la cantidad de socios
    fetch('obtener_socios.php')
        .then(response => response.json())  // Convertimos la respuesta a JSON
        .then(data => {
            // Mostramos el resultado en el elemento con id "contadorSocios"
            document.getElementById('contadorSocios').innerText = 'Hoy somos ' + data.cantidad + ' socios en Universal!';
        })
        .catch(error => {
            console.error('Error al obtener la cantidad de socios:', error);
        });
});
