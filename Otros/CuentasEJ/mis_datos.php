<?php
  session_start();

  // Comprobar Si inicio sesion el usuario, antes de entrar a esta pag.
  if(!isset($_SESSION["correo"])){
    echo '
      <script>
        alert("Debes iniciar sesión");
        window.location = "index.php";
      </script>
    ';
    session_destroy();
    die();
  }
?>

<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Mis datos</title>
  <link rel="stylesheet" href="../../machetes/STYLE.css">
  <link rel="stylesheet" href="../../machetes/Lib-Fram/Bootstrap/css/bootstrap.min.css">
</head>
<body>

<style>
  body{
    margin: 20px;
  }
</style>
  



  <form class="row g-3 needs-validation" novalidate>
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" value="" required>
      <div class="valid-feedback">
        Correcto.
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="validationCustom02" value="" required>
      <div class="valid-feedback">
        Correcto.
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationCustomUsername" class="form-label">Usuario</label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Por favor coloque su nombre de usuario.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">País</label>
      <input type="text" class="form-control" id="validationCustom03" required>
      <div class="invalid-feedback">
        Por favor coloque su País.
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom04" class="form-label">Ciudad</label>
      <input type="text" class="form-control" id="validationCustom04" required>
      <div class="invalid-feedback">
        Por favor coloque su Ciudad.
      </div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Aceptar términos y condiciones.
        </label>
        <div class="invalid-feedback">
          Debes aceptar antes de enviar.
        </div>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </form>

  <script>
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>






  <script src="../../Lib-Fram/Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>