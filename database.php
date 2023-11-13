<?php
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$basedatos = "login_db";
$puerto = "3308";


try {
    $mysqli = new mysqli($localhost, $username, $password, $basedatos, $puerto);
} catch (mysqli_sql_exception $e) {
    echo "Error de conexion ". $e->getMessage();
}

?>