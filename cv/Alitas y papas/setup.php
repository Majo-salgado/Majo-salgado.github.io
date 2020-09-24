<!DOCTYPE html>
<html>
  <head>
    <title>Creando tabla</title>
  </head>
  <body>

    <h3>Creando...</h3>

<?php // Example 26-3: setup.php
  require_once 'functions.php';

  createTable('persona',
              'nombre VARCHAR(50),
              numero VARCHAR(10),
              direccion VARCHAR(100),
              INDEX(nombre(6))');

  createTable('pedido1', 
              'nombre VARCHAR(50),
              pedido VARCHAR(100),
              direccion VARCHAR(100),
              INDEX(pedido(6))');

  createTable('administrador',
              'usuario VARCHAR(16),
              contraseña VARCHAR(16),
              INDEX(usuario(6))');

?>

    <br>...hecho.
  </body>
</html>
