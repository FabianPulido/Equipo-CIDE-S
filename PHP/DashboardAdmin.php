<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Link CSS -->
  <link rel="stylesheet" href="../CSS/Admin/index.css">
  <link rel="stylesheet" href="../CSS/Admin/Sucursal.css">
  

  <title>Dashboard Admin</title>

</head>
<body>


  <!-- navbar principal -->
  <div class="navbar-admin">
    <a href="">
      <h1>
        Administrador
      </h1>
    </a>
    <div class="nav">
        
    </div>
  </div>

<<<<<<< HEAD
  
  <!-- Formulario de Registrar Sucursal -->
  <section class="form-register" id="form">
    <form action="FormAdmin/RegistrarSS.php" method="post">
      <h4>Registrar Sede/Sucursal</h4>

      <!-- Input NombreSede/Sucursal -->
      <input class="controls" type="text" name="NombreSede" placeholder="Ingrese Nombre Sede/Sucursal">

      <!-- Input EmailSede/Sucursal -->
      <input class="controls" type="text" name="EmailSede" placeholder="Ingrese Direccion Sede/Sucursal">

      <!-- Input PasswordSede/Sucursal -->
      <input class="controls" type="text" name="PasswordSede" placeholder="Ingrese Telefono Sede/Sucursal">

      <!-- Input Id_Empresa -->
      <input class="controls" type="text" name="Id_Empresa" placeholder="Ingrese Id Empresa">


      <input class="botons" type="submit" value="Registrar">
    </form>
  </section>
    

  <!-- Tabla para mostrar las sucursales -->   
  <section class="principal2">

      <h1>BUSQUEDA DE SUCURSALES</h1>

        <div class="formularioaj">
            <label for="caja_busqueda">Buscar</label>
                <input type="text" name="caja_busqueda" id="caja_busqueda" class="cajita"></input>

  
        </div>

        <div id="datos" class=""></div>


  </section>
  

  <!-- Formulario ingreso sucursal -->
    <!-- Formulario de Registrar Sucursal -->
    <section class="form-sucursal" id="sucursal">
    <form action="FormAdmin/ingresarSucursal.php" method="post">
      <h4>Ingresar Sede/Sucursal</h4>

      <!-- Input NombreSede/Sucursal -->
      <input class="controls" type="text" name="NombreSede" placeholder="Ingrese Nombre Sede/Sucursal">
=======
  <div class="tablero-trabajo">

    <div class="form-login-sucursal">
      <!-- Formulario ingreso sucursal -->
      <section class="form-sucursal" id="sucursal">
        <form action="FormAdmin/ingresarSucursal.php" method="post">
          <h4>Ingresar Sede/Sucursal</h4>

          <!-- Input NombreSede/Sucursal -->
          <input class="controls" type="text" name="NombreSede" placeholder="Ingrese Nombre Sede/Sucursal">

          <!-- Input EmailSede/Sucursal -->
          <input class="controls" type="text" name="TelefonoSede" placeholder="Ingrese Telefono Sede/Sucursal">


          <input class="botons" type="submit" value="Ingresar">
        </form>
      </section>
    </div>

    <div class="form-register-sucursal">
      <!-- Formulario de Registrar Sucursal -->
      <section class="form-register" id="form">
        <form action="FormAdmin/RegistrarSS.php" method="post">
          <h4>Registrar Sede/Sucursal</h4>

          <!-- Input NombreSede/Sucursal -->
          <input class="controls" type="text" name="NombreSede" placeholder="Ingrese Nombre Sede/Sucursal">

          <!-- Input EmailSede/Sucursal -->
          <input class="controls" type="text" name="EmailSede" placeholder="Ingrese Direccion Sede/Sucursal">

          <!-- Input PasswordSede/Sucursal -->
          <input class="controls" type="text" name="PasswordSede" placeholder="Ingrese Telefono Sede/Sucursal">

          <!-- Input Id_Empresa -->
          <input class="controls" type="text" name="Id_Empresa" placeholder="Ingrese Id Empresa">

          <input class="botons" type="submit" value="Registrar">
        </form>
      </section>
    </div>

    <div class="tabla-sucursales">
      <!-- Tabla para mostrar las sucursales -->   
      <div class="tabla-sucursal w-50 position-absolute mt-3 ml-4">
        <table class="table table-dark" >
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Dirección</th>
              <th scope="col">Telefono</th>
              <th scope="col">Procedimiento</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include 'conex.php';
              $stmt = $conn->prepare("SELECT * FROM sucursales");
              // Especificamos el fetch mode antes de llamar a fetch()
              $stmt->setFetchMode(PDO::FETCH_ASSOC);
              // Ejecutamos
              $stmt->execute();
              // Mostramos los resultados
              while ($row = $stmt->fetch()){

                echo "<tr>
                <form action='FormAdmin/Eliminar.php' method='POST'>
                  <th scope='row'>
                    {$row['Id_Sucursal']} 
                  </th>
                  <input type='hidden' value='{$row['Id_Sucursal']}' name='usuario'>
                
                  <td>
                    {$row['Nombre_Sucursal']} 
                  </td>
              
                  <td>
                    {$row['Direccion_Sucursal']} 
                  </td>
                
                  <td>
                    {$row['Telefono_Sucursal']}
                  </td>
                  
                  <td>
                    <button type='submit' name='botonborrar' id='botonborrar' class='btn btn-outline-primary'>Borrar</button>
                    <p class='btn btn-outline-primary' onclick='go()' >Ingresar</p>
                  </td>

                </form>
                </tr>";
              }           
            ?>
          </tbody>
        </table>
      </div>
    </div>
>>>>>>> 1e1bc41a26917f6255dd4b11eec439d3d271cc1c

  </div>

  <script src="../JS/Admin/Admin.js"></script>
  <script type="text/javascript" src="../JS/jquery.min.js"></script>
  <script type="text/javascript" src="../JS/main2.js"></script>
</body>
</html>