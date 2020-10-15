<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "hackathon";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";
	$query = "SELECT * FROM productos ORDER By Id_Producto";

	  if(isset($_POST['consulta'])){
		  $q = $conn->real_escape_string($_POST['consulta']);
		  $query = "SELECT Id_Producto, Nombre_Producto, Stcok_Producto, Valor_Producto, StockPro_MIn, Iva_Producto FROM sucursales
		  WHERE Nombre_Producto LIKE '%".$q."%' OR Stcok_Producto LIKE '%".$q."%' OR Valor_Producto LIKE '%".$q."%' OR Stock_Producto LIKE '%".$q."%' OR Iva_Producto LIKE '%".$q."%' ";
	  }
	  $resultado = $conn ->query($query);

	  if($resultado->num_rows>0){

		$salida.="
			



		<div class='tabla-sucursal w-50 position-absolute mt-3 ml-4'>
			<table border=1 class='table table-dark'>
    			<thead>
    				<tr id='titulo'>
    					<td>Id_producto</td>
    					<td>Nombre_producto</td>
    					<td>Stock_producto</td>
                        <td>Valor_producto</td>
                        <td>StockMin_producto</td>
                        <td>Iva_producto</td>
    					
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['Id_Producto']."</td>
    					<td>".$fila['Nombre_Producto']."</td>
    					<td>".$fila['Stcok_Producto']."</td>
                        <td>".$fila['Valor_Producto']."</td>
                        <td>".$fila['StockPro_MIn']."</td>
                        <td>".$fila['Iva_Producto']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table></div>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>