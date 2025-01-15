<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $sql = "UPDATE contacto SET nombre='$nombre', email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="update_cita.php">
    ID: <input type="text" name="id"><br>
    Nombre: <input type="text" name="nombre"><br>
    email: <input type="varchar" name="email"><br>
    mensaje: <input type="text" name="mensaje"><br>
   
    <input type="submit" value="Actualizar contacto">
</form>
