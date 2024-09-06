
<?php
// Registrar socio (aquí puedes guardar la información en una base de datos o archivo)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];

    // Abrir o crear el archivo donde guardaremos los socios
    $archivo = 'socios.txt';

    // Guardar el nombre del socio en el archivo (o manejarlo como prefieras)
    file_put_contents($archivo, $nombre . PHP_EOL, FILE_APPEND);

    // Redirigir de vuelta al formulario o a la página principal
    header('Location: menu.html');
    exit;
}
?>

