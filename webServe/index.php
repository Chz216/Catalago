<?php
include_once 'php/functions.php';
$function = new funciones();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>El Reventón</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="css/car0.css">
</head>
<body>

<header>
  <?php echo $function->menu() ?>
</header>
<div class="wrapper-carousel">
  <div id="carousel-slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slider0.jpg" alt="First slide">
      <div class="carousel-caption">
        <h3>Zapaterias El Reventón</h3>
        <h5>Donde Más Baratos Son...</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider4.jpg" alt="Second slide">
      <div class="carousel-caption">
        <h3>Los Mejores Calzados</h3>
        <h5>Al Mejor Precio</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider3.jpg" alt="Third slide">
      <div class="carousel-caption">
          <h3>La Mejor Calidad De Calzado</h3>
        <h5>Zapaterias El Reventón</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>

<section class="inf">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm">
        <div class="media">
          <div class="media-object">
            <i class="fa fa-cog"></i>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Misión</h3>
            <p>Ser una empresa competitiva dedicada a la venta de calzado que reúna los requisitos de calidad, moda y precio de nuestro segmento de mercado. Brindar la mejor atención y servicio a nuestros clientes.  Motivar el desarrollo personal, de las familias y del país.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm">
        <div class="media">
          <div class="media-object">
            <i class="fa fa-eye"></i>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Visión</h3>
            <p>Ser una cadena de zapaterías ampliamente reconocidas por nuestro buen servicio y calzado de la mejor calidad, enfocada a buscar siempre el bienestar de nuestro clientes y colaboradores, teniendo presente que el éxito organizacional se construye todos los días, y se enriquece con nuestro respeto, responsabilidad, compañerismo y buena comunicación.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm">
        <div class="media">
          <div class="media-object">
            <i class="fa fa-paper-plane"></i>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Objetivo</h3>
            <p>El objetivo del presente Manual es presentar la cultura organizacional de la empresa, precisando las funciones encomendadas al personal con el fin de evitar la repetición de instrucciones, para ahorrar tiempo y esfuerzos en la ejecución del trabajo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="banner">
  <div class="container-fluid">
    <h2>conoce más acerca de nosotros</h2>
    <div class="row">
      <div class="col-md-4 col-sm">
        <div class="wrapper-bnr">
          <a href="#"><img src="img/news.jpg" alt=""></a>
          <span>Conoce Nuestros Articulos Nuevos</span>
        </div>
      </div>
      <div class="col-md-4 col-sm">
        <div class="wrapper-bnr">
          <a href="#"><img src="img/season.jpg" alt=""></a>
          <span>Conozca Productos de Temporada</span>
        </div>
      </div>
      <div class="col-md-4 col-sm">
        <div class="wrapper-bnr">
          <a href="#"><img src="img/about.jpg" alt=""></a>
          <span>Conozca Nuestras Sucursales</span>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <?php echo $function->footer(); ?>
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="js/form.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.icon-search').click(function() {
    $('.search').slideToggle();
  })
  $('.close').click(function() {
    $('.search').slideToggle();
  });
  $('#form').submit(function() {
    var buscar = $('#search').val();
    if (buscar == '') {
      return false;
    }else {
      return true;
    }
  });
  $('.menu-toggle').click(function() {
    $('.navbar-default').toggleClass('right');
  });
  $('.nv-item').click(function() {
    $(this).siblings().removeClass('toggle');
    $(this).toggleClass('toggle');
  })
});
</script>
</body>
</html>
