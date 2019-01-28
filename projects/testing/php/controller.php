<?php

include_once 'conexion.php';

if (isset($_POST['navbar'])) {
  $navbar_query = "SELECT * FROM menu_navbar";
  $run_query = mysqli_query($conn,$navbar_query);
  echo "
  <ul class='navbar-nv'>
  <li class='nv-item'><a class='nv-link' href='index.php'>inicio</a></li>
  ";
  if (mysqli_num_rows($run_query) > 0) {
    while ($row = mysqli_fetch_array($run_query)) {
      $cid = $row["Id_navbar"];
      $navbar = $row ["Nom_navbar"];
      $href = $row ["href"];
      echo
      "
      <li class='nv-item'>
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
        echo "<ul class='sub-menu'>";
        while ($row2 = mysqli_fetch_array($query)) {
          $id_nav = $row2["Parent_children"];
          $nav = $row2["Nom_category"];
          echo "<li class='sub-item'><a class='sub-link' id='$id_nav' href='#'>$nav</a></li>";
        }
        echo "</ul>";
      }
      echo "</li>";

    }
    echo "
    <li class='nv-item'><a class='nv-link' href='conocenos.php'>conocenos</a></li>
    </ul>";
  }
}

if (isset($_POST['get_products'])) {
  $qwe = $_POST['products'];
  $sql = "SELECT * FROM productos WHERE Id_navbar = '$qwe'";
  $run_query = mysqli_query($conn,$sql);
  echo "<ul>";
  if (mysqli_num_rows($run_query) > 0) {
    while($row = mysqli_fetch_array($run_query)) {
      $name_p = $row["nom"];
      echo "
      <li><span>$name_p</span></li>
      ";
    }
    echo "</ul>";
  }
}


?>
