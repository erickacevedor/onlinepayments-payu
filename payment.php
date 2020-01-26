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

  <?php 

  $payerFullName_name = $_POST["nombres"];
  $payerFullName_lname = $_POST["apellidos"];
  $payerFullName = $payerFullName_name." ".$payerFullName_lname;
  $precio = $_POST['valor'];

  $cedula = $_POST["cedula"];
  $email = $_POST["email"];
  $tel = $_POST["telefono"];

  $rad = rand();
  $referenceCode_code = substr($rad, -6);
  $referenceCode = $cedula."-".$referenceCode_code;


  $string = md5("B50YPWV2sqh0JUVDk5cpH2XpZ9~705731~$referenceCode~$precio~COP");

  ?>



  <header class="box">
    <div class="hgroup">
      <h1>Viajes Captuz</h1>
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
        <div class="col-xs-12">
          <div id="form-container" class="box">
            <div class="formPayu">
              <div class="table-data-container box">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nombres </th>
                      <th>Apellidos</th>
                      <th>Cédula</th>
                      <th>Email</th>
                      <th>Teléfono</th>
                      <th>Referencia de Pago</th>
                      <th>Total a Pagar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?=$payerFullName_name;?></td>
                      <td><?=$payerFullName_lname;?></td>
                      <td><?=$cedula;?></td>
                      <td><?=$email;?></td>
                      <td><?=$tel;?></td>
                      <td><?=$referenceCode;?></td>
                      <td>$<?=$precio;?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <script> function back(){ window.history.back(); }</script>

              <form id="form-payu" method="post" action="https://gateway.payulatam.com/ppp-web-gateway/">
                <input name="payerFullName" type="hidden" value="<?=$payerFullName;?>">
                <input name="payerDocument" type="hidden" value="<?=$cedula;?>">
                <input name="telephone"     type="hidden" value="<?=$tel;?>">
                <input name="merchantId"    type="hidden"  value="705731" >
                <input name="accountId"     type="hidden"  value="708842" >
                <input name="description"   type="hidden"  value="Pago de servicio online"  > 
                <input name="referenceCode" type="hidden"  value="<?=$referenceCode;?>" >
                <input name="amount"        type="hidden"  value="<?=$precio;?>">
                <input name="tax"           type="hidden"  value="0"  >
                <input name="taxReturnBase" type="hidden"  value="0" >
                <input name="currency"      type="hidden"  value="COP" > 
                <input name="signature"     type="hidden"  value="<?=$string;?>"  >
                <input name="test"          type="hidden"  value="0" >
                <input name="buyerEmail"    type="hidden"  value="<?=$email;?>">
                <input name="responseUrl"    type="hidden"  value="http://viajescaptuz.vpixel.co/gracias" >
                <input name="confirmationUrl"    type="hidden"  value="http://viajescaptuz.vpixel.co/gracias" >
                <a onclick="back()" href="#">&larr; Regresar</a>
                <input name="Submit" class="paymentPayUConfirm" type="submit"  value="Pagar ahora &rarr;" >
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- hYfQr48xKjB5nxJi8unOmuCVBB -->

  <?php include 'footer.php'; ?>

  <!-- Assets -->
  <script src="dist/js/jquery-2.2.4.min.js"></script>
  <script src="dist/libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="dist/libs/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
  <script src="dist/js/app.js"></script>
</body>
</html>