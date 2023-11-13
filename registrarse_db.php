<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $contrasena = $_POST["contrasena"];

    require_once "./database.php";

    $existente = $mysqli -> query("select * from usuarios where email = '$email' ");

    if ($existente -> num_rows == 0) {
        $mysqli -> query("insert into usuarios (email, contrasena) values ('$email', '$contrasena') ");
    } else {
        echo 'al pararecer ese usuario ya existe';
    }
    

    $res = $mysqli -> query("select * from usuarios where email = '$email' and contrasena = '$contrasena' ");

    if ($res -> num_rows == 1) {
         $dataUsuario = $res -> fetch_assoc();
         $_SESSION["usuario"] = $dataUsuario;
         header('Location: ./personalInfo.php');

     } else {
         echo "Esta fallando la query para insertar la info";
     }


}




?>