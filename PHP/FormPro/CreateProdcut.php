<?php
    
    include '../conex.php';

    $nombre = $_POST['Nombreprod'];
    $stock = $_POST['Stockprod'];
    $valor = $_POST['Valorprod'];
    $stockmin = $_POST['Stockmin'];
    $iva = $_POST['ivaprod'];
    $prov = $_POST['Proveedor'];
    


    $stmt = $conn->prepare("INSERT INTO hackathon.productos
        (Nombre_Producto, Stcok_Producto, Valor_Producto, StockPro_MIn, Iva_Producto, Id_Proveedor)
        VALUES 
        (?,?,?,?,?,?)
    ");
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $stock);
    $stmt->bindParam(3, $valor);
    $stmt->bindParam(4, $stockmin);
    $stmt->bindParam(5, $iva);
    $stmt->bindParam(6, $prov);


    $stmt->execute();

    if ($stmt == true) {
        echo "<script>
        alert('Producto registrado');
        window.location= '../FormPro/DashboardPro.php'
    </script>";
    }else{
        print "error al insertar datos"; 
    }

?>