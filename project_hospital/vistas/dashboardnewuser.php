<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Doc</title>
    <link href="css/app.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="http://project_hospital.test/vistas/dashboarddoc.php">Dashboard</a></li>
                <li><a href="http://project_hospital.test/vistas/dashboardnewuser.php">Add users</a></li>
                <li><a href="/controlador/logout.php">Log out</a></li>
            </ul>
        </div>
        <div class="content">
            <?php
                session_start();
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
                    $sql = "SELECT lastname FROM doctores WHERE name='$name'";
                    $result = $conn->query($sql);
                    if($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $lastname = $row['lastname'];
                        //Yo imprimo lo que tiene tu sesión, eliminame para una mejor experiencia
                        echo "<div class='title-container'><h1>Bienvenido doctor $name $lastname</h1></div>";
                    } else {
                        echo "No se pudo encontrar el correo electrónico del usuario.";
                    }
                    $conn->close(); // Cierra la conexión a la base de datos
                } else {
                echo "que pedo";
            }?>
            <div class="content">
                <h1>Add new user :D</h1>
                <form action="/controlador/guardar_datos2.php" method="post">
                <div class="form-group">
                    <label for="name" class="name">Name</label>
                    <input type="text" id="name" class="form-control campo-name" name="name">
                </div>
                <div class="form-group text-align">
                    <label for="lastname" class="lastname">Last Name</label>
                    <input type="text" id="lastname" class="form-control campo-lastname" name="lastname">
                </div>
                <div class="form-group">
                    <label for="email" class="email">Email</label>
                    <input type="text" id="email" class="form-control campo-email" name="email">
                </div>
                <div class="form-group">
                    <label for="password" class="password">Password</label>
                    <div class="campo-password">
                        <input type="password" id="password" class="form-control password-campo" name="password">
                    </div>
                </div>              
                <button type="submit" class="component-4"><span class="log-in-5">Sign up</span></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
