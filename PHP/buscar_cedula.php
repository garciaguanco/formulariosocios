<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = htmlspecialchars($_POST['cedula']);

    // Aquí realizarías la búsqueda en la base de datos
    // Ejemplo simple:
    echo "Buscando información para la cédula: $cedula";
} else {
    echo "Acceso no autorizado";
}
?>
