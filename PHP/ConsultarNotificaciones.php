<?php

    include 'conex.php';

    $stmt = $conn->prepare("SELECT * FROM hackathon.notificaciones WHERE Id_Sucursal = 10 AND Id_Proveedor = 3");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();   

    foreach ($stmt as $row) {
    }

?>