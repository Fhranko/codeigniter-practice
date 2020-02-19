<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row justify-content-sm-center">
    <div class="col-sm-6">
    <h1><?= isset($mensaje) ? $mensaje : '' ?></h1>
      <h1>Esta es la pagina de Login</h1>
      <?php foreach ($menu as $item):?>
        <li><a href="<?= $item['url'] ?>"><?= $item['title'] ?> </a></li>  
      <?php endforeach; ?>
      <form action="<?= base_url('login/validate')?>" method="POST" >
        <div class="form-group">
          <label for="correo">Correo Electrónico</label>
          <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo">
        </div>
        <div class="form-group">
          <label for="contrasena">Contraseña</label>
          <input type="text" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>