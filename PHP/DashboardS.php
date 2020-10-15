<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Project CSS -->
    <link rel="stylesheet" href="../CSS/DashboardS.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Dashboard SS</title>

</head>
<body>
    
    <!-- Navbar Centro Control -->
    <div class="navbar-SS">


        <a href="../index.html">
            HackSiigo
        </a>


        <ol>
            <li>
                <p>
                    Generar factura
                </p>
            </li>
            <li>
                <p onclick="notify()">
                    Notificaciones
                </p>
            </li>
            <li>
                <a href="" class="close">
                    Cerrar Sesion
                </a>
            </li>
        </ol>

    </div>


    <!-- Formulario Factura -->
    <h3>Factura</h3>

    <!-- Formulario Notificación -->
    <div class="notify" id="notify">
        <form action="" method="POST">
            <div class="form-group">
                <label for="disabledTextInput">Proveedor</label>
                <input type="text" class="form-control" placeholder="Nombre proveedor">
            </div>
            <div class="form-group">
                <label for="disabledSelect">Producto</label>
                <input type="text"  class="form-control" placeholder="Nombre producto">
            </div>
            <button type="submit" class="btn btn-primary">
                Enviar notificación
            </button>
        </form>
    </div>


    <!-- Tabla para visualizar la cola de factura -->
    <div class="cola-fac">

        <table class="table table-borderless table-dark">
            <thead>
                <tr>
                    <th colspan="2">
                        Pendientes
                    </th>
                </tr>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                </tr>
            </tbody>
        </table>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="../JS/SS/Main.js"></script>

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