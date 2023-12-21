<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estudiantes CFTLA</title>

  <link rel="icon" type="text/css" href="https://estudiantes.cftla.cl/img/cft_lotaarauco_logo.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4e6911d35b.js" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="d-flex flex-column min-vh-100" style="font-family: 'Baloo Thambi 2'; background-color: #225588;">

  <div class="container-fluid ">

    <div class="row" style="background-color: #1F3D6E;">
      <div class="col-md-12 text-center">
        <div class="container" style="padding-top: 20px; padding-bottom: 15px;">
          <img src="https://estudiantes.cftla.cl/img/iso_blanco.png" alt="..." class="img-fluid" width="80px" style="padding-bottom: 20px;">
          <h5 style="letter-spacing: -0.5px; line-height : 100%; color: #F59F19;"><b> Plataforma Estudiantes </b><br> <small style="color: #ffffff;"> Centro de Formaci&oacute;n T&eacute;cnica Lota Arauco </small> </h5>
        </div>
      </div>
    </div>
  </div>

  <div class="container-lg">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" style="margin-top:20px;">
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="col py-2">
              <div class="container">
                <div class="container">
                  <form method="post" class="d-flex justify-content-center" action="">
                    <div class="form-row" style="padding: 0px;">
                      <div class="form-group mb-3" style="color: #225588;" style="letter-spacing: -0.7px;">
                        <h2> <b>Bienvenido(a)</b> </h2>
                        Ingrese sus datos para Acceder.
                        <hr>
                      </div>
                      <div class="form-group mb-2">
                        <div class="input-group mb-2">
                          <input type="text" class="form-control" name="usuario" value="" style="border-radius: 30px;" placeholder="Usuario" required pattern="[a-zA-Z\.]{3,60}">
                        </div>
                      </div>
                      <div class="form-group mb-2">
                        <div class="input-group mb-2">
                          <input class="form-control" type="password" name="clave" value="" style="border-radius: 30px;" placeholder="Contraseña" required>
                        </div>
                      </div>
                      <div class="form-group mb-2 text-center" style="letter-spacing: -0.7px; font-size: 14px;">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#recuperarclave"> ¿Problemas con tu Contrase&ntilde;a?</a>
                      </div>
                      <div class="form-group mb-3">
                        <div class="g-recaptcha" data-sitekey="6Lcmm_QUAAAAAEVkuyma4BjINp6g5FVoUhxxHO4I" required></div>
                      </div>
                      <div class="container d-grid gap-2 mb-3">
                        <button style="border-radius: 0px; border-width: 3px; border-color: #388CE0; border-radius: 30px;" class="btn btn-primary btn-block" id="ingresar" type="submit" value="" onclick="cargar();"> Ingresar <i class="fas fa-sign-out-alt"></i> </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="recuperarclave" tabindex="-1" data-bs-backdrop="static" aria-labelledby="recuperarclaveLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="recuperarclaveLabel">Restaurar Clave</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">

          <div class="form-group mb-3" style="letter-spacing: -0.7px;">
            <label>Ingrese su Rut <small> (Sin puntos ni gui&oacute;n)</small> </label>
            <input type="text" name="rut" class="form-control" id="rut" oninput="checkRut(this)" required>
          </div>
          <div class="form-group mb-3" style="letter-spacing: -0.7px;">
            <label>Ingrese su correo institucional</label>
            <input type="email" name="correo1" class="form-control" id="" required>
          </div>
          <div class="form-group mb-3" style="letter-spacing: -0.7px;">
            <label>Repita su correo institucional</label>
            <input type="email" name="correo2" class="form-control" id="" required>

          </div>
          <div class="d-flex justify-content-center container mb-3" style="letter-spacing: -0.7px;">
            <div class="g-recaptcha" data-sitekey="6LeFAekUAAAAAMt1KHvoxe-fbDgm0YQWeBxtzmww" required></div>
          </div>
          <div class="container mb-3" style="letter-spacing: -0.7px;">
          <div class="alert alert-info" role="alert">
            <b>¡Atenci&oacute;n!</b> <br>
            Se enviara un mensaje a su cuenta de correo institucional con las nuevas credenciales.
          </div>
          </div>

          <div class="d-grid gap-2">
            <button style="border-radius: 0px; border-width: 3px; border-radius: 20px; border-color: #388CE0;" class="btn btn-primary btn-block" name="restaurar" type="submit" value=""> Restaurar <i class="fas fa-sign-out-alt"></i> </button>
            <br>
          </div>
        </div>                 
        </div>
      </div>
    </div>
  </div>

  <footer class="mt-auto">
    <div class="row" style="margin: 0px;">
      <div class="col-md-12" style="padding-top: 40px; margin-top: 20px; padding-bottom: 40px; background-color: #1F3D6E;">
        <div class="container">
          <div class="row">
            <div class="col-md-2" style="padding: 10px;">
              <img src="https://estudiantes.cftla.cl/img/udecb.png" alt="..." class="img-fluid" width="200px">
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-2" style="font-size: 12px; padding: 10px;">
              <b style="color: #F59F19;"> Enlaces de Inter&eacute;s</b><br>
              <a target="_blank" href="https://www.mineduc.cl/" style="color: #fff;"> Mineduc </a><br>
              <a target="_blank" href="https://portal.beneficiosestudiantiles.cl/" style="color: #fff;"> Beneficios Estudiantiles </a>
            </div>
            <div class="col-md-2" style="font-size: 12px; padding: 10px;">
              <b style="color: #F59F19;"> Enlaces de Inter&eacute;s</b><br>
              <a target="_blank" href="https://www.cftla.cl/portal/" style="color: #fff;"> CFT Lota Arauco</a><br>
              <a target="_blank" href="https://www.cftla.cl/portal/norma_grafica.php" style="color: #fff;"> Norma Gr&aacute;fica </a>
            </div>
            <div class="col-md-2" style="padding: 10px;">
              <img src="https://estudiantes.cftla.cl/img/acreditacion_blanco.png" alt="..." class="img-fluid" width="200px">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>