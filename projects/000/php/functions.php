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
          <form action="products.php" method="post" id="form">
            <input class="search-txt" type="text" name="" placeholder="Buscar productos, marcas y más ...." id="search" autocomplete="off">
          </form>
          <div class="close"><i class="fas fa-times"></i></div>
        </div>
      </div>
      <div class="logo"><img src="img/logo-tipo.png" alt="" class="img-logo"></div>
      <nav class="navbar-default">
        <ul class="navbar-nv">
          <li class="nv-item"><a href="index.php" class="nv-link">Inicio</a></li>
          <li class="nv-item">
            <a href="products.php" class="nv-link">Dama</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item">
            <a class="nv-link">Caballero</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item">
            <a class="nv-link">Juvenil</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item">
            <a class="nv-link">Niños</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item">
            <a class="nv-link">Niñas</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item">
            <a class="nv-link">Infantil</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item">
            <a class="nv-link">Conocenos</a>
          </li>
          <li class="nv-item">
            <a class="nv-link search"></a>
          </li>
        </ul>
      </nav>
      <div class="menu-toggle"><i class="fas fa-bars"></i></div>
    </div>';
  }

  public function Mostrar(){
    $con=$this->bd->showShoes();
    $texto='';
    foreach ($con as $serv) {
      $texto.='
        <li class="item-product">
        <div class="content-product">
          <div class="img-product"><img src="img/'.$serv['imagen'].'" alt=""></div>
          <div class="name-shoe">
             <span>'.$serv['Nom_producto'].'</span>
          </div>
          <div class="price-shoe">
             <span>$'.$serv['Precio'].'.00</span>
          </div>
         <div class="ide-shoe">
            <a id="active" href="details.php?modelo='.$serv['Id_producto'].'">Ver Detalles</a>
         </div>
         </div>
        </li>
      ';
    }
    return $texto;
  }

  public function Detalles(){
    //realiza la consulta
    $con=$this->bd->showDetails();
    $texto='';
    //recorre los datos
    foreach ($con as $mostrar) {
      $texto.='<div class="details">
      <h2>'.$mostrar['Estilo'].'</h2>
      <center>
      <img src="images/'.$mostrar['Imagen'].'" alt="">
      </center>
      <h2>'.$mostrar['Marca'].'</h2>
      </div>';
    }
    return $texto;
  }

  public function SearchPrice(){
      if(isset($_POST['precio'])) {
        $buscar = $this->bd->buscar();
        $texto='';
        foreach ($buscar as $bus){
          $texto.='
          <div class="contenedor">
          <div class="detail-product">
          <img src="images/'.$bus['Imagen'].'" alt="">
          <p>'.$bus['Precio'].'</p>
          </div>
          </div>';
        }
        return $texto;
      }
    }


}
