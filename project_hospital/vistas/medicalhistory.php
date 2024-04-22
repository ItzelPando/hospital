<?php
session_start();

// Verificar si no hay una sesión activa
if(!isset($_SESSION['correo'])) {
    // Si no hay una sesión activa, redirigir al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit; // Asegúrate de salir del script después de redirigir
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="css/navbar2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--COSAS DEL CALENDARIO-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    
    <script src="js/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <?php include 'navbar2.php';?>
    </header><br>
            <?php
                if(isset($_SESSION["name"])) {
                    $name = $_SESSION["name"];
                    // Conexión a la base de datos
                    $servername = 'localhost'; 
                    $user = 'root';
                    $pass = ''; 
                    $database = 'historial_clinico';
                    $conn = new mysqli($servername, $user, $pass, $database); 
                    if ($conn->connect_error) {
                        die('Error de conexión: ' . $conn->connect_error);
                    }
                    // Consulta SQL para obtener el correo electrónico del usuario
                    $sql = "SELECT l_name, id FROM usuarios WHERE name='$name'";
                    $result = $conn->query($sql);
                    if($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $l_name = $row['l_name'];
                        $id = $row['id'];
                        echo "<h1>Bienvenido $name $l_name</h1>";
                
                        // Consulta SQL para obtener el historial médico del paciente
                        $sqlHistorial = "SELECT * FROM historial WHERE id_usuario='$id'";
                        $resultHistorial = $conn->query($sqlHistorial);
                        if($resultHistorial && $resultHistorial->num_rows > 0) {
                            while($rowHistorial = $resultHistorial->fetch_assoc()) {
                                // Aquí puedes mostrar la información del historial médico
                                echo "Fecha: " . $rowHistorial['fecha'] . "<br>";
                                echo "Diagnóstico: " . $rowHistorial['diagnostic'] . "<br>";
                                echo "Tratamiento: " . $rowHistorial['treatment'] . "<br><br>";
                            }
                        } else {
                            echo "No se encontró el historial médico del paciente.";
                        }
                    } else {
                        echo "No se pudo encontrar el correo electrónico del usuario.";
                    }
                    $conn->close(); // Cierra la conexión a la base de datos
                }
            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
