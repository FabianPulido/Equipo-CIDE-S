<?php

include 'conex.php';
    
$stmt = $conn->prepare("SELECT * FROM empresa");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();


foreach ($stmt as $row) {}

try {

    print $Usuario =$_POST['NombreEmpresa'];
    print $Pass =$_POST['PasswordEmpresa'];
    print $email =$_POST['EmailEmpresa'];

    if ($Usuario == $row['Nombre_empresa'] AND $email == $row['Correo_emp'] AND $Pass == $row['Contrasena_emp']) {
        
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