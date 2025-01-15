<?php
require ("../db.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receta</title>
</head>
<body>
    
<h1>Receta List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Paciente_ID</th>
            <th>Medico_ID</th>
            <th>Fecha</th>
            <th>Medicamentos</th>
            <th>Dosis</th>
            <th>Instrucciones</th>
        </tr>
        
        <?php
        $result = $conn->query("SELECT * FROM receta");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['paciente_id']}</td>
                <td>{$row['medico_id']}</td>
                <td>{$row['fecha']}</td>
                <td>{$row['medicamentos']}</td>
                <td>{$row['dosis']}</td>
                <td>{$row['instrucciones']}</td>
              



                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a>
                    <a href='delete.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
    <a href="create_receta.php">Añadir nueva receta</a>







</body>
</html>