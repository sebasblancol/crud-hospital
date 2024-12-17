<?php

include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $id_paciente = $_POST['id_paciente'];
    $id_medico = $_POST['id_medico'];
    $fecha_cita = $_POST['fecha_cita'];
    $hora_cita = $_POST['hora_cita'];
    $motivo = $_POST['motivo'];
    $estado = $_POST['estado'];

    $sql = "UPDATE cita SET id_paciente='$id_paciente', id_medico='$id_medico', fecha_cita='$fecha_cita', hora_cita='$hora_cita', motivo='$motivo', estado='$estado' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="update_cita.php">
    ID: <input type="text" name="id"><br>
    ID Paciente: <input type="text" name="id_paciente"><br>
    ID Medico: <input type="text" name="id_medico"><br>
    Fecha Cita: <input type="date" name="fecha_cita"><br>
    Hora Cita: <input type="time" name="hora_cita"><br>
    Motivo: <textarea name="motivo"></textarea><br>
    Estado: <select name="estado">
        <option value="Pendiente">Pendiente</option>
        <option value="Realizada">Realizada</option>
        <option value="Cancelada">Cancelada</option>
    </select><br>
    <input type="submit" value="Actualizar Cita">
</form>
