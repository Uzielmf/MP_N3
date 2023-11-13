<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tpm_name = $_FILES["imagen"]["tpm_name"];
    
    $contenido = addslashes(file_get_contents($tpm_name));

    var_dump($contenido);
}

require_once "./database.php";

$mysqli -> query("insert into usuarios (img_blob) values ('$contenido')");



?>
