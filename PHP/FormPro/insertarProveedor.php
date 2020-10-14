<?php

include 'conex.php';

$correo = $_POST['EmailProveedor'];
$pclave = $_POST['PasswordProveedor'];
$nombre = $_POST['NombreProveedor'];


$stmt = $conn->prepare("INSERT INTO proveedor (Nombre, Correo_proveedor, Password_proveedor) VALUES (?, ?, ?)");
// Bind

$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $correo);
$stmt->bindParam(3, $pclave);

// Excecute
$stmt->execute();
echo "<script>
        alert('Proveedor registrado!');
        window.location= '../Proveedores.php'
    </script>";
?>