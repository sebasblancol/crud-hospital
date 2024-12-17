<?php
include '../db.php';

$sql = "SELECT * FROM historial_medico";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - ID Paciente: " . $row["id_paciente"]. " - Fecha: " . $row["fecha"]. " - Diagnóstico: " . $row["diagnostico"]. " - Tratamiento: " . $row["tratamiento"]. " - Observaciones: " . $row["observaciones"]. "<br>";
    }
} else {
    echo "0 resultados";
}
?>
