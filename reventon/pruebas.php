<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>El Reventón</title>
  <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/header02.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/logo.png">
    </div>
  </header>
  <nav class="navbar navbar-default">
    <ul class="navs">
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Damas</a>
        <div class="dropdown">
          <ul>
            <li>
              <a href="#">Zapatillas</a>
            </li>
            <li>
              <a href="#">Botas</a>
            </li>
            <li>
              <a href="#">Sandalias</a>
            </li>
          </ul>
        </div>
      </li>
      <li><a href="#">Caballeros</a>
        <div class="dropdown1">
          <ul>
            <li>
              <a href="#">Zapatos</a>
            </li>
            <li>
              <a href="#">Botas Industriales</a>
            </li>
            <li>
              <a href="#">Sandalias</a>
            </li>
          </ul>
        </div>
      </li>
      <li><a href="#">Señoritas</a>
        <div class="dropdown2">
          <ul>
            <li>
              <a href="#">Zapatillas</a>
            </li>
            <li>
              <a href="#">Botas</a>
            </li>
            <li>
              <a href="#">Sandalias</a>
            </li>
          </ul>
        </div>
      </li>
      <li><a href="#">Jovenes</a>
        <div class="dropdown3">
          <ul>
            <li>
              <a href="#">Zapatillas</a>
            </li>
            <li>
              <a href="#">Botas</a>
            </li>
            <li>
              <a href="#">Sandalias</a>
            </li>
          </ul>
        </div>
      </li>
      <li><a href="#">Niños</a>
        <div class="dropdown4">
          <ul>
            <li>
              <a href="#">Zapatillas</a>
            </li>
            <li>
              <a href="#">Botas</a>
            </li>
            <li>
              <a href="#">Sandalias</a>
            </li>
          </ul>
        </div>
      </li>
      <li><a href="#">Infantiles</a>
        <div class="dropdown5">
          <ul>
            <li>
              <a href="#">Zapatillas</a>
            </li>
            <li>
              <a href="#">Botas</a>
            </li>
            <li>
              <a href="#">Sandalias</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
    <div class="handle">Menu</div>
  </nav>

  <script type="text/javascript" src="js/jQuery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $('.handle').on('click', function () {
    $('nav ul').toggleClass('showing');
  });
  </script>
</body>
</html>
