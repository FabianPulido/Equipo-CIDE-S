<?php

include 'cone.php';

    $tabla="";
    $query="SELECT * FROM hackthon.sucursales ORDER BY Id_sucursal";


    if(isset($_POST[sucursal])){

        $q=$conexion->real_escape_string($_POST['sucursal']);
        $query="SELECT * FROM hackathon.sucursal WHERE
        Id_sucursal LIKE '%".$q."%' OR
        Nombre_sucursal LIKE '".$q."%' OR
        Direccion_sucursal LIKE '".$q."%' OR
        Telefono_sucursal LIKE '".$q."%'";
    }

    $buscarAlumnos=$conexion->query($query);
    if ($buscarAlumnos->num_rows > 0){

        $tabla.=
        '<table class="table">
            <tr class="bg-primary">
                <td>ID Sucursal</td>
                <td>Nombre sucursal</td>
                <td>Direccion sucursal</td>
                <td>Telefono sucursal</td>
            </tr>';

        while($fila=$buscarAlumnos->fetch_assoc()){

            $tabla.=
            '<tr>
            <td>'.$fila['Id_sucursal']'</td>
            <td>'.$fila['Nombre_sucursal']'</td>
            <td>'.$fila['Direccion_sucursal']'</td>
            <td>'.$fila['Telefono_sucursal']'</td>
        </tr>';
        }
        $tabla.='</table>';
    } else {
        $tabla="no se encontraron elementos con el criterio de busqueda.";
    }

    echo $tabla;

?>