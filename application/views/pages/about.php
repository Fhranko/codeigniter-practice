<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Esta es la pagina About</h1>
  <ul>
    <?php foreach ($colores as $color):?>
      <li> <?= $color?> </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>