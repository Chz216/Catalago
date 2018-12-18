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
	<title>El Reventón</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<!-- Bootstrap Core CSS -->
  	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/animate.css">
 	<link rel="stylesheet" href="css/000.css">
 	<link rel="stylesheet" href="css/details.css">

</head>
<body>
  <header>
    <?php echo $function->menu(); ?>
  </header>
	<section class="detalles">
		<div class="container-fluid">
			<div class="container-img" id="img-small">
				<div class="img-shoe">
					<img src="img/dolo.jpg" alt="">
				</div>
				<div class="img-shoe">
					<img src="img/BA7666_04_standard.jpg" alt="">
				</div>
				<div class="img-shoe">
					<img src="img/hs.jpg" alt="">
				</div>
				<div class="img-shoe">
					<img src="img/offers.jpg" alt="">
				</div>
			</div>
			<div class="img-full" id="img-full">
				<img src="img/BA7666_04_standard.jpg" alt="">
			</div>
			<div class="description">

			</div>
		</div>
	</section>
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript And Poppers-->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="js/img.js"></script>
</body>
</html>
