<?php

require_once("clases/DbMySql.php");
require_once("clases/pregunta.php");
require_once("clases/auth.php");

$auth = new Auth;

$dbMysql = new DbMySql;

//MIRÁ MIRÁ MIRÁ como no repetimos imágenes

$pregunta1 = $dbMysql->buscarPregunta();

$pregunta2 = $dbMysql->buscarPregunta();

while ($pregunta1->getId() == $pregunta2->getId()) {
  $pregunta2 = $dbMysql->buscarPregunta();
}

if ($auth->usuarioLogueado()) {
  $user = $auth->usuarioLogueado();
  $usuario = $dbMysql->buscarPorEmail($_SESSION["email"]);
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>Preguntas</title>
</head>

<body>
  <?php
  include 'partials/navbar.php';
  ?>
  <main class="content">
    <div class="area-juego">
      <div class="area-juego__display">
        <div class="area-juego__display__img" style="background-image: url('<?= $pregunta1->getImagen() ?>')">
          <span>A</span>
        </div>
        <div class="area-juego__display__img" style="background-image: url('<?= $pregunta2->getImagen() ?>')">
          <span>B</span>
        </div>
      </div>
      <div class="area-juego__opciones">
        <a class="area-juego__btn" href="">></a>
        <a class="area-juego__btn" href="">
          <</a> <a class="area-juego__btn" href="">=
        </a>
        <!--       <a class="area-juego__btn" href=""></a>
      <a class="area-juego__btn" href=""></a> -->
      </div>
    </div>
    <section class="counter">
      Aca deberiamos poner como pasa el tiempo
    </section>
  </main>
  <footer>
    Aca va el footer
  </footer>
  <script src="js/app.js"></script>
</body>

</html>