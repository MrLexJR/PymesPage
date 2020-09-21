<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
  <div class="card h-100">
    <a href="#"><img class="card-img-top" style="width: 250px; height:250px;" src="public/images/productos/corei5.jpg" alt=""></a>
    <div class="card-body">
      <h4 class="card-title">
        <a href="#"><?php echo $rowp['nombre']; ?></a>
      </h4>
      <h5>$<?php echo $rowp['pvp']; ?></h5>
    </div>
  </div>
</div>

<?

while ($rowp = $prod->fetch_assoc()) {
  $tab_content .= '
  <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="'.$rowp['imagen'].'" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">'.$rowp['nombre'].' - '.$rowp['marca'].' </a>
        </h4>
        <h5>$'.$rowp['pvp'].'</h5>
        <p class="card-text">'.$rowp['caracteristicas'].'</p>
      </div>
    </div>
  </div>
  ';
}
$tab_content .= '<div style="clear:both"></div></div>';

  if($i == 0){
     $tab_menu .= '<li class="active"><a href="#'.$rowp["id_categoria"].'" data-toggle="tab">'.$rowp["categoria"].'</a></li>';
     $tab_content .= ' <div id="'.$rowp["id_categoria"].'" class="tab-pane fade in active">';
    }
    else{
     $tab_menu .= '<li><a href="#'.$rowp["id_categoria"].'" data-toggle="tab">'.$rowp["categoria"].'</a></li>';
     $tab_content .= '<div id="'.$rowp["id_categoria"].'" class="tab-pane fade">';
    }

    $tab_content .= '
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="'.$rowp['imagen'].'" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">'.$rowp['nombre'].' - '.$rowp['marca'].' </a>
          </h4>
          <h5>$'.$rowp['pvp'].'</h5>
          <p class="card-text">'.$rowp['caracteristicas'].'</p>
        </div>
      </div>
    </div>
    ';






  if($i == 0){
    $tab_menu .= '<li class="nav-item"><a class="nav-link active" href="#'.$rowc["id_categoria"].'" data-toggle="tab">'.$rowc["nombre"].'</a></li>';
    $tab_content .= '<div id="'.$rowc["id_categoria"].'" class="tab-pane fade show active row">';
   }
   else{
    $tab_menu .= '<li class="nav-item"><a class="nav-link " href="#'.$rowc["id_categoria"].'" data-toggle="tab">'.$rowc["nombre"].'</a></li>';
    $tab_content .= '<div id="'.$rowc["id_categoria"].'" class="tab-pane fade ">';
   }


    ?>


<ul class="nav nav-tabs">
    <?php echo $tab_menu; ?>
  </ul>
  <div class="tab-content">
    <!-- <br> -->
    <div class="row">
    <?php echo $tab_content;?>
    </div>
  </div>