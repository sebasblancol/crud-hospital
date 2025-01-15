<?php
include './../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $genero = $_POST['genero'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $tipoDocumento = $_POST['tipoDocumento'];
    $numeroDocumento = $_POST['numeroDocumento'];

    $sql = "INSERT INTO paciente (nombre, apellido, fecha_nacimiento, genero, direccion, telefono, email, tipo_documento, numero_documento)
            VALUES ('$nombre', '$apellido', '$fechaNacimiento', '$genero', '$direccion', '$telefono', '$email', '$tipoDocumento', '$numeroDocumento')";

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
