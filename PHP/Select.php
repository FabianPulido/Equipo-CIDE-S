<?php

    require('conex.php');

    $stmt = $conn->prepare("SELECT * FROM hackathon.sucursales");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
?>