<?php

include_once 'php/conexion.php';

class funciones {

  private $bd;

  function __construct(){
    $this->bd = new database();
  }


  public function menu() {
    echo'<header class="header-content">
     <div class="search">
      <div class="search-form">
        <form action="products.php" method="post" id="form">
          <input type="text" name="search" placeholder="Buscar productos" id="search" autocomplete="off">
        </form>
        <div class="close"><i class="fas fa-times"></i></div>
      </div>
    </div>
    <div class="wrapper-navbar">
      <div class="logo"><img src="img/logo-tipo.png" alt=""></div>
      <nav class="navbar-default">
        <div class="navbar-content">
          <ul class="navbar-nv">
            <li class="nv-item"><a href="#" class="nv-link">Inicio</a></li>
            <li class="nv-item">
              <a href="#" class="nv-link">Dama</a>
              <div class="dropdown-submenu">
                <ul class="sub-menu">
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
              </ul>
              </div>
            </li>
            <li class="nv-item">
              <a href="#" class="nv-link">Caballero</a>
              <div class="dropdown-submenu">
                <ul class="sub-menu">
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
              </ul>
              </div>
            </li>
            <li class="nv-item">
              <a href="#" class="nv-link">Juvenil</a>
              <div class="dropdown-submenu">
                <ul class="sub-menu">
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
              </ul>
              </div>
            </li>
            <li class="nv-item">
              <a href="#" class="nv-link">Niños</a>
              <div class="dropdown-submenu">
                <ul class="sub-menu">
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
              </ul>
              </div>
            </li>
            <li class="nv-item">
              <a href="#" class="nv-link">Niñas</a>
              <div class="dropdown-submenu">
                <ul class="sub-menu">
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
              </ul>
              </div>
            </li>
            <li class="nv-item">
              <a href="#" class="nv-link">Niñas</a>
              <div class="dropdown-submenu">
                <ul class="sub-menu">
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
                <li class="sub-item"><a href="#" class="sub-link">Submenu</a></li>
              </ul>
              </div>
            </li>
            <li class="nv-item">
              <a href="#" class="nv-link">Conocenos</a>
            </li>
            <div class="icon-search">
              <i class="fas fa-search"></i>
            </div>
          </ul>
        </div>
      </nav>
    </div>
  </header>';
  }

  public function Mostrar(){
    $con=$this->bd->showShoes();
    $texto='';
    foreach ($con as $serv) {
      $texto.='
    <div class="detail-shoes">
        <img src="img/'.$serv['imagen'].'" alt="">
         <div class="name-shoe">
            <span>'.$serv['Nom_producto'].'</span>
         </div>
        <div class="price-shoe">
           <span>$'.$serv['Precio'].'.00</span>
        </div>
       <div class="ide-shoe">
          <a id="active" href="detalles.php">Ver Detalles</a>
       </div>
    </div>';
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
