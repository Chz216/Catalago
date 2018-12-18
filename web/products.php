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
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <!-- Styles personalize-->
  <link rel="stylesheet" href="css/navs.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/products1.css">
</head>
<body>

  <?php echo $function->menu(); ?>   

  <section class="content-shoes">
    <div class="container-breadcrumb">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
  </div>
  <div class="container-fluid">
    <div class="row content-box">
      <div class="col-md-2 col-filters">
        <div class="title">
          <strong><span>Filtros</span></strong>
        </div>
        <div class="conten-filters">
          <dl>
            <dt class="list-odd">Precio</dt>
            <dd>
              <p><span id="amount"></span></p>

              <div class="price-range" id="slider-range"></div>
              <input class="slider-range" type="hidden" id="amount1">
              <input class="slider-range" type="hidden" id="amount2">
            </dd>
            <dt class="list-odd">Talla</dt>
            <dd>
              <ol class="list-tallas">
                <li><a href="#">22</a></li>
                <li><a href="#">23</a></li>
                <li><a href="#">24</a></li>
                <li><a href="#">25</a></li>
                <li><a href="#">26</a></li>
              </ol>
            </dd>
            <dt class="list-odd">color</dt>
            <dd>
              <ol>
                <li>azul</li>
                <li>blanco</li>
                <li>crema</li>
                <li>rojo</li>
              </ol>
            </dd>
            <dt class="list-odd">Acabado</dt>
            <dd>
              <ol>
                <li>p</li>
                <li>d</li>
                <li>f</li>
                <li>g</li>
                <li>t</li>
              </ol>
            </dd>
            <dt class="list-odd">Marca</dt>
            <dd>
              <ol>
                <li>a</li>
                <li>s</li>
                <li>d</li>
                <li>f</li>
              </ol>
            </dd>
          </dl>
        </div>
      </div>
      <div class="col-md-10 col-products">
        <div class="container-fluid">
         <?php echo $function->Mostrar(); ?>
       </div>
     </div>
   </div>
 </div>
</section>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript And Poppers-->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.button-search').click(function() {
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
<script type="text/javascript">  
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 100,
      max: 500,
      values: [ 50, 300 ],
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
