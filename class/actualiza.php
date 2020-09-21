<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";


class Actualizar{
  //implementamos nuestro constructor
  public function __construct(){
  }

  public function actualizarE($id,$nombre,$direccion,$siglas,$mision,$vision,$nosot,
  $celular,$telefono,$logo,$email,$hatencion,$pagefb,$pagetw,$pageig){
    $sql="UPDATE tbl_empresa SET
    nombre='$nombre', direccion='$direccion', siglas='$siglas', mision='$mision', 
    vision='$vision',nosot='$nosot', celular='$celular',telefono = '$telefono', logo='$logo',
    email='$email', hatencion='$hatencion', pagefb='$pagefb',pagetw='$pagetw',pageig='$pageig'
    WHERE id = '$id'";
    return ejecutarConsulta($sql);
  }

}

?>