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
} ?> 

