<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $id_paciente = $_POST['id_paciente'];
    $fecha = $_POST['fecha'];
    $diagnostico = $_POST['diagnostico'];
    $tratamiento = $_POST['tratamiento'];
    $observaciones = $_POST['observaciones'];

    $sql = "UPDATE historial_medico SET id_paciente='$id_paciente', fecha='$fecha', diagnostico='$diagnostico', tratamiento='$tratamiento', observaciones='$observaciones' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="update_historial.php">
    <!-- Formulario con campos para el historial médico, incluyendo un campo oculto para el ID -->
</form>
