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

  function showProduct($product){
    $sql = $this->pdo->prepare("SELECT P.Id_producto, p.Nom_producto, p.Precio, p.Imagen FROM productos AS p
      WHERE p.Nom_producto LIKE '%".$product."%'");
    if ($sql->execute(array(1))) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function showAll($linea){
    $sql = $this->pdo->prepare("SELECT P.Id_producto, p.Nom_producto, p.Precio, p.Imagen FROM productos AS p
      INNER JOIN tipo_linea AS tp
      on p.Id_linea = tp.Id_linea
      WHERE tp.Tipo_linea LIKE '%".$linea."%'");
    if ($sql->execute(array(1))) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function showAllCatLin($tp_linea, $categoria){
    $sql = $this->pdo->prepare("SELECT P.Id_producto, p.Nom_producto, p.Precio, p.Imagen FROM productos AS p
      INNER JOIN tipo_linea AS tp
      on p.Id_linea = tp.Id_linea
      INNER JOIN categorias AS c
      ON p.Id_categoria = c.Id_categoria
      WHERE tp.Tipo_linea LIKE '%".$tp_linea."%' AND c.Tipo_categoria LIKE'%".$categoria."%'");
    if ($sql->execute(array(1))) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function showBdId(){
    $sql = $this->pdo->prepare("SELECT P.Id_producto, p.Nom_producto, p.Precio, p.Imagen FROM productos AS p
      WHERE p.Id_producto=".$_GET['modelo']);
    if ($sql->execute(array(1))) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function registrarProducto($estilo, $acabado, $talla, $color, $stock, $nombre_img){
      //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO articulo(`Estilo`, `Acabado`, `Talla`, `Color`, `Stock`, `imagen`) VALUES ('{$_POST['estilo']}','{$_POST['acabado']}','{$_POST['talla']}','{$_POST['color']}','{$_POST['stock']}','$nombre_img')");
    $sql->execute(array($estilo, $acabado, $talla, $color, $stock, $nombre_img));
  }

}
