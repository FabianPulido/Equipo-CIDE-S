<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
    <!-- Link CSS -->
    <link rel="stylesheet" href="../CSS/Dashboarr.css">

    <title>Dashboard Admin</title>


  </head>
  <body>

    <!-- navbar principal -->
    <div class="navbar">

        <a href="">
            <button>
                Perfil
            </button>
        </a>

        <ol>
            <li>
                <a href="#">Registrar Sucursal</a>
            </li>
            <li>
                <a href="#">Administrar Sucursal</a>
            </li>
            <li>
                <a href="#">Notificaciones</a>
            </li>
        </ol>

    </div>



    
    <!-- Formulario de Login -->
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
    <div class="show-SS" style="height:450px;width:100%;overflow:scroll;">
       
      
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
    <section>
        <input type="text" name="" id="busqueda">
    </section>

    <section id="tabla_resultado"></section>

  </tbody>
</table>
  
    </div>
    <div class="contenedor_imagen">
    <div class="imagensucur">
        <img src="../ASSETS/imagensucursales.jpg" width=100% height=100%;>
      </div>
      </div>
    <script src="JS/peticion.js">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 

</body>
</html>