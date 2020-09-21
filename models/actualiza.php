<?php
require_once "../class/actualiza.php";

$act = new Actualizar();

$id=isset($_POST["id"])? limpiarCadena($_POST["id"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$siglas=isset($_POST["siglas"])? limpiarCadena($_POST["siglas"]):"";
$mision=isset($_POST["mision"])? limpiarCadena($_POST["mision"]):"";
$vision=isset($_POST["vision"])? limpiarCadena($_POST["vision"]):"";
$nosot=isset($_POST["nosot"])? limpiarCadena($_POST["nosot"]):"";
$celular=isset($_POST["celular"])? limpiarCadena($_POST["celular"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";
$hatencion=isset($_POST["hora"])? limpiarCadena($_POST["hora"]):"";
$pagefb=isset($_POST["fb"])? limpiarCadena($_POST["fb"]):"";
$pagetw=isset($_POST["tw"])? limpiarCadena($_POST["tw"]):"";
$pageig=isset($_POST["ig"])? limpiarCadena($_POST["ig"]):"";

if(file_exists($_FILES["logo"]["tmp_name"])){
  $ruta_carpeta = "../public/images/";
  $nombre_archivo = "imagen_".pathinfo($_FILES["logo"]["name"],PATHINFO_FILENAME).".". pathinfo($_FILES["logo"]["name"],PATHINFO_EXTENSION);
  $ruta_guardar_archivo = $ruta_carpeta . $nombre_archivo;
  move_uploaded_file($_FILES["logo"]["tmp_name"],$ruta_guardar_archivo);
  $logo="public/images/".$nombre_archivo;
}else{
  $logo="public/images/pic01.jpg";
}

switch ($_GET["op"]) {
	case 'editar':
    if ($id) {
      $rspta=$act->actualizarE($id,$nombre,$direccion,$siglas,$mision,$vision,$nosot,
      $celular,$telefono,$logo,$email,$hatencion,$pagefb,$pagetw,$pageig); 
      echo $rspta ? "Datos registrados correctamente" : "No se pudo registrar los datos";
    }else{    
      echo 'error';
    }
  break;
}
?>