<?php

    include 'conex.php';


    $stmt = $conn->prepare("SELECT Cantidad_Producto FROM hackathon.inventaerio WHERE Id_Sucursal = 8");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $mensaje = "Estas en un tope minimo de productos, contacta a tu proveedor";

    foreach ($stmt as $row) {
        if ($row['Cantidad_Producto'] <= "10") {
            
            print $mensaje;

            $pos = $conn->prepare("INSERT INTO notificaciones (Nombre_Notificacion)");

        }else {
            //print 'Todo esta correcto';
        }
    }

?>