<?php
    
    include '../conex.php';

    $nombre = $_POST['Nombreprod'];
    $stock = $_POST['Stockprod'];
    $valor = $_POST['Valorprod'];
    $stockmin = $_POST['Stockmin'];
    $iva = $_POST['ivaprod'];
    


    $stmt = $conn->prepare("INSERT INTO hackathon.producto
        (Nombre_prod, Stock_prod, Valor_prod, Stock_prod_min, IVA_prod)
        VALUES 
        (?,?,?,?,?)
    ");
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $stock);
    $stmt->bindParam(3, $valor);
    $stmt->bindParam(4, $stockmin);
    $stmt->bindParam(5, $iva);


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