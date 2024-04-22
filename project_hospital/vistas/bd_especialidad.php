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
//datos del formulario
$email = $_POST['correo'];
$password = $_POST['password'];

//consulta SQL para verificar el user y password
$sql = "SELECT id, name, lastname, email, password FROM pacientes WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result === false) {
    die('Error en la consulta SQL: ' . $conn->error);
}
if($result ->num_rows >0){
    $row = $result->fetch_assoc();
    $_SESSION['correo']=$email;
    $_SESSION['password']=$password;
    $_SESSION['username']=$row['username'];
    header('Location: dashboard.php');}
    else{
        echo "Inicio de sesion fallido .<br>
            <a href='/vistas/login.php'>Intentar de nuevo</a>";
}
$conn->close();