<?php
include 'db.php';

$sql = "SELECT * FROM paciente";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellido"]. " - Fecha de Nacimiento: " . $row["fecha_nacimiento"]. "<br>";
    }
} else {
    echo "0 resultados";
}
?>
