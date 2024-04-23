<?php
// Conexión a la base de datos
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'historial_clinico';
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

// Obtener datos del formulario
$id_tipocita = $_POST['id_tipocita'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

// Preparar la consulta SQL
$sql = "INSERT INTO `citas` (`id_tipocita`, `fecha`, `hora`) VALUES ('$id_tipocita', '$fecha', '$hora')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Cita agendada correctamente";
} else {
    echo "Error al agendar la cita: " . $conn->error;
}

$conn->close();
?>
