<?php
require ("conexion.php");

$idUser= $_POST ["reg_id"];
$apellido= $_POST ["reg_lastName"];
$nombre= $_POST ["reg_name"];
$passwd= $_POST ["reg_pass"];
$tipo = "user";


/********** Código para AÑADIR un usuario a la base de datos ****************/

$sql = "INSERT INTO usuarios (login, password, name, lastName, type) VALUES ('$idUser', '$passwd', '$nombre' ,'$apellido', '$tipo')";

if ($conn->query($sql) === TRUE) {

    echo "<script>location.href='index.html'</script>";
} else {
    echo '<script>alert("Error")</script> ';
    echo "<script>location.href='index.html'</script>";
}
?>

