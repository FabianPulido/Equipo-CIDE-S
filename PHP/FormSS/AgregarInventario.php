<?php

    include '../conex.php';

    $Id_Sucursal = $_POST['Sucursal'];
    $NombreProducto = $_POST['Producto'];
    $ValorProducto = $_POST['Precio'];
    $Cantidad = $_POST['Cantidad'];

    //print $Id_Sucursal . $NombreProducto . $ValorProducto . $Cantidad;

    $stmt = $conn->prepare("INSERT INTO inventaerio (Id_Sucursal, Nombre_Producto, Valor_Producto, Cantidad_Producto) 
    VALUES (?, ?, ?, ?)");
    // Bind

    $stmt->bindParam(1, $Id_Sucursal);
    $stmt->bindParam(2, $NombreProducto);
    $stmt->bindParam(3, $ValorProducto);
    $stmt->bindParam(4, $Cantidad);

    // Excecute
    $stmt->execute();
    echo "<script>
            alert('Inventario registrado!');
            window.location= '../DashboardS.php'
        </script>";
    ?>

?>