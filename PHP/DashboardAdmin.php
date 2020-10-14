<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link CSS -->
    <link rel="stylesheet" href="../CSS/Dashboard.css">

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
        
        <form action="" method="post">

            <h4>Registrar Sede/Sucursal</h4>

            <!-- Input NombreSede/Sucursal -->
            <input class="controls" type="text" name="NombreSede" placeholder="Ingrese Nombre Sede/Sucursal">
    
            <!-- Input EmailSede/Sucursal -->
            <input class="controls" type="email" name="EmailSede" placeholder="Ingrese Correo Sede/Sucursal">
    
            <!-- Input PasswordSede/Sucursal -->
            <input class="controls" type="password" name="PasswordSede" placeholder="Ingrese Contraseña Sede/Sucursal">

            <input class="botons" type="submit" value="Registrar">

        </form>

    </section>

    <!-- Tabla para mostrar las sucursales -->
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

</body>
</html>