<html>
  <head>
    <title>Credito</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php echo'';?> 
        <div class="block">
          <form action="accion.php" method="post" class="form">
         <h2>Añadir nueva tarjeta de crédito/débito</h2>
         <p>Nombre del Titular: <input type="text" name="nombre" required /></p>
        <p>Número de Tarjeta: <input id="cardnumber" type="text" maxlength="16" pattern="[0-9]*" inputmode="numeric" name="numtar" class="app-form-control" required /></p>
        <p>Expiración de Tarjeta: <input type="text" name="expiracion" required /></p>
        <p>Código de Seguridad: <input type="number" name="cvv" required /></p>
         <button>Enviar</button>
        </form>
        </div>
  
  </body>
</html>