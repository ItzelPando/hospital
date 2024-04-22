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
                        // Conexión a la base de datos (debes ajustar tus credenciales según corresponda)
                        $servername = 'localhost'; 
                        $user = 'root';
                        $pass = ''; 
                        $database = 'historial_clinico';
                        $conn = new mysqli($servername, $user, $pass, $database); 
                        if ($conn->connect_error) {
                            die('Error de conexión: ' . $conn->connect_error);
                    }
                    // Consulta SQL para obtener el correo electrónico del usuario
                    $sql = "SELECT lastname, id FROM pacientes WHERE name='$name'";
                    $result = $conn->query($sql);
                    if($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $lastname = $row['lastname'];
                        $id = $row['id'];
                        //Yo imprimo lo que tiene tu sesión, eliminame para una mejor experiencia
                        echo "<h1>Bienvenido $name $lastname</h1>";
                    } else {
                        echo "No se pudo encontrar el correo electrónico del usuario.";
                    }
                    $conn->close(); // Cierra la conexión a la base de datos
                } else {
                    header("Location: login.php");
                    exit();
            }?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="/controlador/guardar_history.php" method="post">
                    <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="title" class="title">Title</label>
                        <input type="text" id="title" class="form-control campo-name" name="title">
                    </div>
                    <div class="form-group text-align">
                        <label for="nota_medica" class="nota_medica">Nota medica</label>
                        <input type="text" id="nota_medica" class="form-control campo-lastname" name="nota_medica">
                    </div>
                    <div class="form-group">
                        <label for="fecha" class="fecha">fecha</label>
                        <input type="text" id="fecha" class="form-control campo-email" name="fecha">
                    </div> <br>         
                    <button type="submit" class="component-4"><span class="log-in-5">Añadir</span></button>
                </form>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>