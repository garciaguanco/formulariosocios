
// script.js

document.getElementById('buscarSocio').addEventListener('click', function(event) {
    event.preventDefault(); // Evita que el enlace realice una acción predeterminada
    document.getElementById('buscadorSocio').style.display = 'block';
    document.getElementById('buscadorCedula').style.display = 'none';
});

document.getElementById('buscarCedula').addEventListener('click', function(event) {
    event.preventDefault(); // Evita que el enlace realice una acción predeterminada
    document.getElementById('buscadorCedula').style.display = 'block';
    document.getElementById('buscadorSocio').style.display = 'none';
});


// Simulador de contador de socios ingresados en el día










