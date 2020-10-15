<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Link CSS -->
  <link rel="stylesheet" href="../CSS/Admin/Main.css">
  <link rel="stylesheet" href="../CSS/Admin/Sucursal.css">
  

  <title>Dashboard Admin</title>

</head>
<body>


  <!-- navbar principal -->
  <div class="navbar-admin">
    <a href="">
      HackSiigo
    </a>
    <ol>
      <li>
        <p>
          Notificaciones
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-app-indicator" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          </svg>
        </p>
      </li>
    </ol>

    <a href="../index.html" class="close">
      Salir
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-closed" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
      </svg>
    </a>
    <a href="DashboardS.php" class="redireccion">Ver sucursales</a>
  </div>

  
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

      <!-- Input EmailSede/Sucursal -->
      <input class="controls" type="text" name="TelefonoSede" placeholder="Ingrese Telefono Sede/Sucursal">


      <input class="botons" type="submit" value="Ingresar">
    </form>
  </section>

  <script src="../JS/Admin/Admin.js"></script>
  <script type="text/javascript" src="../JS/jquery.min.js"></script>
  <script type="text/javascript" src="../JS/main2.js"></script>
</body>
</html>