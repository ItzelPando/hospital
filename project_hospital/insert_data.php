<?php
session_start(); 

// Declaracion de variables 
$servername = 'localhost'; 
$user = 'root';
$pass = ''; 
$database = 'historial_clinico';

// Ingreso a la base de datos
$conn = new mysqli($servername, $user, $pass, $database); 
    if ($conn->connect_error){
        die('Error de conexión: ' . $conn->connect_error);
    }

//obtener datos del fromulario
$nombre_usuario = $_POST['name'];
$last_name = $_POST['l_name'];
$email = $_POST['correo'];
$password = $_POST['password'];

//insertar datos sql en la bd
$sqlinsert = "INSERT INTO
usuarios (id_usuario, name, l_name, correo, password)
VALUES(NULL, '$nombre_usuario', '$last_name','$email','$password', '$celular')";

if($conn->query($sqlinsert)===TRUE){
    echo "Registro exitoso";
}
else{
    echo "Registro erroneo".$conn->error;
}

$conn->close();