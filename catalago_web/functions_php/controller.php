<?php

include_once 'database.php';

if (isset($_POST['navbar'])) {
  $navbar_query = "SELECT * FROM menu_navbar";
  $run_query = mysqli_query($conn,$navbar_query);
  echo "
  <ul class='navbar-nv'>
  <li class='nv-item'>
  <a class='nv-link' href='index.php'>inicio</a>
  </li>
  ";
  if (mysqli_num_rows($run_query) > 0) {
    while ($row = mysqli_fetch_array($run_query)) {
      $cid = $row["Id_navbar"];
      $navbar = $row ["Nom_navbar"];
      $href = $row ["href"];
      echo
      "
      <li class='nv-item i-down                                                                                           '>
      <a class='nv-link' cid='$cid' href='$href'>$navbar</a>
      ";
      $nav_query = "SELECT * FROM sub_nav AS nav
      INNER JOIN categories AS cat
      ON nav.Id_category = cat.Id_category
      INNER JOIN menu_navbar AS nvb
      ON nav.Parent_navbar = nvb.Id_navbar
      WHERE nav.Parent_navbar = $cid";
      $query = mysqli_query($conn,$nav_query);
      if ($nav_query) {
        echo "<ul class='sub-nav'>";
        while ($row2 = mysqli_fetch_array($query)) {
          $id_nav = $row2["Parent_children"];
          $nav = $row2["Nom_category"];
          echo "<li class='sub-item'><a class='sub-link' id='$id_nav' href='#'>$nav</a></li>";
        }
        echo "</ul>";
      }
      echo "</li>";

    }
    echo '
    <li class="nv-item">
    <a class="nv-link" href="conocenos.php">conocenos</a>
    </li>
    <li class="nv-item">
    <a class="nv-link search"></a>
    </li>
    </ul>';
  }
}

if (isset($_POST['footer'])) {
  echo '
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-4 col-sm">
  <div class="pr-xl-4">
  <a class="brand"><img src="img/logo-tipo.png" alt=""></a>
  <p>Somos una empresa competitiva dedicada a la venta de calzado de moda con los precios mas bajos, nos caracterizamos por Brindar la mejor atención y servicio a nuestros clientes.</p>
  <!-- Rights-->
  <p class="rights"><span>©</span><span class="copyright-year">2018</span><span> </span><span>Comercializadora El Reventón</span><span>. </span><span>Derecho Reservados.</span></p>
  </div>
  </div>
  <div class="col-md-4 col-sm">
  <h5>Contactanos</h5>
  <dl class="contact-list">
  <dt>Dirección:</dt>
  <dd>Col.Centro Calle 3era Agustin A.Cacho #331</dd>
  </dl>
  <dl class="contact-list">
  <dt>E-mail:</dt>
  <dd><a href="mailto:zapateriaselreventon@prodigy.net.mx">zapateriaselreventon@prodigy.net.mx</a></dd>
  </dl>
  <dl class="contact-list">
  <dt>Teléfono:</dt>
  <dd><a href="tel:2383837595">+52 (238) 3837595</a><span></dd>
  </dl>
  </div>
  <div class="col-md-4 col-sm">
  <h5>Enlaces</h5>
  <ul class="nav-list">
  <li><a href="index.php">Inicio</a></li>
  <li><a href="productos-dama.php?tipo_linea=dama">Dama</a></li>
  <li><a href="productos-caballero.php?tipo_linea=caballero">Caballero</a></li>
  <li><a href="productos-juvenil.php?tipo_linea=juvenil">Juvenil</a></li>
  <li><a href="productos-ninos.php?tipo_linea=niños">Niños</a></li>
  <li><a href="productos-ninas.php?tipo_linea=niñas">Niñas</a></li>
  </ul>
  </div>
  </div>
  </div>
  <div class="row no-gutters social-container">
  <div class="col"><a class="social-inner" href="https://www.facebook.com/zapateriaselreventon/"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
  <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
  <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
  <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
  </div>
  ';
}

?>
