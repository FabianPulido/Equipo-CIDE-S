<?php

// Eliminar el dato de la lista

include '../conex.php';    
    $ID=$_POST['producto'];


try {
 

  // sql to delete a record
  $sql = "DELETE FROM productos WHERE Id_Producto='$ID'";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<script>
        alert('Sucursal Eliminada!');
        window.location= '../DashboardPro.php'
    </script>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>