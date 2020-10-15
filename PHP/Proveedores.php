<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Link CSS -->
    <link rel="stylesheet" href="../CSS/Proveedores.css">
    <link rel="stylesheet" href="../CSS/Prov.css">


    <title>
        Proveedores
    </title>

</head>
<body>

    <!-- Navbar principal -->
    <div class="navbar">
    
        <h1>
            <a href="../index.html">
                HackSiigo
            </a>
        </h1>

        <ol>
            <li>
                <a href="#">
                    Soporte
                </a>
            </li>
            <li>
                <a onclick="Create()">
                    Registrarse
                </a>
            </li>
            <li>
                <p onclick="Login()">
                    Login
                </p>
            </li>
        </ol>
    </div>

    <!-- Formulario de Login -->
    <section class="form" id="login">
        
        <form action="PHP/loguearPDO.php" method="post" >

            <h4>Inicia sesion</h4>

            <!-- Input NombreEmpresa -->
            <input class="controls" type="text" name="NombreProveedor"  placeholder="Ingrese su Nombre">
    
            <!-- Input EmailEmpresa -->
            <input class="controls" type="email" name="EmailProveedor"  placeholder="Ingrese su Correo">
    
            <!-- Input PasswordEmpresa -->
            <input class="controls" type="password" name="PasswordProveedor"  placeholder="Ingrese su Contraseña">
    
            <input class="botons" type="submit" value="Registrar">

        </form>

    </section>

    <!-- Banner central -->
    <div class="aside-left" id="bann">
        <div class="notice">
            <div class="banner">
                <h3>
                    ¡Unete Ahora Mismo!
                </h3>
            </div>
            <div class="vertical">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Veritatis ex nesciunt iste voluptatum, consectetur quaerat 
                    quam sed vel quia accusamus impedit molestiae distinctio 
                    cupiditate natus esse autem ut reiciendis ab.
                </p>
            </div>
        </div>
        <div id="now"></div>
    </div>
    

    <!-- Formulario Registro Proveedores -->
    <section class="form-register" id="form">
        
        <form action="FormPro/insertarProveedor.php" method="post">

            <h4>Registrar Proveedor</h4>

            <!-- Input NombreSede/Sucursal -->
            <input class="controls" type="text" name="NombreProveedor" placeholder="Ingrese Nombre">
    
            <!-- Input EmailSede/Sucursal -->
            <input class="controls" type="text" name="EmailProveedor" placeholder="Ingrese Email">
    
            <!-- Input PasswordSede/Sucursal -->
            <input class="controls" type="text" name="PasswordProveedor" placeholder="Ingrese Password">

            <input class="botons" type="submit" value="Registrar">

        </form>

    </section>

    <!-- Scripts Del Projecto -->
    <script src="../JS/Proveedores/Main.js"></script>

</body>
</html>