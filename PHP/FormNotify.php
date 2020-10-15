<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Link css -->
    <link rel="stylesheet" href="../CSS/DashboardPro.css">

    <title>
        Notificaciones
    </title>

</head>
<body>

    <div class="form-notify">
      <!-- Formulario de registro -->
      <section class="form-register" id="form">      
        <form action="CrearNotificacion.php" method="post">
          <h4>Postular Notificación</h4>

          <!-- Input NombreProducto -->
          <input class="controls" type="text" name="Sede" placeholder="Ingrese Id Sede">
        
          <!-- Input Stock del producto -->
          <input class="controls" type="text" name="Proveedor" placeholder="Ingrese Id Proveedor">
        
          <!-- Input Valor del producto -->
          <input class="controls" type="text" name="Producto" placeholder="Ingrese Producto">
          
          <!-- Input Stock minimo del producto -->
          <input class="controls" type="text" name="Cantidad" placeholder="Ingrese Cantidad">
              
          <!-- Input proveedor del producto -->
          <input class="controls" type="text" name="Mensaje" placeholder="Ingrese Mensaje">
                
          <input class="botons" type="submit" value="Validar">
        </form>
      </section>
    </div>
    
</body>
</html>