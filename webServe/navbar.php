<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="stylesheet" href="css/style-main.css">
</head>
<body>

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
    <nav id="navbar-content" class="navbar-default">
      
    </nav>
    <div class="menu-toggle"><i class="fas fa-bars"></i></div>
  </div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="js/filter.js" charset="utf-8"></script>
</html>
