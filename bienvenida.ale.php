<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <nav class="navibar">
    <a class="navibar__home-link" href="index.php"><i class="fas fa-home fa-2x"></i></a>
    <ul class="navibar__list">
      <li class="navibar__list__item"><a class="navibar__list__item__link" href="index.php#home">Inicio</a></li>
      <li class="navibar__list__item"><a class="navibar__list__item__link" href="index.php#descripcion">El Juego</a></li>
      <li class="navibar__list__item"><a class="navibar__list__item__link" href="index.php#login">Login</a></li>
      <li class="navibar__list__item"><a class="navibar__list__item__link" href="index.php#register">Registro</a></li>
    </ul>
  </nav>
  <section>

    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Gracias por registrarte!</h4>
</div>

</section>
</body>
</html>
