<?php
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
//datos del formulario para registrar

$id_usuario = $_POST['id_usuario'];
$title = $_POST['title'];
$nota_medica = $_POST['nota_medica'];
$fecha = $_POST['fecha'];


//Insertar datos
$sqlinsert = "INSERT INTO history (id, id_usuario, titulo, nota_medica, fecha)
        values( null, '$id_usuario', '$title','$nota_medica', '$fecha')";

if ($conn->query($sqlinsert)=== TRUE){
    header('Location: /vistas/medicalhistory.php');
}
else{
    echo "No se pudo vato" . $conn->error;
}

$conn->close();