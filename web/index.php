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
  <link rel="stylesheet" href="css/navs.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <?php echo $function->menu(); ?>
  <div class="container-fluid" id="carousel-img">
    <div id="carousel-reven" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-reven" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-reven" data-slide-to="1"></li>
        <li data-target="#carousel-reven" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-responsive" src="img/slider0.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="animated fadeInUp">Zapaterias El Reventón</h2>
            <h5 class="animated fadeInRight">Te ofrece calidad en zapatos</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="img/slider.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="animated fadeInLeft">Zapaterias El Reventón</h2>
            <h5 class="animated fadeInRight">Te ofrece calidad en zapatos</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="img/slider3.jpg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="animated fadeInLeft">Zapaterias El Reventón</h2>
            <h5 class="animated fadeInDown">Te ofrece calidad en zapatos</h5>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-reven" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-reven" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <section class="news-main">
      <div id="info">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="media">
                <div class="media-object media-left wow fadeIn">
                  <i class="fa fa-cog"></i>
                </div>
                <div class="media-body wow fadeIn">
                  <h3 class="media-heading">Misión</h3>
                  <p>Ser una empresa competitiva dedicada a la venta de calzado que reúna los requisitos de calidad, moda y precio de nuestro segmento de mercado. Brindar la mejor atención y servicio a nuestros clientes.  Motivar el desarrollo personal, de las familias y del país.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="media">
                <div class="media-object media-left">
                  <i class="fa fa-eye"></i>
                </div>
                <div class="media-body wow fadeIn">
                  <h3 class="media-heading">Visión</h3>
                  <p>Ser una cadena de zapaterías ampliamente reconocidas por nuestro buen servicio y calzado de la mejor calidad, enfocada a buscar siempre el bienestar de nuestro clientes y colaboradores, teniendo presente que el éxito organizacional se construye todos los días, y se enriquece con nuestro respeto, responsabilidad, compañerismo y buena comunicación.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="media">
                <div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
                  <i class="fa fa-paper-plane"></i>
                </div>
                <div class="media-body wow fadeIn" data-wow-delay="0.3s">
                  <h3 class="media-heading">Objetivos</h3>
                  <p>El objetivo del presente Manual es presentar la cultura organizacional de la empresa, precisando las funciones encomendadas al personal con el fin de evitar la repetición de instrucciones, para ahorrar tiempo y esfuerzos en la ejecución del trabajo.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="products">
          <div class="container-fluid">
            <div class="row">
              <div id="new-products">
                <h2>Nuevos Productos</h2>
                <a href="#"><img class="img-banner" src="img/new.jpg" alt=""></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sed voluptatum repellat natus maxime, dolore corporis id nam ipsam esse veniam in tenetur pariatur assumenda vero quidem nesciunt harum, consequuntur!</p>
              </div>
              <div id="offers">
                <h2>Ofertas</h2>
                <a href="#"><img class="img-banner" src="img/offers.jpg" alt=""></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sed voluptatum repellat natus maxime, dolore corporis id nam ipsam esse veniam in tenetur pariatur assumenda vero quidem nesciunt harum, consequuntur!</p>
              </div>
              <div id="season-products">
                <h2>Prodcutos de Temporada</h2>
                <a href="#"><img class="img-banner" src="img/season.jpg" alt=""></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sed voluptatum repellat natus maxime, dolore corporis id nam ipsam esse veniam in tenetur pariatur assumenda vero quidem nesciunt harum, consequuntur!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer-content">
      <div class="footer-container">
        <div class="row">
          <div class="col-md-4">
            
          </div>
          <div class="col-md-4">
            
          </div>
          <div class="col-md-4">
            
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript And Poppers-->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
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
      });
    </script>
  </body>

  </html>
