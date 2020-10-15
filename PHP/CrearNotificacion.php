<?php

include 'conex.php';

$sede = $_POST['Sede'];
$proveedor = $_POST['Proveedor'];
$producto = $_POST['Producto'];
$cantidad = $_POST['Cantidad'];
$mensaje = $_POST['Mensaje'];

$stmt = $conn->prepare("INSERT INTO notificaciones (Nombre_Notificacion, Id_Sucursal, Id_Proveedor, Nombre_Producto, Cantidad_Producto) 
VALUES (?, ?, ?, ?, ?)");
// Bind

$stmt->bindParam(1, $mensaje);
$stmt->bindParam(2, $sede);
$stmt->bindParam(3, $proveedor);
$stmt->bindParam(4, $producto);
$stmt->bindParam(5, $cantidad);

// Excecute
$stmt->execute();
echo "<script>
        alert('Empresa registrada!');
        window.location= 'DashboardPro.php'
    </script>";
?>