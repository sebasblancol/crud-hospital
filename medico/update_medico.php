<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $especialidad = $_POST['especialidad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "UPDATE medico SET nombre='$nombre', apellido='$apellido', especialidad='$especialidad', telefono='$telefono', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="update_medico.php">
    ID: <input type="text" name="id"><br>
    Nombre: <input type="text" name="nombre"><br>
    Apellido: <input type="text" name="apellido"><br>
    Especialidad: <input type="text" name="especialidad"><br>
    Teléfono: <input type="text" name="telefono"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Actualizar Médico">
</form>
