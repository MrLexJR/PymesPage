<?php 
  include "class/datos.php";
  $datos=Consultas::datosemp();
  $row = $datos->fetch_assoc();
  
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

  <!-- Container de actualización de datos de la empresa -->
  <main role="main">
    <div class="container m-y5">
      <h2 class="text-center m-3"> Actualizar Información </h2>
      <form action="" name="formulario" id="formulario" method="POST" >
        <!-- Datos Generales  -->
        <h4 class="m-2">Datos</h4>
        <div class="form-row">
          <input style="display: none" name="id" id="id" type="text" class="form-control" value="<?php echo $row['id']; ?>" required>
          <div class="col-md-4 mb-3">
            <label for="nombre">Nombre de la Empresa</label>
            <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Empresa S.A."
              value="<?php echo $row['nombre']; ?>" required>
            <div class="invalid-feedback">Ingrese el nombre de la empresa</div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="siglas">Acronimo</label>
            <input name="siglas" id="siglas" type="text" class="form-control" placeholder="E. SA"
              value="<?php echo $row['siglas']; ?>" required>
            <div class="invalid-feedback">Ingrese el dato</div>
          </div>
          <div class="col-md-4 mb-3 ">
            <label for="logo">Logo</label>
            <div class="custom-file">
              <input src="" name="logo" id="logo" type="file" class="custom-file-input" accept="image/*" >
              <label class="custom-file-label" for="logo">Seleccionar Logo</label>
              <div class="invalid-feedback">Escoja un archivo </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="email">Email address</label>
            <input name="email" id="email" type="email" class="form-control" value="<?php echo $row['email']; ?>" 
              placeholder="name@example.com" required>
            <div class="invalid-feedback">Escriba un correo </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="celular">Celular <span class="text-muted">Ej: 593987654321</span></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">+</div>
              </div>
              <input name="celular" id="celular" class="form-control" type="tel" maxlength="12" placeholder="593987654321"
                value="<?php echo $row['celular']; ?>" pattern="(593)[0-9]{9}" required>
              <div class="invalid-feedback">Escriba el numero de celular</div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="telefono">Telefono <span class="text-muted">Ej: 2955788</span></label>
            <input name="telefono" id="telefono"  maxlength="7" type="tel" class="form-control"  placeholder="29557889"
              value="<?php echo $row['telefono']; ?>" pattern="[0-9]{7}">
          </div>
        </div>

        <!-- Ubicacion  -->
        <h4 class="m-2">Redes</h4>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="fb">Facebook</label>
            <input name="fb" id="fb" type="text" class="form-control" placeholder="facebook.com/Empresa"
              value="<?php echo $row['pagefb']; ?>">
          </div>
          <div class="col-md-4 mb-3">
            <label for="tw">Twitter</label>
            <input name="tw" id="tw" type="text" class="form-control"  placeholder="twitter.com/Empresa"
              value="<?php echo $row['pagetw']; ?>">
          </div>
          <div class="col-md-4 mb-3">
            <label for="ig">Instagram</label>
            <input name="ig" id="ig" type="text" class="form-control" placeholder="instagram.com/Empresa"
              value="<?php echo $row['pageig']; ?>">
          </div>
        </div>

        <!-- Ubicacion  -->
        <h4 class="m-2">Ubicacion</h4>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="direccion">Direccion</label>
            <input name="direccion" id="direccion" type="text" value="<?php echo $row['direccion']; ?>" class="form-control" id="inputAddress"
              placeholder="Calle1 y Calle2, Ciudad, Provincia" required >
          </div>
          <div class="col-md-6 mb-3">
            <label for="hora">Horario de Atencion</label>
            <input name="hora" id="hora" type="text" value="<?php echo $row['hatencion']; ?>" class="form-control"
              placeholder="L a S: 09:00 a 16:00" >
          </div>
        </div>
        <!-- informacion  -->
        <h4 class="m-2">Informacion</h4>
        <div class="form-group">
          <label for="nosot">Nosotros</label>
          <textarea name="nosot" id="nosot" class="form-control" required rows="3"
            maxlength="450"><?php echo $row['nosot']; ?></textarea>
        </div>
        <div class="form-group">
          <label for="mision">Mision</label>
          <textarea name="mision" id="mision" class="form-control" required rows="3"
            maxlength="450"><?php echo $row['mision']; ?></textarea>
        </div>
        <div class="form-group">
          <label for="vision">Vision</label>
          <textarea name="vision" id="vision" class="form-control" required rows="3"
            maxlength="450"><?php echo $row['vision']; ?></textarea>
        </div>
        <button name="submit" class="btn btn-primary" type="submit"><i class="fa fa-save"></i>   Actualizar</button>
      </form>
      <hr class="featurette-divider">

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
  <script src="public/js/actualiza.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
  <!-- https://getbootstrap.com/docs/4.0/examples/carousel/ 
       https://www.computeach.com.ec/catalogo/
       
      -->
</body>

</html>