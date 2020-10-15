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
	$query = "SELECT * FROM sucursales ORDER By Id_Sucursal";

	  if(isset($_POST['consulta'])){
		  $q = $conn->real_escape_string($_POST['consulta']);
		  $query = "SELECT Id_Sucursal, Nombre_sucursal, Direccion_Sucursal, Telefono_Sucursal FROM sucursales
		  WHERE Nombre_sucursal LIKE '%".$q."%' OR Direccion_Sucursal LIKE '%".$q."%' OR Telefono_Sucursal LIKE '%".$q."%' ";
	  }
	  $resultado = $conn ->query($query);

	  if($resultado->num_rows>0){

		$salida.="
			



		<div class='tabla-sucursal w-50 position-absolute mt-3 ml-4'>
			<table border=1 class='table table-dark'>
    			<thead>
    				<tr id='titulo'>
    					<td>Id_Sucursal</td>
    					<td>Nombre_sucursal</td>
    					<td>Direccion_sucursal</td>
    					<td>Telefono_sucursal</td>
    					
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['Id_Sucursal']."</td>
    					<td>".$fila['Nombre_sucursal']."</td>
    					<td>".$fila['Direccion_Sucursal']."</td>
    					<td>".$fila['Telefono_Sucursal']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table></div>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>