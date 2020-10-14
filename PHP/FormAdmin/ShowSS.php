<?php

    include 'conex.php';
    $stmt = $conn->prepare("SELECT * FROM hackathon.sucursal");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

?>