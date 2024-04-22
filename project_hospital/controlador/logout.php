<?php
// Para borrar los datos al cerrar sesion
session_start();
session_unset();
session_destroy();
header("location: http://project_hospital.test/");
exit();
?>