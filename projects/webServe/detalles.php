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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="css/style-main.css">
  <link rel="stylesheet" href="css/details-products.css">
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
      <nav class="navbar-default">
        <ul class="navbar-nv">
          <li class="nv-item">
            <a href="index.php" class="nv-link">Inicio</a></li>
          </li>
          <?php echo $controller->Navbar();?>
          <li class="nv-item">
            <a href="conocenos.php" class="nv-link">Conocenos</a>
          </li>
          <li class="nv-item">
            <a class="nv-link search"></a>
          </li>
        </ul>
      </nav>
      <div class="menu-toggle"><i class="fas fa-bars"></i></div>
    </div>
  </header>

  <section class="details">
    <div class="container-fluid">
      <?php echo $controller->Detalles() ?>
    </div>
  </section>
<?php echo $controller->Footer(); ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="js/jquery.elevatezoom.min.js"></script>
    <script src="js/form.js"></script>
    <script type="text/javascript">
    $("#zoom_01").elevateZoom({
      zoomWindowWidth : 450,
      zoomWindowHeight : 450,
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('.icon-search').click(function() {
        $('.search').slideToggle();
      })
      $('.close').click(function() {
        $('.search').slideToggle();
      });
      $('.menu-toggle').click(function() {
        $('.navbar-default').toggleClass('right');
      });
      $('.nv-item').click(function() {
        $(this).siblings().removeClass('toggle');
        $(this).toggleClass('toggle');
      });
      $('.filter-box').click(function() {
        $('.filters').toggleClass('toggle-box');
      });
    });
    </script>
  </body>
  </html>
