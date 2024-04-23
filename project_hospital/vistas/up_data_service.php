<?php
session_start();
//Detalles de conexión
$servername='localhost';
$user='root';
$password='';
$database='hospital';

//Crear conexión
$conn= new mysqli($servername,$user,$password,$database);
//Verificar conexión
if($conn -> connect_error){
    die("Conexión fallida" . $conn -> connect_error);
}
$Name = $_POST['name'];
$Description = $_POST['description'];
$Image = "";

// Verificar si se cargó un archivo de imagen
if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $image = $_FILES['imagen']['name'];
    $ruta_image = "uploads/" . $image; // Obtener la ruta de la imagen
    
    // Mover el archivo de imagen al directorio de destino
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_image)) {}}

$sqlinsert = "INSERT INTO  services (Name, Description, Image)
values ('$Name','$Description','$Image')";

if ($conn->query($sqlinsert) === TRUE) {
    echo "Datos insertados correctamente";
    header("Location:index.php");
}else{
    echo "Error al insertar datos ";
}

$conn-> close();
?>