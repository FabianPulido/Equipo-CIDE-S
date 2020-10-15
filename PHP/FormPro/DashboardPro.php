<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Dashboard.css">
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
        
        <form action="CreateProdcut.php" method="post">

            <h4>Registrar Producto</h4>

            <!-- Input NombreProducto -->
            <input class="controls" type="text" name="Nombreprod" placeholder="Ingrese Nombre Producto">
    
            <!-- Input Stock del producto -->
            <input class="controls" type="text" name="Stockprod" placeholder="Ingrese Stock Producto">
    
            <!-- Input Valor del producto -->
            <input class="controls" type="text" name="Valorprod" placeholder="Ingrese Valor Producto">
            <!-- Input Stock minimo del producto -->
            <input class="controls" type="text" name="Stockmin" placeholder="Ingrese Minimo de Stock Producto">
            <!-- Input IVA del producto -->
            <input class="controls" type="text" name="ivaprod" placeholder="Ingrese IVA Producto">
            
            <input class="botons" type="submit" value="Registrar">


        </form>

    </section>

    <!-- Scripts del projecto -->
    <script src="../../JS/Admin/Admin.js"></script>
</body>
</html>