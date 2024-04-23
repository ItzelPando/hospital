3<?php
session_start(); 

// Declaracion de variables 
$servername = 'localhost'; 
$user = 'root';
$pass = ''; 
$database = 'historial_clinico';

// Ingreso a la base de datos
$conn = new mysqli($servername, $user, $pass, $database); 
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

// obtener los datos del formulario
$id_paciente = $_POST['id_paciente'];
$id_tipocita = $_POST['id_tipocita'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

$fecha_objeto = DateTime::createFromFormat('d/m/Y', $fecha);

// Formatear la fecha al formato aceptado por la base de datos (AAAA-MM-DD)
$fecha_formateada = $fecha_objeto->format('Y-m-d');


// Prepara la consulta SQL con valores escapados para evitar inyección de SQL
$sqlinsert = "INSERT INTO `historial_clinico`.`citas` (`id_paciente`, `id_tipocita`, `fecha`, `hora`) VALUES ('$id_paciente', '$id_tipocita', '$fecha_formateada', '$hora')";

if ($conn->query($sqlinsert) === TRUE) {
    echo "Cita agendada correctamente";
} else {
    echo "Error al agendar la cita: " . $conn->error;
}

$conn->close();
?>
