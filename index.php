<?php 

echo '<h1>Conexión de PHP con MYSQL</h1>';

// Conectarse a la BD
$connection = mysqli_connect('localhost', 'root','','concesionario');

if(mysqli_connect_errno()) {
    echo 'Error al conectarse a la base de datos';
} else {
    echo 'Conexión exitosa a la base de datos!!!';
}

// Consulta para configurar la codificación de carácteres
mysqli_query($connection, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$resultado = mysqli_query($connection, "SELECT * FROM grupos");


while($grupo = mysqli_fetch_assoc($resultado)) {
    var_dump($grupo);
}

// //INSERT
// $sql = "INSERT INTO grupos VALUES(null,'Vendedores A', 'Manizales')";

// $query = mysqli_query($connection,$sql);

// if($query) {
//     echo 'DATOS INSERTADOS CORRECTAMENTE';
// } else {
//     echo '<h2>Error: '.mysqli_error($connection).'</h2>';
// }







?>