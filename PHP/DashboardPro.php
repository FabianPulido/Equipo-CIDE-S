<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Link CSS del Proyecto -->
  <link rel="stylesheet" href="../CSS/DashboardPro.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>
    Dashboard Proveedores 
  </title>
</head>
<body>

  <!-- Navbar principal -->
  <div class="navbar-prov">
    <div class="text-name">
      <a href="">
        <?php
          if (isset($_SESSION['Nombre'])) {
            echo $_SESSION['Nombre'];
          }
        ?>
      </a>
    </div>
    <div class="options-tools">
      <ol>
        <li>
          <p onclick="SeeWorkSpace()">
            Notificaciones
          </p>
        </li>
        <li>
          <p>
            Administrar Productos
          </p>
        </li>
        <li>
          <a href="Proveedores.php">
            Cerrar Sesión
          </a>
        </li>
      </ol>
    </div>
  </div>

  <!-- Main para la vista de notificaciones -->
  <div class="tablero-notify" id="tablero-notify">

    <div class="tabla-notify">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Id Sucursal</th>
            <th scope="col">Id Proveedor</th>
            <th scope="col">Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
          </tr>
        </thead>
        <tbody>
        <?php
            include 'conex.php';
            $stmt = $conn->prepare("SELECT * FROM notificaciones");
            // Especificamos el fetch mode antes de llamar a fetch()
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            // Ejecutamos
            $stmt->execute();
            // Mostramos los resultados
            while ($row = $stmt->fetch()){

              echo "<tr>
                <form action='' method='POST'>
                  <th scope='row'>
                    {$row['Id_Notificacion']} 
                  </th>
                  <input type='hidden' value='{$row['Id_Sucursal']}' name='usuario'>
                
                  <td>
                    {$row['Id_Sucursal']} 
                  </td>
              
                  <td>
                    {$row['Id_Proveedor']} 
                  </td>
                
                  <td>
                    {$row['Nombre_Producto']}
                  </td>

                  <td>
                    {$row['Cantidad_Producto']}
                  </td>

                  <td>
                    {$row['Precio_Producto']}
                  </td>
                  
                  <td>
                    <button type='submit' name='botonborrar' id='botonborrar' class='btn btn-outline-primary'>Borrar</button>
                    <button type='submit' name='botonborrar' id='botonborrar' class='btn btn-outline-success'>Comprar</button>
                    </td>

                </form>
              </tr>";
              }           
            ?>
        </tbody>
      </table>
    </div>


    <div class="form-notify">
      <!-- Formulario de registro -->
      <section class="form-register" id="form">      
        <form action="FormPro/CreateProdcut.php" method="post">
          <h4>Registrar Producto</h4>

<<<<<<< HEAD
<!-- Tabla para mostrar los productos -->   
  <!-- Tabla para mostrar las sucursales -->   
  <section class="principal2">

      <h1>BUSQUEDA DE PRODUCTOS</h1>

        <div class="formularioaj">
            <label for="caja_busqueda">Buscar</label>
                <input type="text" name="caja_busqueda" id="caja_busqueda" class="cajita"></input>

  
        </div>

        <div id="datos" class=""></div>


  </section>
      </tbody>
    </table>
  </div>

    <!-- Scripts del projecto -->
    <script type="text/javascript" src="../JS/jquery.min.js"></script>
  <script type="text/javascript" src="../JS/main3.js"></script>
    <script src="../../JS/Admin/Admin.js"></script>
=======
          <!-- Input NombreProducto -->
          <input class="controls" type="text" name="Nombreprod" placeholder="Ingrese Nombre Producto">
        
          <!-- Input Stock del producto -->
          <input class="controls" type="text" name="Stockprod" placeholder="Ingrese Stock Producto">
        
          <!-- Input Valor del producto -->
          <input class="controls" type="text" name="Valorprod" placeholder="Ingrese Valor Producto">
          
          <!-- Input Stock minimo del producto -->
          <input class="controls" type="text" name="Stockmin" placeholder="Ingrese Minimo de Stock Producto">
              
          <!-- Input proveedor del producto -->
          <input class="controls" type="text" name="Proveedor" placeholder="Ingrese proveedor">
                
          <input class="botons" type="submit" value="Validar">
        </form>
      </section>
    </div>

  </div>

  <!-- Scripts del proyecto -->
  <script src="../JS/Proveedores/Dashboard.js"></script>

  <!-- Scripts del projecto -->
  <script src="../../JS/Admin/Admin.js"></script>
>>>>>>> 1e1bc41a26917f6255dd4b11eec439d3d271cc1c
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
</body>
</html>