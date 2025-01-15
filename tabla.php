<?php
$id = 1; 
$nombre = "santiago";
$apellido = "colmenares";
$especialidad = "cardiologo";
$teléfono = 4112330;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>

    <style> 
table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
}

table, th, td {
  border: 1px solid black;
  padding: 8px;
}

th, td {
  text-align: center;
  padding: 12px;
}

th {
  background-color: #4CAF50; /* Color de fondo para los encabezados */
  color: white; /* Color del texto de los encabezados */
}

tr:nth-child(even) {
  background-color: #f2f2f2; /* Color de fondo para filas pares */
}

tr:nth-child(odd) {
  background-color: #ffffff; /* Color de fondo para filas impares */
}

tr:hover {
  background-color: #ddd; /* Color de fondo cuando se pasa el cursor por una fila */
}

@media screen and (max-width: 600px) {
  table, thead, tbody, th, td, tr {
    display: block;
  }
  thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  tr {
    margin: 0 0 1rem 0;
  }
  tr:nth-child(even) {
    background: #ccc;
  }
  td {
    border: none;
    border-bottom: 1px solid #ddd;
    position: relative;
    padding-left: 50%;
  }
  td:before {
    position: absolute;
    top: 0;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap;
  }
}



    </style>


</head>
<body>
 


<table border="1">



 
<tr> 



     <td>id</td>
     <td>nombre</td>
     <td>apellido</td> 
     <td>especialidad</td> 
     <td>teléfono</td> 
     <td>email</td>
     
    

</tr>


<tr>

<td> <?php echo $id = 1; ?></td>
<td><?php echo $nombre = "andres"; ?></td>
<td> <?php echo $apellido = "alvarez"; ?></td>
<td> <?php echo $especialidad = "ginecología"; ?></td>
<td> <?php echo $teléfono = 456987; ?></td>
<td> <?php echo $email = "alvareza@gmail.com"; ?></td>



</tr>

<tr>


<td> <?php echo $id = 2; ?></td>
<td><?php echo $nombre = "maria"; ?></td>
<td> <?php echo $apellido = "benitez"; ?></td>
<td> <?php echo $especialidad = "cirugia general"; ?></td>
<td> <?php echo $teléfono = 9568245; ?></td>
<td> <?php echo $email = "mariabeni@gmail.com"; ?></td>






</tr>


<tr>

<td> <?php echo $id = 3; ?></td>
<td><?php echo $nombre = "camilo"; ?></td>
<td> <?php echo $apellido = "vanegas"; ?></td>
<td> <?php echo $especialidad = "cirugía plástica"; ?></td>
<td> <?php echo $teléfono = 512655565; ?></td>
<td> <?php echo $email = "vanegasplastico@gmail.com"; ?></td>



</tr>




</table>

</style>

</body>
</html>