<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$codigo = $_POST['codigo'];

include 'conexion.php';
$conn = OpenCon();

$sql = "INSERT INTO estudiantes (nombre, apellido, codigo, id_facultad)
VALUES ('$nombre', '$apellido', '$codigo', '7')";

$conn->query($sql);

CloseCon($conn);

header("location: index.php");

?>