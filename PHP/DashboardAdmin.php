<!doctype html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Link CSS -->
  <link rel="stylesheet" href="../CSS/Admin/Admin.css">

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
        <p onclick="Register()">
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

      <!-- Input PasswordSede/Sucursal -->
      <select name="" id="">
        <option value=""></option>
        <?
          require('/FormAdmin/Select.php');

          foreach ($stmt as $row) {
        
        ?>
        <option value="">
          <?php
            print $row['Id_Empresa'];
          ?>
        </option>
        <?
          }
        ?>
      </select>

      <input class="botons" type="submit" value="Registrar">
    </form>
  </section>

  <!-- Tabla para mostrar las sucursales -->
  <div class="show-SS" id="Sucursales">
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
            {$row['Nombre_Sucursal']} </td>
          
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
  <script src="../JS/Admin/Admin.js"></script>

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
    <div class="show-SS" style="height:450px;width:100%;overflow:scroll;">
       
      
    <table class="table table-dark" >
  <thead>
  <th scope="col"><input type="text"></th>
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
        <form action='Eliminar.php' method='POST'>
        <th scope='row'>
        {$row['Id_sucursal']} </th>
        <input type='hidden' value='{$row['Id_sucursal']}' name='usuario'>
        
        <td>
        {$row['Nombre_sucursal']} </td>
       
        <td>
        {$row['Direccion_sucursal']} </td>
        
        <td>
        {$row['Telefono_sucursal']}</td>
        <td>
        
        <button type='submit' name='botonborrar' id='botonborrar'>Borrar</button>
        </td>
        </form>
        </tr>";
        }
                    
                  
   ?>
  </tbody>
</table>
  
    </div>
    <div class="contenedor_imagen">
    <div class="imagensucur">
        <img src="../ASSETS/imagensucursales.jpg" width=100% height=100%;>
      </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 

</body>
</html>