<?php
include 'conexion.php';

$conn = OpenCon();

$id = $_GET['id'];

$sql = "select nombre, apellido, codigo from estudiantes where id=$id";
$result = $conn->query($sql);

?>

<form method='POST' action='editar.php'>
<?php

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo " <label>Nombre:</label><br>
    <input type='text' name='nombre' value='".$row['nombre']."'><br><br>";
    echo " <label>Apellido:</label><br>
    <input type='text' name='apellido' value='".$row['apellido']."'><br><br>";
    echo " <label>Codigo:</label><br>
    <input type='text' name='codigo' value='".$row['codigo']."'><br><br>";
    echo "<input type='submit' name='enviar'>";
    echo "<input type='hidden' name='id' value='".$id."'><br>";
    echo "</tr>";

    
}


CloseCon($conn);

?>

</form>

<form action='index.php'> <input type='submit' value = 'Cancelar'/></form>
