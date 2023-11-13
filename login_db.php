<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $contrasena = $_POST["contrasena"];

    require_once "./database.php";

    $res = $mysqli -> query("select * from usuarios where email = '$email' and contrasena = '$contrasena' ");

    if ($res -> num_rows == 1) {
        $dataUsuario = $res -> fetch_assoc();
        $_SESSION["usuario"] = $dataUsuario;
        header('Location: ./personalInfo.php');

    } else {
        echo "Lo sentimos, el usuario o contrasena es incorrecto";
    }


}




?>