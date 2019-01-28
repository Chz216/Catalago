<?php

class Conexion {

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

  function ShowNavbar(){
    $sql = $this->pdo->prepare("SELECT * FROM menu_navbar");
    if ($sql->execute(array(1))) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function ShowNav($id_navbar){
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

    function ShowProduct(){
      $sql = $this->pdo->prepare("SELECT pd.Id_producto, pd.Nom_producto, pd.Acabado, pd.Precio, pd.Imagen
        FROM productos AS pd
        INNER JOIN sub_nav AS nav
        ON pd.Id_nav = nav.Id_nav
        INNER JOIN categories AS cat
        ON nav.Id_category = cat.Id_category");
        if ($sql->execute(array(1))) {
          return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        $this->CerrarConexion();
      }

      function showAll($linea){
        $sql = $this->pdo->prepare("SELECT p.Id_producto, p.Nom_producto, p.Precio, p.Imagen FROM productos AS p
          INNER JOIN sub_nav AS sub
          ON p.Id_nav = sub.Id_nav
          INNER JOIN menu_navbar AS nav
          ON sub.Parent_navbar = nav.Id_navbar
          WHERE nav.Nom_navbar LIKE '%".$linea."%'");
          if ($sql->execute(array(1))) {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
          }
          $this->CerrarConexion();
        }

        function showAllCatLin($linea, $categoria){
          $sql = $this->pdo->prepare("SELECT p.Id_producto, p.Nom_producto, p.Precio, p.Imagen FROM productos AS p
            INNER JOIN sub_nav AS sub
            ON p.Id_nav = sub.Id_nav
            INNER JOIN categories AS cat
            ON sub.Id_category = cat.Id_category
            INNER JOIN menu_navbar AS nav
            ON sub.Parent_navbar = nav.Id_navbar
            WHERE nav.Nom_navbar LIKE '%".$linea."%' AND cat.Nom_category LIKE'%".$categoria."%'");
            if ($sql->execute(array(1))) {
              return $sql->fetchAll(PDO::FETCH_ASSOC);
            }
            $this->CerrarConexion();
          }

          function showBdId(){
            $sql = $this->pdo->prepare("SELECT p.Id_producto, p.Nom_producto, p.Precio, p.Imagen FROM productos AS p
              WHERE p.Id_producto=".$_GET['modelo']);
              if ($sql->execute(array(1))) {
                return $sql->fetchAll(PDO::FETCH_ASSOC);
              }
              $this->CerrarConexion();
            }

            function ShowPrice($min_price, $max_price){
              $sql = $this->pdo->prepare("SELECT p.Id_producto, p.Nom_producto, p.Precio, p.Imagen FROM productos AS p
                                          WHERE p.Precio BETWEEN '$min_price' AND '$max_price' ORDER BY p.Precio ASC");
                if ($sql->execute(array(1))) {
                  return $sql->fetchAll(PDO::FETCH_ASSOC);
                }
                $this->CerrarConexion();
              }


              function ShowProducts(){
                $sql = $this->pdo->prepare("SELECT p.Id_producto, p.Nom_producto, p.Precio, p.Imagen FROM productos AS p");
                if ($sql->execute(array(1))) {
                  return $sql->fetchAll(PDO::FETCH_ASSOC);
                }
                $this->CerrarConexion();
              }

            }
