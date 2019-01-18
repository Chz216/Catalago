<?php
include_once 'funciones/logica.php';
$funcion = new funciones();
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
  <link rel="stylesheet" href="css/style-main.css">
  <link rel="stylesheet" href="css/style-products.css">
</head>
<body>

  <header>
    <?php echo $funcion->menu() ?>
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
              <p><span id="amount"></span></p>
              <div class="price-range" id="slider-range"></div>
              <input class="slider-range" type="hidden" id="amount1">
              <input class="slider-range" type="hidden" id="amount2">
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
                <li class="item-a"><a class="acabado">Piel</a></li>
                <li class="item-a"><a class="acabado">Sintetico</a></li>
                <li class="item-a"><a class="acabado">Felpa</a></li>
                <li class="item-a"><a class="acabado">Durazno</a></li>
                <li class="item-a"><a class="acabado">Charol</a></li>
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
        <ul class="content-prod">
          <?php echo $funcion->showall() ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="clear"></div>
<?php echo $funcion->footer(); ?>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script src="js/form.js"></script>
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
