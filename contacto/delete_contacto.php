<?php
include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM contacto WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="post" action="delete_contacto.php">
    ID: <input type="text" name="id"><br>
    <input type="submit" value="Eliminar contacto">
</form>
