<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Project CSS -->
    <link rel="stylesheet" href="../CSS/Sedes/DashboardS.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Dashboard SS</title>

</head>
<body>
    
    <!-- Navbar Centro Control -->
    <div class="navbar-SS">

        <a href="">
            HackSiigo
        </a>

        <ol>
            <li>
                <p onclick="Stock()">
                    Inventario
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-layers" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.188 8L.264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l-1.063.567L14.438 10 8 13.433 1.562 10 4.25 8.567 3.187 8z"/>
                        <path fill-rule="evenodd" d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4zM1.563 6L8 9.433 14.438 6 8 2.567 1.562 6z"/>
                    </svg>
                </p>
            </li>
            <li>
                <p onclick="fact()">
                    Nueva factura
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z"/>
                    </svg>
                </p>
            </li>
            <li>
                <p onclick="notify()">
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


    <div class="aside-center">

        <!-- Formulario Factura -->
        <div class="contenedor" id="factura">
            <form action="" method="post">
                <h2>Factura</h2>
                <label id="fechat">
                    Fecha: <br>
                    <input type="date" id="fecha" placeholder=".." required>
                </label>

                <label id="factt">
                    Factura No: <br>
                    <input type="number" id="fact" placeholder=".." required>
                </label>

                <label id="stockt">
                    Stock: <br>
                    <input type="number" id="stock" placeholder="?" required>
                </label>
                

                <label id="operaciont">
                    Operación: <br>
                    <input id="operacion" placeholder=".." required>
                </label>

                <h3>Detalles de compra</h3>
                <label id="prodt">
                    Producto: <br>
                    <input type="text" id="prod" placeholder=".." required>
                </label>

                <label id="entret">
                    Fecha de entrega: <br>
                    <input type="date" id="entre" placeholder=".." required>
                </label>

                <button class="btn btn-primary" type="submit" id="boton">Cargar Factura</button>
                <button class="btn btn-primary" type="submit" id="boton">Confirmar Venta</button>
            </form>
        </div>

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

        <!-- Formulario Inventario -->
        <div class="inventario" id="inv">
            <form action="FormSS/AgregarInventario.php" method="POST">
                <h5>
                    Inventario
                </h5>
                <div class="form-group">
                    <label for="disabledTextInput">Sucursal</label>
                    <input type="text" name="Sucursal" class="form-control" placeholder="Sucursal">
                </div>
                <div class="form-group">
                    <label for="disabledSelect">Producto</label>
                    <input type="text" name="Producto" class="form-control" placeholder="Nombre producto">
                </div>
                <div class="form-group">
                    <label for="disabledSelect">Precio</label>
                    <input type="text" name="Precio" class="form-control" placeholder="Precio producto">
                </div>
                <div class="form-group">
                    <label for="disabledSelect">Cantidad</label>
                    <input type="text" name="Cantidad" class="form-control" placeholder="Cantidad producto">
                </div>
                <button type="submit" class="btn btn-primary w-100">
                    Enviar notificación
                </button>
            </form>
        </div>

        <!-- Tabla para mostrar las sucursales -->   
        <div class="tabla-sucursal w-75 position-absolute mt-3 ml-4" id="TInv">
            <table class="table table-dark" >
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'conex.php';
                    $stmt = $conn->prepare("SELECT * FROM inventaerio WHERE Id_Sucursal = 8");
                    // Especificamos el fetch mode antes de llamar a fetch()
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    // Ejecutamos
                    $stmt->execute();
                    // Mostramos los resultados
                    while ($row = $stmt->fetch()){
                        echo "<tr>
                        <form action='FormAdmin/Eliminar.php' method='POST'>
                        <th scope='row'>
                            {$row['Id_Inventario']} 
                        </th>
                        <input type='hidden' value='{$row['Id_Inventario']}' name='usuario'>
                        
                        <td>
                            {$row['Nombre_Producto']} 
                        </td>
                    
                        <td>
                            {$row['Valor_Producto']} 
                        </td>
                        
                        <td>
                            {$row['Cantidad_Producto']}
                        </td>
                        
                        <td>
                            <button type='submit' name='botonborrar' id='botonborrar' class='btn btn-outline-primary'>Borrar</button>
                        </td>

                        </form>
                        </tr>";
                    }           
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="aside-right">

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