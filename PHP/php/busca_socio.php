<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroSocio = htmlspecialchars($_POST['numeroSocio']);

    // Aquí realizarías la búsqueda en la base de datos
    // Ejemplo simple:
    echo "Buscando información para el socio número: $numeroSocio";
} else {
    echo "Acceso no autorizado";
}
?>
