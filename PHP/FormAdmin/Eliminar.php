<?php

// Eliminar el dato de la lista

include 'conex.php';    
    $ID=$_POST['usuario'];


try {
 

  // sql to delete a record
  $sql = "DELETE FROM sucursal WHERE Id_sucursal='$ID'";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<script>
        alert('Sucursal Eliminada!');
        window.location= 'DashboardAdmin.php'
    </script>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>