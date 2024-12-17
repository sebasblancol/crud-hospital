<?php
include 'db.php';

$sql = "SELECT * FROM receta";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - ID Paciente: " . $row["id_paciente"]. " - ID Medico: " . $row["id_medico"]. " - Fecha: " . $row["fecha"]. " - Medicamentos: " . $row["medicamentos"]. " - Dosis: " . $row["dosis"]. " - Instrucciones: " . $row["instrucciones"]. "<br>";
    }
} else {
    echo "0 resultados";
}
?>
