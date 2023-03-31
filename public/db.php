<?php

// Configuración de la conexión
$servername = "dpg-cggrd7keoogqfc463qlg-a";
$username = "admin";
$password = "KNxRqeert9SXREdCe6eeYndEUv4vvRV1";
$dbname = "bd2023";

// Intentar la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar si hay errores en la conexión
if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

echo "¡Conexión exitosa!";

// Cerrar la conexión
mysqli_close($conn);

?>

