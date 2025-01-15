<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_paciente = $_POST['id_paciente'];
    $id_medico = $_POST['id_medico'];
    $fecha = $_POST['fecha'];
    $medicamentos = $_POST['medicamentos'];
    $dosis = $_POST['dosis'];
  

    $sql = "INSERT INTO receta (id_paciente, id_medico, fecha, medicamentos, dosis)
            VALUES ('$id_paciente', '$id_medico', '$fecha', '$medicamentos', '$dosis')";

    if ($conn->query($sql) === TRUE) {
        echo "Nueva receta creada correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="create_receta.php">
    ID Paciente: <input type="text" name="id_paciente"><br>
    ID Medico: <input type="text" name="id_medico"><br>
    Fecha: <input type="date" name="fecha"><br>
    Medicamentos: <textarea name="medicamentos"></textarea><br>
    Dosis: <textarea name="dosis"></textarea><br>
   
    <input type="submit" value="Crear Receta">
</form>
