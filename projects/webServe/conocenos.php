<?php
include_once 'php/Controller.php';
$controller = new Controller();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>El Reventón</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="css/style-main.css">
  <link rel="stylesheet" href="css/about-reven.css">
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

<div class="container-map">
  <div class="block-map"><h4>Conoce Todas Nuestras Sucursales</h4></div>
  <div id="map"></div>
</div>

<?php echo $controller->Footer(); ?>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/markerclusterer.js"></script>
  <script src="js/maps.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRa4ltVvE0m5WkyIj0y0EecJDwPkU2aOs&callback=initMap"></script>
  <script src="js/form.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('.menu-toggle').click(function() {
      $('.navbar-default').toggleClass('right');
    });
    $('.nv-item').click(function() {
      $(this).siblings().removeClass('toggle');
      $(this).toggleClass('toggle');
    });
  });
  </script>
</body>
</html>
