<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://webempresa.com
 * @since      1.0.0
 *
 * @package    Prueba
 * @subpackage Prueba/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación y Acreditaciones</title>
  </head> 
  <body> 
    <h2>Documentación y Acreditaciones</h2>
    <form action="procesar_registro.php" method="POST">
      <label for="indicativo">Indicativo:</label>
      <input type="text" id="indicativo" name="indicativo" required><br><br> 
      
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" pattern="[A-Za-z]{2,}" title="(Debe tener al menos 2 letras)" required><br><br>
      
      <label for="Apellidos">Apellidos:</label>
      <input type="text" id="apellidos" name="apellidos" pattern="[A-Za-z]{2,}" title="(Debe tener al menos 2 letras)" required><br><br> 
      
      <label for="dni">DNI (opcional):</label>
      <input type="text" id="dni" name="dni"><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br> 
      
      <input type="submit" value="Continuar">
    </form> 
  </body> 
</html>
