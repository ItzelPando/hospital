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
                    $sql = "SELECT lastname, especialidad FROM doctores WHERE name='$name'";
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
                <table id="usuariosTable" border="1">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>LastName</td>
                            <td>tipo_cita</td>
                            <td>fecha</td>
                            <td>hora</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- aquí se carga no se que js del servidor al usuario -->
                    </tbody>
                    <script>
                        // Usar jQuery para cargar los usuarios en la tabla desde PHP
                        $(document).ready(function(){
                            $.ajax({
                                url: '/modelo/cargarcita.php',
                                type: 'GET',
                                success: function(response){
                                    $('#usuariosTable tbody').html(response);
                                }
                            });
                        });
                    </script>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
