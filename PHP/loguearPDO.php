<?php

include 'conex.php';
    
$stmt = $conn->prepare("SELECT * FROM empresas");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();


foreach ($stmt as $row) {}

try {

    $Usuario =$_POST['NombreEmpresa'];
    $Pass =$_POST['PasswordEmpresa'];
    $email =$_POST['EmailEmpresa'];

    if ($Usuario == $row['Nombre_Empresa'] AND $email == $row['Correo_Empresa'] AND $Pass == $row['Password_Empresa']) {
        
        echo "<script>
            alert('Bienvenid@');
            window.location= 'DashboardAdmin.php'
        </script>";
       
    }else{
        echo "<script>
            alert('Algún campo no es valido');
            window.location= '../index.html'
            </script>"
        ;
    }

} catch (PDOEXception $e) {
    print "Error" . $e->getMessage();
}

?>