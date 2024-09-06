
<?php
// Abrir el archivo de socios y contar cuántos socios están registrados
$archivo = 'socios.txt';

// Si el archivo no existe, mostrar 0
if (!file_exists($archivo)) {
    $cantidadSocios = 0;
} else {
    // Leer todas las líneas del archivo
    $socios = file($archivo, FILE_IGNORE_NEW_LINES);
    $cantidadSocios = count($socios);
}

// Enviar la cantidad de socios en formato JSON
echo json_encode(['cantidad' => $cantidadSocios]);
?>
