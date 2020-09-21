<?php 
  include "class/datos.php";
  $tab_menu = '';     // variable guarda las categorias
  $tab_content = '';  // variable que almacena los items

  $datos=Consultas::datosemp(); // variable toma los datos de la empresa
  $prod=Consultas::datosprod(); // variable toma todos los productos 
  $catg=Consultas::datoscatg(); // variable toma todas las categorias

  $row = $datos->fetch_assoc();

  $tab_menu .= '<a class="nav-link active" href="#todos" data-toggle="pill">Todos</a>';
  $tab_content .= '<div id="todos" class="tab-pane fade show active "> <div class="row">';
  while ($rowp = $prod->fetch_assoc()) {
    $tab_content .= '
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4 bs_pd" id="'.$rowp['nombre'].'">
      <div class="card card-hover h-100">
      <div class="help-ico"><a href="https://api.whatsapp.com/send?phone='.$row['celular'].'&text=Buenas.%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20'.strtoupper($rowp['nombre']).'%20de%20'.strtoupper($rowp['marca']).'" class="" target="_blank" data-toggle="tooltip" data-placement="top" title="Pedir Info."><i class="fa fa-info-circle"></i></a>  </div>
       <img class="card-img-top" src="'.$rowp['imagen'].'" alt=""><hr>
        <div class="card-body text-center">
          <h4 class="card-title"><a class="a_bs_pd" href="#">'.$rowp['nombre'].'</a> </h4>
          <h5 class="h_bs_mr">'.$rowp['marca'].'</h5>
          <h5>$'.$rowp['pvp'].'</h5>
        </div>
      </div>
    </div>
    ';
  }
  $tab_content .= '</div></div>';

  while ($rowc = $catg->fetch_assoc()) {
    $tab_menu .= '<a class="nav-link " href="#'.$rowc["id_categoria"].'" data-toggle="pill">'.$rowc["nombre"].'</a>';
    $tab_content .= '<div id="'.$rowc["id_categoria"].'" class="tab-pane fade "> <div class="row">';
  
    $rowpc_c = Consultas::datosprod_cat($rowc["id_categoria"]); // variable toma los productos segun la categoria
    while($rowpc = $rowpc_c->fetch_assoc()){
      $tab_content .= '
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4 bs_pd" id="'.$rowpc['nombre'].'">
        <div class="card card-hover h-100">
          <div class="help-ico"><a href="https://api.whatsapp.com/send?phone='.$row['celular'].'&text=Buenas.%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20'.strtoupper($rowpc['nombre']).'%20de%20'.strtoupper($rowpc['marca']).'" class="" target="_blank"  data-toggle="tooltip" data-placement="top" title="Pedir Info."><i class="fa fa-info-circle"></i></a>  </div>
          <img class="card-img-top" src="'.$rowpc['imagen'].'" alt="">
          <hr>
          <div class="card-body text-center">
            <h4 class="card-title"><a class="a_bs_pd" href="#">'.$rowpc['nombre'].'</a> </h4>
            <h5 class="h_bs_mr">'.$rowpc['marca'].'</h5>
            <h5>$'.$rowpc['pvp'].'</h5>
          </div>
        </div>
      </div>
      ';
    }
    $tab_content .= '</div></div>';
  }
?>

<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>S R | WebPage</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <!-- Css -->
  <link rel="stylesheet" href="public/css/main.css">
  <link rel="stylesheet" href="public/css/products.css">
  <link rel="stylesheet" href="public/boostrap/css/bootstrap.min.css">
  <!-- Css CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Js -->
  <script src="public/js/jquery.min.js"></script>
  <script src="public/boostrap/js/bootstrap.min.js"></script>
  <script src="public/boostrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/main.js"></script>

</head>

<body id="page">
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- header Nav Start -->
          <nav class="navbar navbar-default navbar-expand-md navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">
                <img style="width:50px; height:100%" src="<?php echo $row['logo']; ?>" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto ">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="productos.php">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Administracion</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header><!-- header close -->

  <main role="main">
    <div class="title title_size_small  position_left  has_fixed_background "
      style="background-size: 1648px; background-image: url(&quot;public/images/baner.jpg&quot;); height: 150px; background-position: center 13.65px;">
      <div class="image not_responsive">
        <img itemprop="image" src="public/images/baner.jpg" alt="&nbsp;">
      </div>
      <div class="container cont-text">
        <h1 class="con-span">Productos</h1>
      </div>
    </div>

    <div class="container my-5">
      <div class="row">
        <div class="col-md-3">
          <div class="nav flex-column nav-pills " role="tablist" aria-orientation="vertical">
            <span class="sp_cat">Buscar Productos</span>
            <input class="form-control" type="text" id="myInput" onkeyup="myFunction()"
              placeholder="Busque el producto">
            <span class="sp_cat">Categorias de Productos</span>
            <?php echo $tab_menu; ?>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content" id="pd">
            <?php echo $tab_content;?>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
    <a href="https://api.whatsapp.com/send?phone=<?php echo $row['celular']; ?>&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20productos."
      class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i></a>
    <hr class="featurette-divider">
  </main>


  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-manu">
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="productos.php">Productos</a></li>
              <li><a href="#">Administracion</a></li>
            </ul>
          </div>
          <p> <span> Copyright &copy; <a href="<?php echo $row['pagefb']; ?>"><?php echo $row['siglas']; ?></a>. </span>
            <span><a id="prev" href="#page">Regesar arriba <i class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
          </p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>