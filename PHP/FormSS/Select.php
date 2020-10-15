<?php

    include '../conex.php';
    $stmt = $conn->prepare("SELECT * FROM hackathon.inventaerio WHERE Id_Sucursal = 3");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    foreach ($stmt as $row) {
        print $row['Nombre_Producto'] . $row['Valor_Producto'] . $row['Cantidad_Producto'];
    }

?>