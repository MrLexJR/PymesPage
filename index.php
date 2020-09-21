<?php 
  include "class/datos.php";
  $datos=Consultas::datosemp();
  $row = $datos->fetch_assoc();
  // https://www.webslesson.info/2017/03/create-dynamic-tabs-by-using-bootstrap-in-php.html
?>

<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="UTM">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <title>S R | WebPage</title>

  <!-- Css -->
  <link rel="stylesheet" href="public/css/main.css">
  <link rel="stylesheet" href="public/boostrap/css/bootstrap.min.css">
  <!-- Css CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="public/images/pic01.jpg" alt="empresa">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1><?php echo $row['nombre']; ?>.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-light" id="prev" href="#us" role="button">Nosotros</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="public/images/bg-slide.jpg" alt="verProductos">
          <div class="container">
            <div class="carousel-caption">
              <h1>Productos de la mejor Calidad</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="productos.php" role="button">Ver Productos</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="public/images/pic01.jpg" alt="Nosotros">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>Asistencia y Servicio Tecnico</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-secondary" id="prev" href="#contact" role="button">Contactenos</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" id="us">
      <!-- Three columns of text below the carousel -->
      <h2 class="featurette-heading" style="text-align: center;">Quienes Somos</h2>
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="<?php echo $row['logo']; ?>" alt="Generic placeholder image" width="140"
            height="140">
          <h2>Nosotros</h2>
          <p> <?php echo $row['nosot']; ?></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="public/images/mision.jpg" alt="Generic placeholder image" width="140"
            height="140">
          <h2>Mision</h2>
          <p> <?php echo $row['mision']; ?></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="public/images/vision.jpg" alt="Generic placeholder image" width="140"
            height="140">
          <h2>Vision</h2>
          <p> <?php echo $row['vision']; ?></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <hr class="featurette-divider" id="contact">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Contactenos o <br><span class="text-muted">Visitenos</span>
          </h2><br>
          <p class="lead">
          <ul class="address-block">
            <li>
              <i class="fa fa-map-marker"></i><?php echo $row['direccion']; ?>
            </li>
            <li>
              <i class="fa fa-envelope-o"></i>Email: <?php echo $row['email']; ?>
            </li>
            <li>
              <i class="fa fa-mobile"></i>Celular: +<?php echo $row['celular']; ?>
            </li>
            <li>
              <i class="fa fa-phone"></i>Convencional: <?php echo $row['telefono']; ?>
            </li>
            <li>
              <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $row['hatencion']; ?>
            </li>
          </ul>
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="public\images\img_local.jpg" alt="Nosotros">
        </div>
        <div class="container con-ic-soc">
          <ul class="social-icons">
            <li>
              <a target="_blank" href="<?php echo $row['pageig']; ?>"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
              <a target="_blank"
                href="https://api.whatsapp.com/send?phone=<?php echo $row['celular']; ?>&text=Hola.%20Me%20gustaría%20obtener%20información%20de%20Uds%20y%20sus%20productos"
                class="whatsapp"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
            </li>
            <li>
              <a target="_blank" href="<?php echo $row['pagetw']; ?>"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a target="_blank" href="<?php echo $row['pagefb']; ?>"><i class="fa fa-facebook"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

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
  <!-- Js -->
  <script src="public/js/jquery.min.js"></script>
  <script src="public/boostrap/js/bootstrap.min.js"></script>
  <script src="public/js/main.js"></script>
  <!-- https://getbootstrap.com/docs/4.0/examples/carousel/ 
       https://www.computeach.com.ec/catalogo/
        
      -->
</body>

</html>