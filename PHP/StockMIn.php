<?php

    include 'conex.php';


    $stmt = $conn->prepare("SELECT Cantidad_Producto FROM hackathon.inventaerio WHERE Id_Sucursal = 10");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();


    foreach ($stmt as $row) {
        if ($row['Cantidad_Producto'] <= "10") {

            
            echo "<script>
                window.location= 'FormNotify.php'
            </script>";
            

        }else {
            //print 'Todo esta correcto';
        }
    }

?>