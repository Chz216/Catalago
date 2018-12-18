<?php
include_once 'php/functions.php';
$function = new funciones();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>El Reventon</title>
  <!-- FrameWorks -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <!-- Styles personalize-->
  <link rel="stylesheet" href="css/00.css">
</head>
<body>
  <header>
    <?php echo $function->menu(); ?>
  </header>

  <div class="wrapper-carousel">
    <div id="carousel-reven" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4500">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-block" src="img/slider0.jpg" alt="First slide">
          <div class="carousel-caption">
            <h2 class="animated fadeInUp">Zapaterias El Reventón</h2>
            <h6 class="animated fadeInRight">Te ofrece calidad en zapatos</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-block" src="img/slider3.jpeg" alt="Second slide">
          <div class="carousel-caption">
            <h2 class="animated fadeInLeft">Zapaterias El Reventón</h2>
            <h6 class="animated fadeInRight">Te ofrece calidad en zapatos</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-block" src="img/slider4.jpeg" alt="Third slide">
          <div class="carousel-caption">
            <h2 class="animated fadeInLeft">Zapaterias El Reventón</h2>
            <h6 class="animated fadeInDown">Te ofrece calidad en zapatos</h6>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-reven" role="button" data-slide="prev">
        <div class="circle-left">
          <span class="fas fa-angle-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </div>
      </a>
      <a class="carousel-control-next" href="#carousel-reven" role="button" data-slide="next">
        <div class="circle-right">
          <span class="fas fa-angle-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </div>
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
      <div class="row">
        <div class="col-md-4 col-sm a">
          <div class="content-banner">
            <div class="img-banner"><img src="img/new.jpg" alt=""></div>
          </div>
        </div>
        <div class="col-md-4 col-sm b">
          <div class="content-banner">
            <div class="img-banner"><img src="img/offers.jpg" alt=""></div>
          </div>
        </div>
        <div class="col-md-4 col-sm c">
          <div class="content-banner">
            <div class="img-banner"><img src="img/season.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript And Poppers-->
  <script src="js/bootstrap.min.js"></script>
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
  });
  </script>
</body>

</html>
