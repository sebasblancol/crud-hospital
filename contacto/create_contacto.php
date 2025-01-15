
<?php
include '../db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = ($_POST['nombre']);
    $email =($_POST['email']);
    $mensaje = ($_POST['mensaje']);

    $sql = "INSERT INTO contacto (nombre, email, mensaje)
            VALUES ('$nombre', '$email', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>






