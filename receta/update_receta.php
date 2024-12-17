<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $id_paciente = $_POST['id_paciente'];
    $id_medico = $_POST['id_medico'];
    $fecha = $_POST['fecha'];
    $medicamentos = $_POST['medicamentos'];
    $dosis = $_POST['dosis'];
    $instrucciones = $_POST['instrucciones'];

    $sql = "UPDATE receta SET id_paciente='$id_paciente', id_medico='$id_medico', fecha='$fecha', medicamentos='$medicamentos', dosis='$dosis', instrucciones='$instrucciones' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="update_receta.php">
    ID: <input type="text" name="id"><br>
    ID Paciente: <input type="text" name="id_paciente"><br>
    ID Medico: <input type="text" name="id_medico"><br>
    Fecha: <input type="date" name="fecha"><br>
    Medicamentos: <textarea name="medicamentos"></textarea><br>
    Dosis: <textarea name="dosis"></textarea><br>
    Instrucciones: <textarea name="instrucciones"></textarea><br>
    <input type="submit" value="Actualizar Receta">
</form>
