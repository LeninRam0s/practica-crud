<?php

session_start();
$email = $_SESSION['email'];

echo "<h1>Bienvenido $email</h1>";


?>