<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Dashboard.css">
    <link rel="stylesheet" href="../CSS/Admin/Main.css">
      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>
        DashboardP
    </title>
</head>
<body>
<!-- Navbar principal -->
    <div class="navbar">

            <a href="">
                <button>
                    Perfil
                </button>
            </a>

        <ol>
            <li>
                <p id="Rp" onclick="Register()">
                    Registrar Producto
                </p>
            </li>
            <li>
                <a href="#">Administrar Producto</a>
            </li>
            <li>
                <a href="#">Notificaciones</a>
            </li>
        </ol>

    </div>
    
    <!-- Formulario de registro de productos -->

        <!-- Formulario de registro -->
        <section class="form-register" id="form">
        
        <form action="FormPro/CreateProdcut.php" method="post">

            <h4>Registrar Producto</h4>

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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
</body>
</html>