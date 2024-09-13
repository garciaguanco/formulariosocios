<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "usuario", "contraseña", "nombre_base_datos");

// Verificar si la conexión es exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los datos del socio
$id_socio = 1; // Puedes modificar este ID según lo necesites
$sql = "SELECT autorizacion_fotos, anexar_cedula, enfermedades FROM socios WHERE id = $id_socio";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos del socio
    while ($row = $result->fetch_assoc()) {
        echo '<div class="auth-section">';
        echo '<h2>Autorización para Fotografías</h2>';
        echo '<div class="auth-option ' . strtolower($row["autorizacion_fotos"]) . '">';
        echo ($row["autorizacion_fotos"] === "SI") ? 'SÍ' : 'NO';
        echo '</div>';
        echo '</div>';

        echo '<div class="document-section">';
        echo '<h2>Documento: Cédula</h2>';
        echo '<img src="/uploads/' . $row["anexar_cedula"] . '" alt="Cédula">';
        echo '</div>';

        echo '<div class="links-section">';
        echo '<h2>Anexos</h2>';
        echo '<a href="/uploads/cedula.pdf">Cédula</a>';
        echo '<a href="/uploads/aptitud_fisica.pdf">Aptitud Física</a>';
        echo '<a href="/uploads/vacunas.pdf">Vacunas</a>';
        echo '</div>';

        echo '<div class="observations-section">';
        echo '<h2>Observaciones</h2>';
        echo '<p>' . $row["enfermedades"] . '</p>';
        echo '</div>';
    }
} else {
    echo "No se encontraron datos del socio.";
}

$conn->close();
?>
