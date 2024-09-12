<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";  // Usuario de MySQL
$password = "";  // Contraseña de MySQL
$dbname = "usuarios";  // Cambia por el nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Comprobamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre_completo = $_POST['nombre_completo'];
    $correo_electronico = $_POST['correo_electronico'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    // Encriptar la contraseña antes de guardarla
    $contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (nombre_completo, correo_electronico, nombre_usuario, contrasena)
            VALUES ('$nombre_completo', '$correo_electronico', '$nombre_usuario', '$contrasena_encriptada')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro completado exitosamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>


