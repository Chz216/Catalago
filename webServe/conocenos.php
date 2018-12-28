<?php
include_once 'php/functions.php';
$funcion = new funciones();
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
    <?php echo $funcion->menu(); ?>
  </header>

<div class="container-map">
  <div class="block-map"><h4>Conoce Todas Nuestras Sucursales</h4></div>
  <div id="map"></div>
</div>

<?php echo $funcion->footer(); ?>
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
