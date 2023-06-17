<html>
  <head>
    <title>PHP Test</title>
       <link rel="stylesheet" href="accion.css">
  </head>
  <body>
      <div class="block">
    DATOS CAPTURADOS <br>
      <hr class="new1">
    <p>Nombre:<?php echo htmlspecialchars($_POST['nombre']); ?>.<br></p>
      <hr class="new1">
    <p>Apellido Paterno:<?php echo htmlspecialchars($_POST['numtar']); ?>.<br></p>
      <hr class="new1">
    <p>Apellido Materno:<?php echo htmlspecialchars($_POST['expiracion']); ?>.<br></p>
      <hr class="new1">
    <p>Telefono:<?php echo htmlspecialchars($_POST['cvv']); ?>.<br></p>
      <hr class="new1">
      </div>
  </body>
</html>