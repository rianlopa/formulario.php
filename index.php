<?php
include 'conexion.php';
$conn = OpenCon();

$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);

echo " <table border='1'> <tr><td>ID</td><td>NOMBRE</td><td>APELLIDO</td><td>CODIGO</td></tr> ";

//<td>ID_FACULTAD</td>


while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['apellido'] . "</td>";
    echo "<td>" . $row['codigo'] . "</td>";
    //echo "<td>" . $row['id_facultad'] . "</td>";
    echo "<td><a href='eliminar.php?id=".$row['id']."'>Eliminar</a></td>";
    echo "<td><a href='editarForm.php?id=".$row['id']."'>Editar</a></td>";
    echo "</tr>";
}

echo "<form action='formulario.html'> <input type='submit' value='Ingresar registro'/></form> ";

CloseCon($conn);
?>