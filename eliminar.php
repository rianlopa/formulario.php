<?php

include 'conexion.php';
$conn = OpenCon();

$id = $_GET["id"];

echo $id;

$sql = "DELETE FROM estudiantes WHERE id='$id'";

$conn->query($sql);

CloseCon($conn);

header("location: index.php");

?>