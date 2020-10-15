<?php

    require("class/Historial.php");

    $tra = new Trabajo();
    $uno = $tra->arma();
    //print_r($uno);
    //echo "<br>";

    for ($i=0;$i<=sizeof($uno)-1;$i++)
    {
        $NumeroFactura = $uno[$i]['Id_Factura'];
        $Fecha_Factura = $uno[$i]['Fecha'];
        $Tipo_Opercion = $uno[$i]['Tipo_Operacion'];
        $Cedula_Cliente = $uno[$i]['Cedula_Cliente'];
        $Estado_Factura = $uno[$i]['Estado_Factura'];

        //echo $uno[$i]["id_factura"]."<br>";

        $det = new Trabajo();
        $dos = $det->arma_det($NumeroFactura);

        
        for( $j = 0; $j<=sizeof($dos)-1; $j++)
        {
            $Id_Detalle = $dos[$j]['Id_Detalle'];
            $Cantidad_Venta = $dos[$j]['Cantidad_Venta'];
            $Id_Producto = $dos[$j]['Id_Producto'];
            $Valor_Producto = $dos[$j]['Valor_Producto'];
            
            $tra=new Trabajo();
            $tres=$tra->borra_regis($Id_Detalle, $NumeroFactura, $Fecha_Factura, $Tipo_Opercion, $Cedula_Cliente, $Estado_Factura, $Cantidad_Venta, $Id_Producto, $Valor_Producto);

            //echo $dos[$i]["id_detalle"]."<br>";
        }
        $borra=new Trabajo();
        $bor1=$borra->borra_cabeza($NumeroFactura);
    }
?>