<?php
include('conexion.php');

//Iniciar la sesion
session_start();
$_SESSION['nombre'] = $nombre;

$email = $_POST['email'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];

$query = "SELECT COUNT(*) as contar FROM user WHERE email = '$email' AND password = '$password'";
$consulta = mysqli_query($conexion, $query);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['email'] = $email;
    header("location: ../session/index.php");
}else{
    echo "Datos Incorrectos";
}

?>