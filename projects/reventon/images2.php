<?php
include_once 'php/funciones.php';
$fun = new funciones();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Images</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/images.css">
  </head>
  <body>

    <img class="ZoomImagen" src="images/101_NEGRO.JPG" data-zoom-image="photos/101_NEGRO.JPG">


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.elevatezoom.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(".ZoomImagen").elevateZoom();
    </script>
  </body>
</html>
