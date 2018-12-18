<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>El Reventon</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/min.css">
  <!-- Styles personalize-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

</head>
<body>
  <header>
    <div class="wrapper-form">
      <div class="search-form">
        <form action="products.php" method="post" id="form">
          <input class="search-txt" type="text" name="" placeholder="Buscar productos, marcas y más ...." id="search" autocomplete="off">
        </form>
        <div class="close"><i class="fas fa-times"></i></div>
      </div>
    </div>
    <div class="wrapper-navbar">
      <div class="logo"><img class="img-logo" src="img/logo-tipo.png" alt=""></div>
      <nav class="navbar-default">
          <ul class="navbar-nv">
            <li class="nv-item"><a class="nv-link">Inicio</a></li>
            <li class="nv-item">
              <a class="nv-link">Dama</a>
              <ul class="sub-nav">
                <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
              </ul>
            </li>
            <li class="nv-item"><a class="nv-link">Caballero</a></li>
            <li class="nv-item"><a class="nv-link">Juvenil</a></li>
            <li class="nv-item"><a class="nv-link">Niños</a></li>
            <li class="nv-item"><a class="nv-link">Niñas</a></li>
            <li class="nv-item"><a class="nv-link">Niñas</a></li>
            <li class="nv-item"><a class="nv-link">Conocenos</a></li>
            <li class="nv-item"><a class="nv-link search"></a></li>
          </ul>
      </nav>
    </div>
    <div class="menu-toggle"><i class="fas fa-bars"></i></div>
  </header>

  <div class="wrapper-carousel">
    <div id="carousel-reven" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2500">
      <ol class="carousel-indicators">
        <li data-target="#carousel-reven" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-reven" data-slide-to="1"></li>
        <li data-target="#carousel-reven" data-slide-to="2"></li>
      </ol>
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

  <section class="information">
    <div id="service">
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
    </div>
  </section>

  <footer>
    <div class="wrapper">
      <h3>Acerca de Nosotros</h3>
    </div>
  </footer>

</body>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript And Poppers-->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!--  My Scripts -->
<script src="js/form.js"></script>
<script type="text/javascript">
  $(window).on('scroll', function() {
    if ($(window).scrollTop()) {
        $('.navbar-default').addClass('navbar-scroll');
        $('.logo').addClass('navbar-scroll');
    }else{
      $('.navbar-default').removeClass('navbar-scroll');
      $('.logo').removeClass('navbar-scroll');
    }
  });
</script>
</body>
</html>
