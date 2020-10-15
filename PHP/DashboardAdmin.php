<!doctype html>
<html lang="en">
<head>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Link CSS -->
  <link rel="stylesheet" href="../CSS/DashboardA.css">

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
          Nueva Sucursal
        </p>
      </li>
      <li>
        <p>
          Administrar Sucursal
        </p>
      </li>
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

      <input class="botons" type="submit" value="Registrar">
    </form>
  </section>

  <!-- Tabla para mostrar las sucursales -->
  <div class="show-SS">
    <table class="table table-dark">
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
            <th scope='row'>
            {$row['Id_Sucursal']} </th>
          
            <td>
            {$row['Nombre_sucursal']} </td>
          
            <td>
            {$row['Direccion_Sucursal']} </td>
          
            <td>
            {$row['Telefono_Sucursal']}</td>
            <td>
            <button type='submit' id='botoneditar'>Editar</button>
            <button type='submit' id='botonborrar'>Borrar</button>
            </td>
            </tr>";
          }        
        ?>
      </tbody>
    </table>
  </div>
    
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  -->

</body>
</html>