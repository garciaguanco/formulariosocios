<?php
// Proceso de archivo PHP para manejar el formulario y guardar los datos

// Guardar la autorización para fotografías
$autorizacion = $_POST['autorizacion'];

// Guardar los archivos (cédula, aptitud física, vacunas)
$directorio = "uploads/";
$cedula = $directorio . basename($_FILES["cedula"]["name"]);
$aptitud_fisica = $directorio . basename($_FILES["aptitud_fisica"]["name"]);
$vacunas = $directorio . basename($_FILES["vacunas"]["name"]);

move_uploaded_file($_FILES["cedula"]["tmp_name"], $cedula);
move_uploaded_file($_FILES["aptitud_fisica"]["tmp_name"], $aptitud_fisica);
move_uploaded_file($_FILES["vacunas"]["tmp_name"], $vacunas);

// Guardar observaciones (enfermedades)
$observaciones = $_POST['enfermedades'];

// Aquí puedes guardar estos datos en una base de datos o en archivos
// Redirigir a socio.html con los datos
header("Location: socio.html?autorizacion=$autorizacion&cedula=$cedula&aptitud=$aptitud_fisica&vacunas=$vacunas&observaciones=$observaciones");
?>
