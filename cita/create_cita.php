<?php
include './../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_paciente = $_POST['id_paciente'];
    $id_medico = $_POST['id_medico'];
    $fecha_cita = $_POST['fecha_cita'];
    $hora_cita = $_POST['hora_cita'];
    $motivo = $_POST['motivo'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO cita (paciente_id, medico_id, fecha, motivo, estado)
            VALUES ('$id_paciente', '$id_medico', '$fecha_cita $hora_cita', '$motivo', '$estado')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva cita creada correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!-- mi comentario -->
 
<form method="post" action="create_cita.php">
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
    <input type="submit" value="Crear Cita">
</form>
