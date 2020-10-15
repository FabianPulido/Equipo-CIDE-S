<?php

    include '../conex.php';
    $stmt = $conn->prepare("SELECT * FROM hackathon.inventaerio WHERE Id_Sucursal = 10");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    foreach ($stmt as $row) {
        //print $row['Nombre_Producto'] . $row['Valor_Producto'] . $row['Cantidad_Producto'];

        if ($row['Cantidad_Producto'] <= 10) {
            print 'Estas llegnado al limite de unidades';
        }

    }

?>