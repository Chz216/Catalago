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
    <?php echo $fun->Detalles();?>
  </section>

  <script type="text/javascript" src="js/jQuery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/Modals.js"></script>
</body>
</html>
