<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../CSS/diseñado.css">

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


    <div class="table-SS">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>