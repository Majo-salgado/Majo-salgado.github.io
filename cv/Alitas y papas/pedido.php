<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class='center'>
            <a  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='inicio'
            data-transition='slide' href='index.php'>Inicio</a>
            <a  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='inicio'
            data-transition='slide' href='menu.php'>Menu</a>
            <a  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='plus'
            data-transition="slide" href='administrador.php'>Administrador</a>
            <a  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" class="btn btn-dark" data-inline='true' data-icon='check'
            data-transition="slide" href='pedido.php'>Realizar pedido</a>
            <br>
            <br>
            <img src="alitas y papas.jpg">
        </div>


        <form>
        <form class="form-horizontal" method="post" action="base de datos persona.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Numero</label>
      <input type="text" class="form-control" id="numero" name="numero">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="1234 Main St">
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</form>
<br>
<br>
<br>
<br>




<form class="form-horizontal" method="post" action="base de datos pedido.php"></form>

<form>
<div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" placeholder="Nombre del cliente">
    </div>
</div>
<div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Pedido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" id="pedido" name="pedido" placeholder="Pedido">
    </div>
</div>
<div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Direccion</label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-lg" id="direccion" name="direccion" placeholder="Direccion">
    </div>
</div>

  <button type="submit" class="btn btn-primary">Enviar pedido</button>
</form>
<script src="botstrap/jquery-3.4.1.slim.min.js"></script>
<script src="botstrap/popper.min.js"></script>
<script src="botstrap/bootstrap.min.js"></script>
</body>
</html>