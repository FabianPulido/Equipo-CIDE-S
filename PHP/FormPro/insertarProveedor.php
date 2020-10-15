<?php

include '../conex.php';

$correo = $_POST['EmailProveedor'];
$pclave = $_POST['PasswordProveedor'];
$nombre = $_POST['NombreProveedor'];


$stmt = $conn->prepare("INSERT INTO proveedores (Nombre_Proveedor, Correo_Proveedor, Password_Proveedor)
 VALUES (?, ?, ?)");
// Bind

$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $correo);
$stmt->bindParam(3, $pclave);

// Excecute
$stmt->execute();
echo "<script>
    alert('Proveedor Registrado!!, Bienvenid@');
    window.location= 'DashboardPro.php'
</script>";
?>