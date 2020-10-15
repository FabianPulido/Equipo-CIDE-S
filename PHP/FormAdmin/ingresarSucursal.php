<?php

include '../conex.php';
    
session_start();
$stmt = $conn->prepare("SELECT * FROM sucursales");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();


foreach ($stmt as $row) {}

$_SESSION['id'] = $row['Id_Sucursal'];

try {

    $sucursal = $_POST['NombreSede'];
    $Telefono = $_POST['TelefonoSede'];

    if ($sucursal == $row['Nombre_Sucursal'] AND $Telefono == $row['Telefono_Sucursal']) {
        
        echo "<script>
            alert('Bienvenid@');
            window.location= '../DashboardS.php'
        </script>";
       
    }else{
        echo "<script>
            alert('Algún campo no es valido');
            window.location= '../DashboardAdmin.php'
            </script>"
        ;
    }

} catch (PDOEXception $e) {
    print "Error" . $e->getMessage();
}

?>