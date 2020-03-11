<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$codigo = $_POST['codigo'];
$id = $_POST['id'];

include 'conexion.php';
$conn = OpenCon();

$sql = "UPDATE estudiantes SET nombre = '$nombre', apellido = '$apellido', codigo = '$codigo'
where id = $id";

$conn->query($sql);

CloseCon($conn);

header("location: index.php");

?>