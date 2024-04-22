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
$sql = "SELECT c.id, p.name, p.lastname, t.tipo_cita, c.fecha, c.hora
        FROM citas AS c
        INNER JOIN pacientes AS p ON c.id_paciente = p.id
        INNER JOIN tipocita AS t ON c.id_tipocita = t.id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result ->fetch_assoc()){ 
        echo 
            "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['lastname']}</td>
                <td>{$row['tipo_cita']}</td>
                <td>{$row['fecha']}</td>
                <td>{$row['hora']}</td>
                <td> 
                    <button onclick='mostrarEditarDoc({$row['id']}, \"{$row['name']}\", \"{$row['lastname']}\", \"{$row['tipo_cita']}\", \"{$row['fecha']}\", \"{$row['hora']}\")'>Editar </button>
                    <button onclick='mostrarEliminarDoc({$row['id']}, \"{$row['name']}\", \"{$row['lastname']}\")'>Eliminar </button>
                </td>
            </tr>";
    }
}
else {
    echo "no hay nadie";
}
$conn->close();
?>
