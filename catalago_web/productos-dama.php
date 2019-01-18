<?php
include_once 'functions_php/funciones.php';
$ctrl = new funciones();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>El Reventón</title>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="css/0216.css">
  <link rel="stylesheet" href="css/style-products.css">
</head>
<body>

  <header class="header-content">
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
          <li class="nv-item"><a href="index.php" class="nv-link">Inicio</a></li>
            <?php $ctrl->Navbar(); ?>
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

  <div class="container-products">
    <div class="wrapper-col">
      <div class="filter-box"><strong><span>Filtros</span></strong></div>
      <div class="col-left filters">
        <div class="block-title">
          <strong><span>Filtros</span></strong>
        </div>
        <div class="block-filters">
          <dl>
            <dt class="list-odd">Precio</dt>
            <dd class="price">
              <p>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;" name="price">
              </p>
              <div id="slider-range"></div>
            </dd>
            <dt class="list-odd">Talla</dt>
            <dd class="wrapper-odd">
              <ol class="list-tallas">
                <li class="item-t"><a href="#" class="talla">22</a></li>
                <li class="item-t"><a href="#" class="talla">23</a></li>
                <li class="item-t"><a href="#" class="talla">24</a></li>
                <li class="item-t"><a href="#" class="talla">25</a></li>
                <li class="item-t"><a href="#" class="talla">26</a></li>
              </ol>
            </dd>
            <dt class="list-odd">Color</dt>
            <dd class="wrapper-odd">
              <ol class="list-colors">
                <li class="item-c"><a href="#" class="color" href="#"></a></li>
                <li class="item-c"><a href="#" class="color" href="#"></a></li>
                <li class="item-c"><a href="#" class="color" href="#"></a></li>
                <li class="item-c"><a href="#" class="color" href="#"></a></li>
                <li class="item-c"><a href="#" class="color" href="#"></a></li>
              </ol>
            </dd>
            <dt class="list-odd">Acabado</dt>
            <dd class="wrapper-odd">
              <ol class="list-acabado">
                <li class="item-a"><a href="productos-dama.php?tipo_linea=dama&categoria=botas&acabado=piel" class="acabado">Piel</a></li>
                <li class="item-a"><a href="productos-dama.php?tipo_linea=dama&categoria=botas&acabado=sintetico" class="acabado">Sintetico</a></li>
                <li class="item-a"><a href="productos-dama.php?tipo_linea=dama&categoria=botas&acabado=felpa" class="acabado">Felpa</a></li>
                <li class="item-a"><a href="productos-dama.php?tipo_linea=dama&categoria=botas&acabado=durazno" class="acabado">Durazno</a></li>
                <li class="item-a"><a href="productos-dama.php?tipo_linea=dama&categoria=botas&acabado=charol" class="acabado">Charol</a></li>
              </ol>
            </dd>
            <dt class="list-odd">Marca</dt>
            <dd class="wrapper-odd">
              <ol class="list-marcas">
                <li class="item-m"><a class="marca">Sheras</a></li>
                <li class="item-m"><a class="marca">Michelle</a></li>
                <li class="item-m"><a class="marca">Ternura</a></li>
                <li class="item-m"><a class="marca">Fani Alma</a></li>
              </ol>
            </dd>
          </dl>
        </div>
      </div>
      <div class="col-right products">
        <ul id="products" class="content-prod">

        </ul>
      </div>
    </div>
  </div>
  <div class="clear"></div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/form.js"></script>
  <script src="js/ajax.js" charset="utf-8"></script>
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
  <script type="text/javascript">
  $(function() {
    $("#slider-range").slider({
      range: true,
      min: 50,
      max: 350,
      values: [ 50, 350],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ));

    var loader="<img src='img/loader.gif'/>";

    $('.ui-slider-handle').on('click',function(){
      $('.content-prod').html(loader);

      var min_price=$( "#slider-range" ).slider( "values", 0 );
      var max_price=$( "#slider-range" ).slider( "values", 1 );

      var qs="min_price="+min_price+"&max_price="+max_price;
      //alert(ctr_id);

      var ajax= $.ajax({
        type:'GET',
        data:qs,
        url:'funciones/logica.php',
        success:function(output){
          $('.content-prod').fadeOut('slow',function(){
            $('.content-prod').html(output).fadeIn('fast');
          });
        }
      });
    });
  });
</script>
</body>
</html>