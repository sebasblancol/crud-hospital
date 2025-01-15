<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pacienteId = $_POST['pacienteId'];
    $medicoId = $_POST['medicoId'];
    $fecha = $_POST['fecha'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];
    $observaciones = $_POST['observaciones'];

    $sql = "INSERT INTO historial_medico (paciente_id,medico_id, fecha, diagnostico, tratamiento, observaciones)
            VALUES ('$pacienteId', '$medicoId', '$fecha', '$diagnostico', '$tratamiento', '$observaciones')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="create_historial.php">
    <!-- Formulario con campos para el historial médico -->
</form>
