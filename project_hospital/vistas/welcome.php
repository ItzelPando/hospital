<?php
session_start();
    if (!isset($_SESSION['username']) || is_null($_SESSION['username']) || empty($_SESSION['username']) ){ 
    session_destroy();
    echo "<a href='../index.html'>Volver</a>";
    exit();

}
else
?><?php
session_start();
    if (!isset($_SESSION['username']) || is_null($_SESSION['username']) || empty($_SESSION['username']) ){ 
        session_destroy();
        echo "<a href='../index.html'>Volver</a>";
    exit();
}
else
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="css/dad.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
session_start();

if(isset($_SESSION["username"])) {
    $username = $_SESSION["username"];

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
    $sql = "SELECT correo FROM usuarios WHERE username='$username'";
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['correo'];

        echo "<h1>Bienvenido $username</h1>
        <p>Tu correo es: $email</p>
        <a href='logout.php'>Cerrar sesión</a>"; // Asumiendo que logout.php maneja el cierre de sesión
    } else {
        echo "No se pudo encontrar el correo electrónico del usuario.";
    }

    $conn->close(); // Cierra la conexión a la base de datos
} else {
    header("Location: index.html");
    exit();
}
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 mt-5 mb-3">
                <h1>Welcome <?php echo $username . " your email is: " . $email?></h1>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-color-1"> 
                            <div class="item item1-1"><h2>Schedule an appointment</h2></div>
                            <div class="item item1-2"><img src="doc.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-color-2"> 
                            <div class="item item2-1"><h2>Medical history</h2></div>
                            <div class="item item2-2"><img class="ppoo" src="doc.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-color-3"> <h3>Tips</h3> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-color-4"><h2>Your <br> results</h2></div>
                <div class="card bg-color-5"></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



