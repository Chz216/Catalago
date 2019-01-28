<?php

include_once 'php/conexion.php';

class funciones {

  private $bd;

  function __construct(){
    $this->bd = new database();
  }

  public function buscador() {
    echo'
    <div class="header-top">
    <div class="search">
      <div class="search-form">
        <form action="products.php" method="post" id="form">
          <input type="text" name="search" placeholder="Buscar productos" id="search" autocomplete="off">
        </form>
        <div class="close"><i class="fas fa-times"></i></div>
      </div>
    </div>
  </div>';
  }

  public function menu() {
    echo'<div class="logo"><img src="img/logo-tipo.png" alt=""></div>
    <nav class="navbar-default">
      <div class="navbar-content">
        <ul class="navbar-nv">
          <li class="nv-item"><a href="index.php" class="nv-link">Inicio</a></li>
          <li class="nv-item">
            <a href="#" class="nv-link">Dama</a><div class="dropdown-mega">
                <div class="category">
                  <h3>Linea Dama</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <h5>Balerina</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Bota</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Botin</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-4">
                    <h5>Tenis</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Sandalia</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Zapatilla</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </li>
          <li class="nv-item">
            <a href="#" class="nv-link">Caballero</a>
            <div class="dropdown-mega">
                <div class="category">
                  <h3>Linea Caballero</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <h5>Zapato</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Bota</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Botin</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-4">
                    <h5>Tenis</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Sandalia</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </li>
          <li class="nv-item">
            <a href="#" class="nv-link">Juvenil</a>
            <div class="dropdown-mega">
                <div class="category">
                  <h3>Linea Juvenil</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <h5>Zapato</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Balerina</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Bota</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-4">
                    <h5>Tenis</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Sandalia</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Zapatilla</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </li>
          <li class="nv-item">
            <a href="#" class="nv-link">Niños</a>
             <div class="dropdown-mega">
                <div class="category">
                  <h3>Linea Niños</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <h5>Balerina</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Bota</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Botin</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-4">
                    <h5>Tenis</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Sandalia</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Zapatilla</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </li>
          <li class="nv-item">
            <a href="#" class="nv-link">NIñas</a>
            <div class="dropdown-mega">
                <div class="category">
                  <h3>Linea Niñas</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <h5>Balerina</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Bota</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Botin</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-4">
                    <h5>Tenis</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Sandalia</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Zapatilla</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </li>
          <li class="nv-item">
            <a href="#" class="nv-link">Infantil</a>
            <div class="dropdown-mega">
                <div class="category">
                  <h3>Linea Infantil</h3>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <h5>Balerina</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Bota</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Botin</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-4">
                    <h5>Tenis</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Sandalia</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Zapatilla</h5>
                    <ul class="concept">
                    <li><a href="#">Balerina Casual</a></li>
                    <li><a href="#">Balerina Escolar</a></li>
                    <li><a href="#">Balerina de Piso</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </li>
          <li class="nv-item"><a href="#" class="nv-link">Conocenos</a></li>
        </ul>
      </div>
      <div class="button-search"><i class="fas fa-search"></i></div>
    </nav>';
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
