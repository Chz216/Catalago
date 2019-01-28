<?php
include_once 'funciones/logica.php';
$funcion = new funciones();
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
    <?php echo $funcion->menu(); ?>
  </header>

  <section class="details">
    <div class="container-fluid">
      <?php echo $funcion->Detalles() ?>
    </div>
  </section>
<?php echo $funcion->footer(); ?>
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
