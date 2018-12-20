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
          <li class="nv-item i-down">
            <a href="productos-dama.php" class="nv-link">Dama</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item i-down">
            <a href="productos-caballero.php" class="nv-link">Caballero</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item i-down">
            <a href="productos-juvenil.php" class="nv-link">Juvenil</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item i-down">
            <a href="productos-ninos.php" class="nv-link">Niños</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item i-down">
            <a href="productos-ninas.php" class="nv-link">Niñas</a>
            <ul class="sub-nav">
              <li class="sub-item"><a href="#" class="sub-link">Zapatos</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Tenis</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Sandalias</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Botas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Zapatillas</a></li>
              <li class="sub-item"><a href="#" class="sub-link">Balerinas</a></li>
            </ul>
          </li>
          <li class="nv-item i-down">
            <a href="productos-infantil.php" class="nv-link">Infantil</a>
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

  public function footer() {
    echo'
    <div class="wrapper-foot">
    <div class="row">
      <div class="col-md-6 col-sm">
        <div class="about">
          <h4>Contactanos</h4>
          <div class="inf-foot">
            <ul class="list-foot">
              <li class="item-foot"><a class="link-foot"><i class="fas fa-map-marker-alt"></i> Dirección: ljlsjfkslkjflkfjlksjlkd</a></li>
              <li class="item-foot"><a class="link-foot"><i class="fas fa-mobile-alt"></i> Telefono: (044) 238-188-9004</a></li>
              <li class="item-foot"><a class="link-foot"><i class="far fa-envelope"></i> Email: elreventon@gmail.com</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm">
        <div class="media-socials">
          <h4>Redes Sociales</h4>
          <div class="icon"><a href="https://www.facebook.com/zapateriaselreventon/"><i class="fab fa-facebook-f"></i></a></div>
        </div>
      </div>
    </div>
  </div>';
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
