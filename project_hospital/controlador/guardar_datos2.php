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
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

//Insertar datos
$sqlinsert = "INSERT INTO pacientes (id, name, lastname, email, password)
        values( null, '$name','$lastname', '$email','$password')";

if ($conn->query($sqlinsert)=== TRUE){
    header('Location: http://project_hospital.test/vistas/dashboardnewuser.php');
}
else{
    echo "No se pudo vato" . $conn->error;
}

$conn->close();