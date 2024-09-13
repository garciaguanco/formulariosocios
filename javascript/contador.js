document.addEventListener('DOMContentLoaded', function() {
    // Elementos de los botones del menú
    const buscarSocioBtn = document.getElementById('buscarSocio');
    const buscarCedulaBtn = document.getElementById('buscarCedula');
    
    // Elementos de los formularios
    const buscadorSocio = document.getElementById('buscadorSocio');
    const buscadorCedula = document.getElementById('buscadorCedula');
    
    // Ocultar ambos formularios al cargar la página
    buscadorSocio.style.display = 'none';
    buscadorCedula.style.display = 'none';
    
    // Función para mostrar el formulario de buscar por número de socio
    buscarSocioBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Evitar que el enlace redirija la página
        buscadorSocio.style.display = 'block';
        buscadorCedula.style.display = 'none'; // Ocultar el formulario de cédula
    });
    
    // Función para mostrar el formulario de buscar por cédula
    buscarCedulaBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Evitar que el enlace redirija la página
        buscadorCedula.style.display = 'block';
        buscadorSocio.style.display = 'none'; // Ocultar el formulario de socio
    });
});
