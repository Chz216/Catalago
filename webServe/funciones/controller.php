<?php

include_once 'bd.php';

if (isset($_POST['navbar'])) {
  $navbar_query = "SELECT * FROM tipo_linea";
  $run_query = mysqli_query($conn,$navbar_query);
  echo "
  <ul class='navbar-nv'>
  <li class='nv-item'><a href='index.php' class='nv-link'>Inicio</a></li>
  ";
  if (mysqli_num_rows($run_query) > 0) {
    while ($row = mysqli_fetch_array($run_query)) {
      $cid = $row["Id_linea"];
      $navbar = $row ["Tipo_linea"];
      echo "
        <li class='nv-item i-down'>
        <a href='categoria.php' class='nv-link' cid='$cid'>$navbar</a>
        </li>
      ";
    }
    echo "
    <li class='nv-item'>
    <a href='conocenos.php' class='nv-link'>Conocenos</a>
    </li>
    <li class='nv-item'>
      <a class='nv-link search'></a>
    </li>
    </ul>";
  }
}

if (isset($_POST['get_selected_navbar'])) {
  $id_navbar = $_POST['navbar_id'];
  $sql = "SELECT * FROM productos WHERE Id_linea = '$id_navbar'";
  $run_query = mysqli_query($conn,$sql);
  echo "<ul class='content-prod'>";
  if (mysqli_num_rows($run_query) > 0) {
    while($row = mysqli_fetch_array($run_query)) {
      $cid = $row["Id_producto"];
      $name_p = $row["Nom_producto"];
      $image_p = $row["Imagen"];
      $precio_p = $row["Precio"];
      echo "<li class='item-prod'>
      <div class='img-prod'>
      <img src='img/$image_p' alt=''>
      </div>
      <div class='wrapper-prod'>
      <div class='name-shoe'>
      <span>$name_p</span>
      </div>
      <div class='price-shoe'>
      <span>$$precio_p.00</span>
      </div>
      <div class='ide-shoe'>
      <a id='active' href='detalles.php?modelo=$cid'>Ver Detalles</a>
      </div>
      </div>
      </li>";
    }
    echo "</ul>";
  }
}


if (isset($_POST['products'])) {
  $products_query = "SELECT * FROM productos";
  $run_query = mysqli_query($conn,$products_query);
  echo "<ul id='get_products' class='content-prod'>";
  if (mysqli_num_rows($run_query) > 0) {
    while($row = mysqli_fetch_array($run_query)) {
      $cid = $row["Id_producto"];
      $name_p = $row["Nom_producto"];
      $image_p = $row["Imagen"];
      $precio_p = $row["Precio"];
      echo "<li class='item-prod'>
      <div class='img-prod'>
      <img src='img/$image_p' alt=''>
      </div>
      <div class='wrapper-prod'>
      <div class='name-shoe'>
      <span>$name_p</span>
      </div>
      <div class='price-shoe'>
      <span>$$precio_p.00</span>
      </div>
      <div class='ide-shoe'>
      <a id='active' href='detalles.php?modelo=$cid'>Ver Detalles</a>
      </div>
      </div>
      </li>";
    }
    echo "</ul>";
  }
}

?>
