<?php
include '../db.php';

$sql = "SELECT * FROM contacto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - email: " . $row["email"]. " - mensaje: " . $row["mensaje"].  "<br>";
        
    }
} else {
    echo "0 resultados";
}
?>
