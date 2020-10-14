<?php

include 'conex.php';

$correo = $_POST['correo'];
$pclave = $_POST['clave'];
$nombre = $_POST['nombre'];


$stmt = $conn->prepare("INSERT INTO empresa (Nombre_empresa, Correo_emp, Contrasena_emp) VALUES (?, ?, ?)");
// Bind

$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $correo);
$stmt->bindParam(3, $pclave);

// Excecute
$stmt->execute();
echo 'datos guardados con exito!';
?>