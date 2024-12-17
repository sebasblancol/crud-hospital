<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $documento_identidad = $_POST['documento_identidad'];
    $numero_documento = $_POST['numero_documento'];

    $sql = "INSERT INTO paciente (nombre, apellido, fecha_nacimiento, genero, direccion, telefono, email, documento_identidad, numero_documento)
            VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$genero', '$direccion', '$telefono', '$email', '$documento_identidad', '$numero_documento')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo paciente creado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="create.php">
    <!-- Formulario con campos para el paciente -->
</form>
