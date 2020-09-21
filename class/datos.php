<?php
include "config/Conexion.php";

class Consultas{
	//implementamos nuestro constructor
  public function __construct(){
  }

  //listar registros
  public function datosemp(){
    $sql="SELECT * FROM tbl_empresa";
    return ejecutarConsulta($sql);
  }

  public function datosprod(){
    $sql="SELECT id_producto,p.nombre,stock,pvp,caracteristicas,imagen, c.id_categoria,c.nombre as categoria,m.nombre as marca 
    FROM tbl_producto as p, tbl_marca as m, tbl_categoria as c 
    WHERE p.id_categoria = c.id_categoria AND p.id_marca = m.id_marca;";
    return ejecutarConsulta($sql);
  }

  public function datosprod_cat($idc){
    $sql="SELECT id_producto,p.nombre,stock,pvp,caracteristicas,imagen, c.id_categoria,c.nombre as categoria,m.nombre as marca
    FROM tbl_producto as p INNER JOIN tbl_marca as m ON p.id_marca = m.id_marca
    INNER JOIN tbl_categoria as c ON p.id_categoria = c.id_categoria WHERE p.id_categoria ='$idc' ;";
    return ejecutarConsulta($sql);
  }


  public function datoscatg(){
    $sql="SELECT * FROM tbl_categoria ORDER BY id_categoria ASC;";
    return ejecutarConsulta($sql);
  }
}


?>