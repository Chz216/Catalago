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

  function navbar(){
    $sql = $this->pdo->prepare("SELECT * FROM menu_navbar");
      if ($sql->execute(array(1))) {
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function navbar_nav($id_navbar){
    $sql = $this->pdo->prepare("SELECT * FROM sub_nav AS nav
                                INNER JOIN categories AS cat
                                ON nav.Id_category = cat.Id_category
                                INNER JOIN menu_navbar AS nvb
                                ON nav.Parent_navbar = nvb.Id_navbar
                                WHERE nav.Parent_navbar = $id_navbar");
      if ($sql->execute(array(1))) {
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function products($id){
    $sql = $this->pdo->prepare("SELECT pd.Id_producto, pd.Nom_producto, pd.Acabado, pd.Precio, pd.Imagen
                                FROM productos AS pd
                                INNER JOIN sub_nav AS nav
                                ON pd.Id_nav = nav.Id_nav
                                INNER JOIN categories AS cat
                                ON nav.Id_category = cat.Id_category
                                WHERE nav.Parent_navbar = $id");
      if ($sql->execute(array(1))) {
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

}
