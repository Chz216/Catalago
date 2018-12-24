<?php
include_once 'php/functions.php';
$function = new funciones();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>El Reventón</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/jquery.exzoom.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="css/style-reven.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/det000.css">
</head>
<body>
  <header>
    <?php echo $function->menu(); ?>
  </header>
  <div class="wrapper-details">
    <div class="wrapper-img">
      <div class="container-img-small">
        <div class="img-small"><img src="img/dolo.jpg" alt=""></div>
        <div class="img-small"><img src="img/dolo.jpg" alt=""></div>
      </div>
      <div class="container-img-big">
        <ul id="bzoom">
          <li>
            <img class="bzoom_thumb_image" src="img/dolo.jpg"/>
            <img class="bzoom_big_image" src="img/dolo.jpg"/>
          </li>
        </ul>
      </div>
      <div class="wrapper-description">

      </div>
    </div>
  </div>




  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/jqzoom.js"></script>
  <script type="text/javascript">
  $(function(){
    $("#bzoom").zoom({
    });
  });
  </script>
  <script src="js/form.js"></script>
  <script src="js/img.js"></script>
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
    });
    $('.filter-box').click(function() {
      $('.filters').toggleClass('toggle-box');
    });
  });
</script>
</body>
</html>
