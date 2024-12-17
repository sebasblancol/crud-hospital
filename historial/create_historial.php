<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_paciente = $_POST['id_paciente'];
    $fecha = $_POST['fecha'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];
    $observaciones = $_POST['observaciones'];

    $sql = "INSERT INTO historial_medico (id_paciente, fecha, diagnostico, tratamiento, observaciones)
            VALUES ('$id_paciente', '$fecha', '$diagnostico', '$tratamiento', '$observaciones')";

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
