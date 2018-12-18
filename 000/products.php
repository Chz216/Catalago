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
  <title>El Reventon</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <!-- Styles personalize-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="css/000.css">
  <link rel="stylesheet" href="css/pdts.css">
</head>
<body>

  <header>
    <?php echo $function->menu(); ?>
  </header>

  <section class="products">
    <div class="container-fluid">
      <div class="container-filters">
        <div class="head">
          <strong>Filtros</strong>
        </div>
        <div class="content-filters">
          <dl>
            <dt class="list-odd">Precio</dt>
            <dd class="price">
              <p><span id="amount"></span></p>
              <div class="price-range" id="slider-range"></div>
              <input class="slider-range" type="hidden" id="amount1">
              <input class="slider-range" type="hidden" id="amount2">
            </dd>
            <dt class="list-odd">Talla</dt>
            <dd>
              <ol class="list-tallas">
                <li class="content"><a class="talla">22</a></li>
                <li class="content"><a class="talla">23</a></li>
                <li class="content"><a class="talla">24</a></li>
                <li class="content"><a class="talla">25</a></li>
                <li class="content"><a class="talla">26</a></li>
              </ol>
            </dd>
            <dt class="list-odd">Color</dt>
            <dd>
              <ol class="list-colors">
                <li class="content"><a class="color" href="#"></a></li>
                <li class="content"><a class="color" href="#"></a></li>
                <li class="content"><a class="color" href="#"></a></li>
                <li class="content"><a class="color" href="#"></a></li>
                <li class="content"><a class="color" href="#"></a></li>
              </ol>
            </dd>
            <dt class="list-odd">Acabado</dt>
            <dd>
              <ol class="list-acabado">
                <li class="content"><a class="acabado">Piel</a></li>
                <li class="content"><a class="acabado">Sintetico</a></li>
                <li class="content"><a class="acabado">Felpa</a></li>
                <li class="content"><a class="acabado">Durazno</a></li>
                <li class="content"><a class="acabado">Charol</a></li>
              </ol>
            </dd>
            <dt class="list-odd">Marca</dt>
            <dd>
              <ol class="list-marcas">
                <li class="content"><a class="marca">Sheras</a></li>
                <li class="content"><a class="marca">Michelle</a></li>
                <li class="content"><a class="marca">Ternura</a></li>
                <li class="content"><a class="marca">Fani Alma</a></li>
              </ol>
            </dd>
          </dl>
        </div>
      </div>
      <div class="container-products">
        <ul class="list-products">
          <?php echo $function->Mostrar() ?>
        </ul>
      </div>
    </div>
  </section>
  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript And Poppers-->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!--  My Scripts -->
  <script src="js/form.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('.menu-toggle').click(function() {
      $('.navbar-default').toggleClass('right');
    });
  });
  </script>
  <script type="text/javascript">
    $(function() {
      $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 350,
        values: [ 0, 350 ],
        slide: function( event, ui ) {
          $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
          $( "#amount1" ).val(ui.values[ 0 ]);
          $( "#amount2" ).val(ui.values[ 1 ]);
        }
      });
      $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
       " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    });
  </script>
</body>
</html>
