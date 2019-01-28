<?php
include_once 'php/funciones.php';
$fun = new funciones();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>El Reventon</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/chz01.css">
  <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/logo.png">
    </div>
  </header>
  <?php echo $fun->menu(); ?>
  <section>
    <div class="container" id="search">
      <form action="catalago.php" name="buscador" method="post">
        <div class="input-group">
          <input class="form-control" name="palabra"  placeholder="Ingrese Una Palabra ....." required pattern="[A-Z a-z ñáéíóú]+">
          <span class="input-group-btn">
            <button type="submit" name="buscar" class="btn btn-default">Buscar</button>
          </span>
        </div>
      </form>
    </div>
  </section>
  <section>
    <div class="container-fluid" id="box-Dama">
      <div class="row">
        <div class="filters col-md-2">
          <span id="title"><h2>Filtros de Busqueda</h2></span>
          <div class="precios">
            <span id="subtitle"><h3>Precios</h3></span>
            <input type="range" min="0" max="500" step="1" value="0" id="min_price" name="valor">
            <br>
            <span id="price_range">0</span>

          </div>
          <div class="Colores">
            <span id="subtitle"><h3>Colores</h3></span>
          </div>
          <div class="Tallas">
            <span id="subtitle"><h3>Tallas</h3></span>
          </div>
          <div class="Acabados">
            <span id="subtitle"><h3>Acabados</h3></span>
          </div>
          <div class="Marcas">
            <span id="subtitle"><h3>Marcas</h3></span>
          </div>
        </div>
        <div class="col-md-9" id="calzado-Dama">
            <?php echo $fun->Mostrar(); ?>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/Modals.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#min_price').change(function() {
        var precio = $(this).val();
        $('#price_range').text("$" + precio);
        $.ajax({
          url:"buscador.php",
          method: "POST",
          data:{precio:precio},
          success:function(data) {
            $("#calzado-Dama").fadeIn(0).html(data);
          }
        })
      });
    });
  </script>
</body>
</html>
