<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $documento_identidad = $_POST['documento_identidad'];
    $numero_documento = $_POST['numero_documento'];

    $sql = "UPDATE paciente SET nombre='$nombre', apellido='$apellido', fecha_nacimiento='$fecha_nacimiento', genero='$genero', direccion='$direccion', telefono='$telefono', email='$email', documento_identidad='$documento_identidad', numero_documento='$numero_documento' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="update.php">
    <!-- Formulario con campos para el paciente, incluyendo un campo oculto para el ID -->
</form>
