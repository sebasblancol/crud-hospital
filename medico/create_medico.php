<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $especialidad = $_POST['especialidad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $sql = "INSERT INTO medico (nombre, apellido, especialidad, telefono, email)
            VALUES ('$nombre', '$apellido', '$especialidad', '$telefono', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo medico creado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} ?> <form method="post" action="create_medico.php"> Nombre: <input type="text" name="nombre"><br> Apellido: <input type="text" name="apellido"><br> Especialidad: <input type="text" name="especialidad"><br> Teléfono: <input type="text" name="telefono"><br> Email: <input type="text" name="email"><br> <input type="submit" value="Crear Médico"> </form>
