<?php

include_once 'php/conexion.php';

class funciones {

  private $bd;

  function __construct(){
    $this->bd = new database();
  }

  public function menu() {
    echo'<div class="wrapper-navbar">
    <div class="wrapper-form">
    <div class="search-form">
    <form action="productos.php" method="POST" id="form">
    <input class="search-txt" type="search" id="search" name="product" placeholder="Buscar productos, marcas y más" autocomplete="off">
    </form>
    <div class="close"><i class="fas fa-times"></i></div>
    </div>
    </div>
    <div class="logo"><img src="img/logo-tipo.png" alt="" class="img-logo"></div>
    <nav class="navbar-default">
    <ul class="navbar-nv">
    <li class="nv-item"><a href="index.php" class="nv-link">Inicio</a></li>
    <li class="nv-item i-down">
    <a href="productos-dama.php?tipo_linea=dama" class="nv-link">Dama</a>
    <ul class="sub-nav">
    <li class="sub-item"><a href="categoria.php?tipo_linea=dama&categoria=zapatos" class="sub-link">Zapatos</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=dama&categoria=balerinas" class="sub-link">Balerinas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=dama&categoria=tenis" class="sub-link">Tenis</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=dama&categoria=botas" class="sub-link">Botas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=dama&categoria=zapatillas" class="sub-link">Zapatillas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=dama&categoria=sandalias" class="sub-link">Sandalias</a></li>
    </ul>
    </li>
    <li class="nv-item i-down">
    <a href="productos-caballero.php?tipo_linea=caballero" class="nv-link">Caballero</a>
    <ul class="sub-nav">
    <li class="sub-item"><a href="categoria.php?tipo_linea=caballero&categoria=zapatos" class="sub-link">Zapatos</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=caballero&categoria=tenis" class="sub-link">Tenis</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=caballero&categoria=botas" class="sub-link">Botas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=caballero&categoria=sandalias" class="sub-link">Sandalias</a></li>
    </ul>
    </li>
    <li class="nv-item i-down">
    <a href="productos-juvenil.php?tipo_linea=juvenil" class="nv-link">Juvenil</a>
    <ul class="sub-nav">
    <li class="sub-item"><a href="categoria.php?tipo_linea=juvenil&categoria=zapatos" class="sub-link">Zapatos</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=juvenil&categoria=balerinas" class="sub-link">Balerinas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=juvenil&categoria=tenis" class="sub-link">Tenis</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=juvenil&categoria=botas" class="sub-link">Botas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=juvenil&categoria=zapatillas" class="sub-link">Zapatillas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=juvenil&categoria=sandalias" class="sub-link">Sandalias</a></li>
    </ul>
    </li>
    <li class="nv-item i-down">
    <a href="productos-ninos.php?tipo_linea=niños" class="nv-link">Niños</a>
    <ul class="sub-nav">
    <li class="sub-item"><a href="categoria.php?tipo_linea=niños&categoria=zapatos" class="sub-link">Zapatos</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=niños&categoria=tenis" class="sub-link">Tenis</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=niños&categoria=botas" class="sub-link">Botas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=niños&categoria=sandalias" class="sub-link">Sandalias</a></li>
    </ul>
    </li>
    <li class="nv-item i-down">
    <a href="productos-ninas.php?tipo_linea=niñas" class="nv-link">Niñas</a>
    <ul class="sub-nav">
    <li class="sub-item"><a href="categoria.php?tipo_linea=niñas&categoria=zapatos" class="sub-link">Zapatos</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=niñas&categoria=balerinas" class="sub-link">Balerinas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=niñas&categoria=tenis" class="sub-link">Tenis</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=niñas&categoria=botas" class="sub-link">Botas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=niñas&categoria=zapatillas" class="sub-link">Zapatillas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=niñas&categoria=sandalias" class="sub-link">Sandalias</a></li>
    </ul>
    </li>
    <li class="nv-item i-down">
    <a href="productos-infantil.php?tipo_linea=infantil" class="nv-link">Infantil</a>
    <ul class="sub-nav">
    <li class="sub-item"><a href="categoria.php?tipo_linea=infantil&categoria=zapatos" class="sub-link">Zapatos</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=infantil&categoria=balerinas" class="sub-link">Balerinas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=infantil&categoria=tenis" class="sub-link">Tenis</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=infantil&categoria=Botas" class="sub-link">Botas</a></li>
    <li class="sub-item"><a href="categoria.php?tipo_linea=infantil&categoria=Sandalias" class="sub-link">Sandalias</a></li>
    </ul>
    </li>
    <li class="nv-item">
    <a href="conocenos.php" class="nv-link">Conocenos</a>
    </li>
    <li class="nv-item">
    <a class="nv-link search"></a>
    </li>
    </ul>
    </nav>
    <div class="menu-toggle"><i class="fas fa-bars"></i></div>
    </div>';
  }

  public function showPro(){
    if(isset($_POST['product'])){
      $product = $_POST['product'];
      $conexion = $this->bd->showProduct($product);
      $products='';
      //recorre los datos
      foreach ($conexion as $show) {
        $products.='<li class="item-prod">
        <div class="img-prod">
        <img src="img/'.$show['Imagen'].'" alt="">
        </div>
        <div class="wrapper-prod">
        <div class="name-shoe">
        <span>'.$show['Nom_producto'].'</span>
        </div>
        <div class="price-shoe">
        <span>$'.$show['Precio'].'.00</span>
        </div>
        <div class="ide-shoe">
        <a id="active" href="detalles.php?modelo='.$show['Id_producto'].'">Ver Detalles</a>
        </div>
        </div>
        </li>';
      }
      return $products;
    }
  }

  public function showall(){
    if(isset($_GET['tipo_linea'])){
      $linea = $_GET['tipo_linea'];
      $conn = $this->bd->showAll($linea);
      $texto='';
      //recorre los datos
      foreach ($conn as $mostrar) {
        $texto.='
        <li class="item-prod">
        <div class="img-prod">
        <img src="img/'.$mostrar['Imagen'].'" alt="">
        </div>
        <div class="wrapper-prod">
        <div class="name-shoe">
        <span>'.$mostrar['Nom_producto'].'</span>
        </div>
        <div class="price-shoe">
        <span>$'.$mostrar['Precio'].'.00</span>
        </div>
        <div class="ide-shoe">
        <a id="active" href="detalles.php?modelo='.$mostrar['Id_producto'].'">Ver Detalles</a>
        </div>
        </div>
        </li>';
      }
      return $texto;
    }
  }

  public function showallCatLin(){
    if(isset($_GET['categoria'])){
      $tp_linea = $_GET['tipo_linea'];
      $categoria = $_GET['categoria'];
      $conn = $this->bd->showAllCatLin($tp_linea, $categoria);
      $texto='';
      //recorre los datos
      foreach ($conn as $mostrar) {
        $texto.='
        <li class="item-prod">
        <div class="img-prod">
        <img src="img/'.$mostrar['Imagen'].'" alt="">
        </div>
        <div class="wrapper-prod">
        <div class="name-shoe">
        <span>'.$mostrar['Nom_producto'].'</span>
        </div>
        <div class="price-shoe">
        <span>$'.$mostrar['Precio'].'.00</span>
        </div>
        <div class="ide-shoe">
        <a id="active" href="detalles.php?modelo='.$mostrar['Id_producto'].'">Ver Detalles</a>
        </div>
        </div>
        </li>';
      }
      return $texto;
    }
  }

  public function Detalles(){
    //realiza la consulta
    $con=$this->bd->showBdId();
    $texto='';
    //recorre los datos
    foreach ($con as $mostrar) {
      $texto.='
      <h1 class="title-det">'.$mostrar['Nom_producto'].'</h1>
      <div class="wrapper-img">
      <div class="content-img-sm">
      <div class="img-sm">
      <img src="img/'.$mostrar['Imagen'].'" alt="">
      </div>
      </div>
      <div class="content-img-lg">
      <div class="img-lg"><img id="zoom_01" src="img/'.$mostrar['Imagen'].'" data-zoom-image="img/'.$mostrar['Imagen'].'" /></div>
      </div>
      <div class="content-img-sm-resp">
      <div class="img-sm-resp"><img src="img/'.$mostrar['Imagen'].'" alt="" /></div>
      </div>
      </div>
      <div class="content-desc">
      <div class="wrapper-desc">
      <div class="block-des"><p>'.$mostrar['Nom_producto'].'</p></div>
      <div class="price"><p>$'.$mostrar['Precio'].'.00</p></div>
      <div class="descr">
      <strong>Descripción:</strong>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum nostrum delectus sed accusantium minima eius ducimus sit doloremque libero dolorum quis ullam at quae maiores ipsam dolore quas reprehenderit, animi!</p>
      </div>
      </div>
      </div>';
    }
    return $texto;
  }

  public function filter(){

    if(isset($_GET['categoria'])){
      $tp_linea = $_GET['tipo_linea'];
      $categoria = $_GET['categoria'];
      $acabado = $_GET['acabado'];
      $buscar = $this->bd->filters($tp_linea, $categoria, $acabado);
      $texto='';
      foreach ($buscar as $bus){
        $texto.='
        <li class="item-prod">
        <div class="img-prod">
        <img src="img/'.$bus['Imagen'].'" alt="">
        </div>
        <div class="wrapper-prod">
        <div class="name-shoe">
        <span>'.$bus['Nom_producto'].'</span>
        </div>
        <div class="price-shoe">
        <span>$'.$bus['Precio'].'.00</span>
        </div>
        <div class="ide-shoe">
        <a id="active" href="detalles.php?modelo='.$bus['Id_producto'].'">Ver Detalles</a>
        </div>
        </div>
        </li>';
      }
      return $texto;
    }
  }

}
