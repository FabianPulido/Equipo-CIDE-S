<?php

    include 'conex.php';


    $stmt = $conn->prepare("SELECT Cantidad_Producto FROM hackathon.inventaerio WHERE Id_Sucursal = 10");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $mensaje = "Estas en un tope minimo de productos, contacta a tu proveedor";

    $notificacion = "Necesito mas productos";
    $Id_Sucursal = "10";
    $Id_Proveedor = "3";
    $Producto = "Cerveza";
    $cantidad = "7";

    foreach ($stmt as $row) {
        if ($row['Cantidad_Producto'] <= "10") {
            
            $pos = $conn->prepare("INSERT INTO notificaciones (Nombre_Notificacion, Id_Sucursal, Id_Proveedor, Nombre_Producto, Cantidad_Producto) 
                VALUES (?,?,?,?,?)
            ");

                        
            $pos->bindParam(1, $notificacion);
            $pos->bindParam(2, $Id_Sucursal);
            $pos->bindParam(3, $Id_Proveedor);
            $pos->bindParam(4, $Producto);
            $pos->bindParam(5, $cantidad);

            $pos->execute();

        }else {
            //print 'Todo esta correcto';
        }
    }

?>