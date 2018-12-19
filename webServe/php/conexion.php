<?php

class database {
  private $pdo;//variable para iniciar el pdo
  var $Host = "localhost";//nombre del host que se ocupara
  var $BdName = "catalago_reventon";//nombre de la base de datos
  var $User = "root";//nombre del usuario
  var $Password = "";//la contraseña para acceder a la base

  public function __construct() {
    try {
      //se conecta a la base
      $this->pdo = new PDO('mysql:host=' . $this->Host . ';dbname=' . $this->BdName, $this->User, $this->Password);//prepara la conexión
      $this->pdo->exec("set character set utf8");
    } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();//mensaje por si surge un error
    }
  }
//cierra la conexion
  function CerrarConexion() {
    $this->pdo = null;
  }

  function registrarProducto($estilo, $acabado, $talla, $color, $stock, $nombre_img){
    //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO articulo(`Estilo`, `Acabado`, `Talla`, `Color`, `Stock`, `imagen`) VALUES ('{$_POST['estilo']}','{$_POST['acabado']}','{$_POST['talla']}','{$_POST['color']}','{$_POST['stock']}','$nombre_img')");
    $sql->execute(array($estilo, $acabado, $talla, $color, $stock, $nombre_img));
  }

  function showProduct(){
    $sql = $this->pdo->prepare("CALL buscar_tipo_producto ('Balerina')");
    if ($sql->execute(array(1))) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

   function showShoes(){
    $sql = $this->pdo->prepare("SELECT a.Nom_producto, a.Precio, a.imagen FROM articulo AS a");
    if ($sql->execute(array(1))) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function buscar(){
    $buscar = $_POST['buscar'];
    $sql = $this->pdo->prepare("SELECT a.Nom_producto, a.Estilo, a.Acabado, a.Talla, a.Color, a.Stock FROM articulo AS a WHERE a.Nom_Producto LIKE '%".$buscar."%' ");
    if ($sql->execute(array(1))) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

} 