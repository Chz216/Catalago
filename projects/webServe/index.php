<?php
include_once 'php/Controller.php';
$controller = new Controller();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>El Reventón</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="css/style-main.css">
</head>
<body>
  <header>
    <div class="wrapper-navbar">
      <div class="wrapper-form">
        <div class="search-form">
          <form action="productos.php" method="POST" id="form">
            <input class="search-txt" type="search" id="search" name="product" placeholder="Buscar productos, marcas y más" autocomplete="off">
          </form>
          <div class="close"><i class="fas fa-times"></i></div>
        </div>
      </div>
      <div class="logo"><img src="img/logo-tipo.png" alt="" class="img-logo"></div>
      <nav id="navbar-content" class="navbar-default">
        <ul class="navbar-nv">
          <li class="nv-item">
            <a class="nv-link" href="index.php">Inicio</a>
          </li>
          <?php echo $controller->Navbar();?>
          <li class="nv-item">
            <a class="nv-link" href="conocenos.php">Conocenos</a>
          </li>
          <li class="nv-item">
            <a class="nv-link search"></a>
          </li>
        </ul>
      </nav>
      <div class="menu-toggle"><i class="fas fa-bars"></i></div>
    </div>
  </header>

  <section class="carousel">
    <div class="wrapper-carousel">
      <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4500">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/slider.jpg" alt="First slide">
            <div class="carousel-caption">
              <h3 class="animated fadeInUp">Zapaterias El Reventón</h3>
              <h5 class="animated fadeInRight">Donde Más Baratos Son...</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/slider4.jpg" alt="Second slide">
            <div class="carousel-caption">
              <h3 class="animated fadeInLeft">Los Mejores Calzados</h3>
              <h5 class="animated fadeInRight">Al Mejor Precio</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/slider3.jpg" alt="Third slide">
            <div class="carousel-caption">
              <h3 class="animated fadeInLeft">La Mejor Calidad De Calzado</h3>
              <h5 class="animated fadeInDown">Zapaterias El Reventón</h5>
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
  </section>

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
              <h3 class="media-heading">Objetivos</h3>
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

  <?php echo $controller->Footer();?>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</html>
