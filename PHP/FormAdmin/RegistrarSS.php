<?php
    
    include '../conex.php';

    $nombre = $_POST['NombreSede'];
    $email = $_POST['EmailSede'];
    $password = $_POST['PasswordSede'];


    $stmt = $conn->prepare("INSERT INTO hackathon.sucursal
        (Nombre_sucursal, Direccion_sucursal, Telefono_sucursal)
        VALUES 
        (?,?,?)
    ");
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $password);


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