<?php

include_once 'php/conexion.php';

class funciones {

  private $bd;

  function __construct(){
    $this->bd = new conexion();
  }

  public function menu() {
    echo'
    <nav class="navbar navbar-expand-md" role="navigation">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calzadoDama.php">Damas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Caballeros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Jovenes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Niños</a>
          </li>
        </ul>
      </div>
    </nav>
    ';
  }

  public function footer(){
    echo '
    <div class="footer-top>
    <div class="container">
    <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
    <a href="#"><i class="fa fa-facebook fa-2x"></i>Facebook</a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
    <a href="#"><i class="fa fa-twitter fa-2x"></i>Twitter</a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
    <a href="#"><i class="fa fa-flickr fa-2x"></i>Flickr</a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
    <a href="#"><i class="fa fa-tumblr fa-2x"></i>Tumblr</a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
    <a href="#"><i class="fa fa-github fa-2x"></i>Github</a>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
    <a href="#"><i class="fa fa-google-plus fa-2x"></i>Google</a>
    </div>
    </div>
    </div>
    </div>';
  }

  public function Mostrar(){
    $con=$this->bd->showShoes();
    $texto='';
    foreach ($con as $serv) {
      $texto.='<div class="products">
      <center>
      <img src="images/'.$serv['Imagen'].'" alt="">
      <hr>
      <span>Estilo: '.$serv['Estilo'].'</span>
      <p>$'.$serv['Precio'].'.00</p>
        <a id="active" href="detalles.php?modelo='.$serv['Id_producto'].'">Ver </br>Detalles</a>
        <a id="market" href="#">Agregar a Carrito</a>
      </center>
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
      <center>
      <h2>Estilo: '.$mostrar['Estilo'].'</h2>
      </center>
      <div class="images-details">
      <img src="images/'.$mostrar['Imagen'].'" alt="">
      </div>
      <div class="text-details">
      <p>Marca del Calzado: '.$mostrar['Marca'].'</p><br>
      <p> Color: '.$mostrar['Color'].'</p><br>
      <p>Material del Calzado: '.$mostrar['Acabado'].'</p><br>
      <p>Talla: '.$mostrar['Corrida'].'</p><br>
      <p>Costo: $'.$mostrar['Precio'].'.00</p>
      </div>
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

    public function Images(){
      //realiza la consulta
      $con=$this->bd->showShoes();
      $texto='';
      //recorre los datos
      foreach ($con as $mostrar) {
        $texto.='
        <div class="item">
        <img src="images/'.$mostrar['Imagen'].'" class="photos" data="images/'.$mostrar['Imagen'].'">
        </div>';
      }
      return $texto;
    }

}
