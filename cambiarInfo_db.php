<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $emailActual = $_SESSION["usuario"]["email"];
        $email = $_POST["email"];
        $contrasena = $_POST["contrasena"];
        $name =$_POST["name"];
        $bio =$_POST["bio"];
        $phone =$_POST["phone"];


    require_once "./database.php";

    if ($name != '') {
        $mysqli -> query("update usuarios SET name = '$name' WHERE email = '$emailActual'");
    }
    

    if ($bio != '') {
        $mysqli -> query("update usuarios SET bio = '$bio' WHERE email = '$emailActual'");
    }

    if ($phone != '') {
        $mysqli -> query("update usuarios SET phoneNumber = '$phone' WHERE email = '$emailActual'");
    }


    // $mysqli -> query("update usuarios 
    // SET name = $name
    // SET bio = $bio
    // SET phone = $phone
   
    // where email = '$email' ");
    


}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tmp_name = $_FILES["imagen"]["tmp_name"];
    
    $contenido = addslashes(file_get_contents($tmp_name));

    require_once "./database.php";

    $mysqli -> query("update usuarios SET img_blob ='$contenido' WHERE email = '$emailActual'");
}


header('Location:./personalInfo.php');
?>