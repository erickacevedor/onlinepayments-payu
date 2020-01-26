<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagos - Viajes Captuz</title>

  <!-- Bootstrap -->
  <?php include 'versionado.php'; ?>
  <link href="dist/libs/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="dist/css/style.css<?=$ver;?>">
  <link rel="stylesheet" href="dist/libs/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="dist/libs/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css">

</head>
<body>
  <header class="box">
    <div class="hgroup">
      <h1>Viajes Captuz S.A.S</h1>
      <p class="lead">
        Nuestro sitio web está en construcción <br> y muy pronto estará disponible aquí.
      </p>
      <a class="btn btn-default" href="tel:+573013399929">Llámenos</a>
      <a class="btn btn-default" href="mailto:director@viajescaptuz.com">Escríbanos</a>
    </div>
  </header>
  <div id="app" class="box">
    <div class="container">
      <div class="row">
        <div class="title hgroup">
          <h3>¿Deseas realizar un pago?</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div id="form-container" class="box">

            <div class="formPayu">
              <form id="form-home" method="post" action="payment.php">
                <!-- User related fields -->
                
                <input id="nombres" name="nombres" type="text" placeholder="Primer y Segundo Nombre" class="form-control input-md" required>
                <input id="apellidos" name="apellidos" type="text" placeholder="Primer y Segundo Apellido" class="form-control input-md" required>
                <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required>
                <input id="cedula" name="cedula" type="text" placeholder="Cédula o Tarjeta de Identidad" class="form-control input-md" required>
                <input id="telefono" name="telefono" type="text" placeholder="Teléfono" class="form-control input-md" required>
                <label for="valor">Valor que desea cancelar:</label>
                <input id="valor" name="valor" type="text" placeholder="$" class="form-control input-md" required>
                <input class="paymentPayUConfirm" id="typeSubmit" type="submit" name="submit" value="Continuar &rarr;">
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
<!-- hYfQr48xKjB5nxJi8unOmuCVBB --

  <!-- Assets -->
  <script src="dist/js/jquery-2.2.4.min.js"></script>
  <script src="dist/libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="dist/libs/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
  <script src="dist/js/app.js"></script>
</body>
</html>