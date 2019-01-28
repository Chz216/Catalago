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
  <link rel="stylesheet" href="css/ffffa.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Arbutus+Slab" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
</head>
<body>
  <section>
    <div class="contenedor">
      <?php echo $fun->SearchPrice(); ?>
    </div>
  </div>
</div>
</section>
</section>
<script type="text/javascript" src="js/jQuery.js"></script>
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
