<?php

    require ('.../cone.php');

    class Work extends cone
    {
        private $Data1 = array();
        private $Data2 = array();
        private $Data3 = array();

        public function Work()
        {
            parent::__construcut();
        }

        public function arma()
        {
            $sql = ("SELECT * FROM facturas WHERE Estado_Factura = 0");

            $response->$this->$mysqli->query($sql);
            while ($res = mysqli_fetch_assoc($response)) {
                $this->Data1[]=$res;
            }

            return $this->Data1;
        }

        public function arma_det($Numero_Factura)
	    {
		    $sql1 = ("SELECT * FROM detalle_factura WHERE Id_Factura = '' ");
		    $response1=$this->mysqli->query($sql1);

		    while($res1 = mysqli_fetch_assoc($response1))
		    {
			    $this->Data1[]=$res1;
		    }
		    return $this->Data1;
        }

        public function borra_regis($Id_Detalle, $Numero_Factura, $Fecha, $Tipo_Operacion, $Cedula_Cliente, $Estado_Factura, $Cantidad_Venta, $Id_Producto, $Valor_Producto)
        {
            $sql2 = ("INSERT INTO historial VALUES(
                '$Numero_Factura', '$Fecha', '$Tipo_Operacion', '$Cedula_Cliente', '$Estado_Factura', '$Cantidad_Venta', '$Id_Producto', '$Valor_Producto'
            )");
            //print_r($sql2);
            //echo "<br>";
            $response2=$this->mysqli->query($sql2);
    
            $sql3 = ("DELETE FROM detalle_factura WHERE Id_Detalle = 'Id_Detalle'");
            $result=$this->conex->query($sql3);
        }
    
        public function borra_cabeza()
        {
            $sql2 = ("DELETE FROM facturas WHERE Id_Factura = '$Numero_Factura'");
            $result=$this->conex->query($sql2);
        }

    }
?>