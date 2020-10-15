<?php

    require('./conex.php');

    $stmt = $conn->prepare("SELECT Id_Empresa FROM hackathon.empresas");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
?>