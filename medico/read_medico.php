<?php
include '../db.php';

$sql = "SELECT * FROM medico";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Apellido: " . $row["apellido"]. " - Especialidad: " . $row["especialidad"]. " - Teléfono: " . $row["telefono"]. " - Email: " . $row["email"]. "<br>";
        
    }
} else {
    echo "0 resultados";
}
?>
