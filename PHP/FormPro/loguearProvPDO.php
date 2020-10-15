<?php

include '../conex.php';
    
$stmt = $conn->prepare("SELECT * FROM proveedores");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();


foreach ($stmt as $row) {}

try {

    $Usuario =$_POST['NombreProveedor'];
    $Pass =$_POST['PasswordProveedor'];
    $email =$_POST['EmailProveedor'];

    if ($Usuario == $row['Nombre_Proveedor'] AND $email == $row['Correo_Proveedor'] AND $Pass == $row['Password_Proveedor']) {
        
        echo "<script>
    alert('Bienvenid@');
    window.location= 'DashboardPro.php'
</script>";
       
    }else{
        echo "<script>
            alert('Algún campo no es valido');
            window.location= 'DashboardPro.php'
            </script>"
        ;
    }

} catch (PDOEXception $e) {
    print "Error" . $e->getMessage();
}

?>