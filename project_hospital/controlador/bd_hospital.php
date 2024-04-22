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

//consulta SQL para verificar el user y password para pacientes
$sql_paciente = "SELECT id, name, lastname, email, password FROM pacientes WHERE email='$email' AND password='$password'";
$result_paciente = $conn->query($sql_paciente);

//consulta SQL para verificar el user y password para doctores
$sql_doctor = "SELECT id, name, lastname, email, password FROM doctores WHERE email='$email' AND password='$password'";
$result_doctor = $conn->query($sql_doctor);

//consulta SQL para verificar el user y password para admins
$sql_admin = "SELECT id, username, email, password FROM admins WHERE email='$email' AND password='$password'";
$result_admin = $conn->query($sql_admin);

if ($result_paciente === false || $result_doctor === false || $result_admin === false) {
    die('Error en la consulta SQL: ' . $conn->error);
}

if ($result_paciente->num_rows > 0) {
    $row = $result_paciente->fetch_assoc();
    $_SESSION['id']=$id;
    $_SESSION['correo'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['name'] = $row['name']; // Cambia 'username' por el campo que contenga el nombre en tu tabla
    header('Location: /vistas/dashboard.php');
} elseif ($result_doctor->num_rows > 0) {
    $row = $result_doctor->fetch_assoc();
    $_SESSION['id']=$id;
    $_SESSION['correo'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['name'] = $row['name']; // Cambia 'username' por el campo que contenga el nombre en tu tabla
    header('Location: /vistas/dashboarddoc.php');
} elseif ($result_admin->num_rows > 0) {
    $row = $result_admin->fetch_assoc();
    $_SESSION['id']=$id;
    $_SESSION['correo'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['name'] = $row['username']; // Cambia 'username' por el campo que contenga el nombre en tu tabla
    header('Location: /vistas/dashboardadmin.php');
} else {
    header('Location: /vistas/login.php');
}

$conn->close();
