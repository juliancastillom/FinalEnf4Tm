<?php

// Este programa se conecta a la base de datos e introduce el valor correspondiente.

$host="127.0.0.1";
$user="root";
$pw='';
$db="enfasisiv";

$mysqli = new mysqli($host, $user, $pw, $db);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$_POST = json_decode(file_get_contents('php://input'), true);

$idUserJS = intval($_POST['idUserJS']);
$idVideoJS= intval($_POST['idVideoJS']);
$catVideoJS = $_POST['catVideoJS'];
$califVideoJS = intval($_POST['califVideoJS']);


$sql = "INSERT INTO calificaciones(idUser,idVideo,categoria,calificacion) VALUES ('$idUserJS','$idVideoJS','$catVideoJS','$califVideoJS')";

if ($mysqli->query($sql) === TRUE) {
    //echo "Se introdujo el valor correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();

?>