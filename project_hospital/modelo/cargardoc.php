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
//Insertar datos
$sql = "SELECT d.*, t.tipo_cita 
        FROM doctores AS d
        INNER JOIN tipocita AS t ON d.especialidad = t.id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result ->fetch_assoc()){ 
        echo 
            "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['lastname']}</td>
                <td>{$row['email']}</td>
                <td>{$row['password']}</td>
                <td>{$row['tipo_cita']}</td>
                <td>{$row['cedula']}</td>
                <td>{$row['consultorio']}</td>
                <td> 
                    <button onclick='mostrarEditarDoc({$row['id']}, \"{$row['name']}\", \"{$row['lastname']}\", \"{$row['email']}\", \"{$row['password']}\", \"{$row['especialidad']}\", \"{$row['cedula']}\", \"{$row['consultorio']}\")'>Editar </button>
                    <button onclick='mostrarEliminarDoc({$row['id']}, \"{$row['name']}\", \"{$row['lastname']}\")'>Eliminar </button>
                </td>
            </tr>";
    }
}
else {
    echo "no hay nadie";
}
$conn->close();

