<?php
include '../db.php';


$sql = "SELECT * FROM cita";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - ID Paciente: " . $row["id_paciente"]. " - ID Medico: " . $row["id_medico"]. " - Fecha Cita: " . $row["fecha_cita"]. " - Hora Cita: " . $row["hora_cita"]. " - Motivo: " . $row["motivo"]. " - Estado: " . $row["estado"]. "<br>";
    }
} else {
    echo "0 resultados";
}
?>
