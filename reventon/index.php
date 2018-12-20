<?php
include_once 'php/funciones.php';
$fun = new funciones();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>El Reventón</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/chz01.css">
  <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/logo.png">
    </div>
  </header>
  <?php echo $fun->menu(); ?>
  <section class="carusel">
    <div class="container-fluid">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img  src="images/slider1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img  src="images/slider2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img  src="images/slider3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
  </section>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/a.js"></script>
</body>
</html>
