<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "Halcon22";
    $db = "umg_test";
   
   
   /* $conexion = new mysqli($servidor, $usuario, $password, $db);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }
*/

    $conexion = mysqli_connect($servidor,$usuario,$password,$db);
    if($conexion){
        echo "Conectado correctamente!";
    }else{
        echo "No fue posible conectarse";
    }

?>