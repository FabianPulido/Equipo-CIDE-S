<?php

    include '../conex.php';

    $nombre = $_POST['NombreSede'];
    $email = $_POST['EmailSede'];
    $password = $_POST['PasswordSede'];
    $empresa = $_POST['Id_Empresa'];

    $stmt = $conn->prepare("INSERT INTO hackathon.sucursales
        (Nombre_Sucursal, Direccion_Sucursal, Telefono_Sucursal, Id_Empresa)
        VALUES 
        (?,?,?,?)
    ");
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $password);
    $stmt->bindParam(4, $empresa);

    $stmt->execute();

    if ($stmt == true) {
        echo "<script>
            alert('Sucursal registrada');
            window.location= '../DashboardS.php'
        </script>";
    }else{
        print "error al insertar datos"; 
    }

?>