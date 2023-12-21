
<div class="card panel-default fade-in shadow-sm">
  <div class="card-body">
    <div class="container">
      <div class="py-2">

        <div class="col-md-12">
          <h5 style="letter-spacing: -0.7px;"> <i class="fa fa-home" aria-hidden="true"></i> &nbsp; Hola! [Nombre Nombre2] [ApellidoP ApellidoM] </h5>
        </div>
        <div class="col-md-12">
          <hr>
        </div>

        <div class="col-md-6">
          <a class="btn btn-danger btn-block mb-3" href="" data-toggle="modal" data-target="#modal_caracterizacion_cae" style="border-width: 6px;">
            <h5 class="text-center"> <i class="far fa-list-alt"></i> &nbsp; Encuesta de Caracterizaci&oacute;n CAE</h5>
          </a>
        </div>
        <div class="col-md-12">
          <br>
        </div>
        <div class="col-md-12">
          <div class="modal fade" id="datos_personales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Actualiza tus Datos de Contacto</h4>
                </div>
                <form class="" action="" method="post">
                  <div class="modal-body" style="padding: 25px;">
                    <div class="row">
                      <div class="col-md-12">
                        <label> Domicilio </label> <br>
                        <input type="text" class="form-control" name="domicilio" value="" required>
                      </div>
                      <div class="col-md-12">
                        <br>
                        <label> Comuna </label> <br>
                        <select class="form-control" name="comuna" required>
                          <option value="">Seleccione Comuna</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <br>
                        <label> Telefono <small>(Sin +56)</small> </label> <br>
                        <input type="number" step="1" min="0" class="form-control" name="telefono" value="" placeholder="991234567" required>
                      </div>
                      <div class="col-md-12">
                        <br>
                        <label> Telefono Secundario <small>(Sin +56)</small> </label> <br>
                        <input type="number" step="1" min="0" class="form-control" name="telefono2" value="" placeholder="412123456" required>
                      </div>
                      <div class="col-md-12">
                        <br>
                        <label> Correo Personal</label> <br>
                        <input type="email" class="form-control" name="correo" value="" required>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" name="guardar_contacto">Guardar Cambios</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!--<script>
      $(document).ready(function()
      {
        $("#img1").modal("show");
      });
    </script>-->
        <!--<div class="col-md-12">
      <br>

      <div class="modal fade" id="img4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Formulario de Inscripci&oacute;n Talleres extra program&aacute;ticos</h4>
            </div>
            <div class="modal-body">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfRtgAB54Wn9FdlUQmoVimfqj5YoYxvbFTT83nqktQ94h8hOQ/viewform?embedded=true" width="100%" height="808" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
    </div>-->

        <div class="col-md-12 col-xs-12">
          <h6> <b><i class="far fa-check-circle"></i> Informaci&oacute;n Importante</b> </h6>
        </div>
        <div class="col-md-12">
          <hr>
        </div>
        <!---Btn 1--->
        <div class="container text-center mb-3">
          <div class="row align-items-start">
            <div class="col">
              <a class="btn btn-warning btn-block text-white mb-3" href="login.php?id=18" style="border-width: 6px; width: 100%;">
                <h6 style="letter-spacing: -0.7px;" class="text-center"><i class="fas fa-child fa-2x"></i> <br><br> Departamento de Asuntos Estudiantiles <br> Documentos e Informaci&oacute;n </h6>
              </a>
            </div>
            <div class="col">
              <a class="btn btn-warning btn-block text-white" style="border-width: 6px; width: 100%;" data-toggle="modal" data-target="#accidentes">
                <h6 class="text-center"> <i class="fas fa-user-injured fa-2x"></i> <br><br> Procedimiento <br> Accidentes Estudiantiles </h6>
              </a>
            </div>
          </div>



          <!--<div class="col-md-4">
      <a href="#" target="_blank" data-toggle="modal" data-target="#img1"> <img src="img/1.jpg" class="img-responsive" width="100%" alt="" > </a>
      <div class="modal fade" id="img1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Talleres extra programáticos</h4>
            </div>
            <div class="modal-body">
             <a href="#" target="_blank" data-toggle="modal" data-target="#img4"><img src="img/1.jpg" class="img-responsive" width="100%" alt="" ></a>
              <br>
              <a href="#" target="_blank" data-toggle="modal" data-target="#img4" class="btn btn-info btn-block" style="font-size: 18px; border-width: 6px; letter-spacing: -0.7px;">
                Inscribete Aquí
                <small style="color: #ECECEC;">Talleres Extra Programáticos</small>
              </a>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
    </div>-->

          <div class="modal fade" id="accidentes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel"><b> Procedimiento de Accidentes Estudiantiles </b></h4>
                </div>
                <div class="modal-body">
                  <div style="text-align: left; border: none;">
                    <object type="application/pdf" data="documentos/Procedimiento_Accidente_Estudiantes.pdf" width="100%" height="600" id="pdf">
                      <param name="src" value="documentos/Procedimiento_Accidente_Estudiantes.pdf#toolbar=1&navpanes=1&scrollbar=1" />
                      <p style="text-align:center; width: 60%;">Adobe Reader no se encuentra o la versi&oacute;n no es compatible, utiliza el icono para ir a la p&aacute;gina de descarga <br />
                        <a href="http://get.adobe.com/es/reader/" onclick="this.target='_blank'">
                          <img src="reader_icon_special.jpg" alt="Descargar Adobe Reader" width="32" height="32" style="border: none;" /></a>
                      </p>
                    </object>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>

        </div>


        <!--<div class="col-md-6">
      <a class="btn btn-default btn-block" href="horario_induccion.php" target="_blank" style="border-width: 6px;">
        <h4 class="text-center" style="line-height: 200%; letter-spacing: -0.7px;"> <i class="far fa-calendar-check fa-2x"></i> <br> Inicio de Clases 2022</h4>
      </a>
    </div>-->

        <!--
     <div class="col-md-12">
      <br>
    </div>
    <div class="col-md-6">
      <a href="https://www.cftla.cl/portal/templates/comunicado_rectoria_actualizacion_medidas_sanitarias.pdf" target="_blank"> <img src="img/com.jpeg" class="img-responsive" width="100%" alt=""> </a>

    </div>-->
        <!--
    <div class="col-md-6">
      <a class="btn btn-default btn-block" href="" data-toggle="modal" data-target="#saludo_rector" style="border-width: 6px;">
        <h4 class="text-center" style="line-height: 150%; letter-spacing: -0.7px;"> <i class="fab fa-youtube fa-3x text-danger"></i> <br> Saludo del Rector a&ntilde;o 2021</h4>
      </a>
      <div class="modal fade" id="saludo_rector" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>Saludo Rector 2021 </b></h4>
            </div>
            <div class="modal-body">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/OvMTkkD4yOI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
    </div>
  -->

        <!--
    <div class="col-md-6">
      <a href="https://www.cftla.cl/portal/index.php/noticias3/1375-retorno-seguro-2-semestre-2021" target="_blank"> <img src="img/banner_intranet_Retorno.png" class="img-responsive" width="100%" alt=""> </a>
      <br>
    </div>
-->

        <div class="col-md-12 col-xs-12">
          <h6> <b> <i class="far fa-check-circle"></i> Equidad de G&eacute;nero </b> </h6>
          <hr>

          <div class="container">
            <div class="row align-items-start">
              <a href="genero/politica.pdf" target="_blank" class="btn btn-success mb-3" style="margin: 2px 0px 2px 0px; border-width: 3px; letter-spacing: -0.7px;">
                <i class="fas fa-book"></i> &nbsp; Pol&iacute;tica Equidad de G&eacute;nero CFT Lota Arauco
              </a>
              <a href="genero/protocolo.pdf" target="_blank" class="btn btn-success mb-3" style="margin: 2px 0px 2px 0px; border-width: 3px; letter-spacing: -0.7px;">
                <i class="fas fa-book"></i> &nbsp; Protocolo contra la violencia, discriminaci&oacute;n de g&eacute;nero y el acoso sexual
              </a>
              <a href="genero/manual.pdf" target="_blank" class="btn btn-success mb-3" style="margin: 2px 0px 2px 0px; border-width: 3px; letter-spacing: -0.7px;">
                <i class="fas fa-book"></i> &nbsp; Manual de uso de lenguaje inclusivo y no sexista
              </a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-12 col-xs-12">
        <h6> <b> <i class="far fa-check-circle"></i> Videos y Tutoriales </b> </h6>
        <hr>
      </div>

      <div class="container text-center mb-3">
        <div class="row align-items-start">
          <div class="col">
            <a class="btn btn-danger btn-block mb-3" href="" data-toggle="modal" data-target="#intranet_estudiante" style="border-width: 6px; width: 100%;">
              <h6 class="text-center"> <i class="fab fa-youtube fa-2x"></i> <br><br> Uso de Intranet <br> Estudiantes</h6>
            </a>
          </div>
          <div class="col">
            <a class="btn btn-danger btn-block mb-3" href="" data-toggle="modal" data-target="#quinto_semestre_video" style="border-width: 6px; width: 100%;">
              <h6 class="text-center"> <i class="fab fa-youtube fa-2x"></i> <br><br> Instructivo como tomar <br> 5 semestre. </h6>
            </a>
          </div>
        </div>
      </div>


      <div class="modal fade" id="intranet_estudiante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>Uso de Intranet del Estudiante </b></h4>
            </div>
            <div class="modal-body">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/-EGao5DcrMc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="quinto_semestre_video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>Instructivo como tomar 5to semestre </b></h4>
            </div>
            <div class="modal-body">
              <iframe width="100%" height="500" src="https://www.youtube.com/embed/4m8284k6DRk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>


      <div class="container text-center mb-3">
        <div class="row align-items-start">
          <div class="col">
            <a class="btn btn-primary btn-block mb-3" href="login.php?id=6" style="border-width: 6px; width: 100%;">
              <h6 class="text-center"> <i class="fa fa-video-camera fa-2x" aria-hidden="true"></i> <br><br> Contenci&oacute;n <br> Psicoeducativa </h6>
            </a>
          </div>
          <div class="col">
            <a class="btn btn-primary btn-block mb-3" href="login.php?id=7" style="border-width: 6px; width: 100%;">
              <h6 class="text-center"> <i class="fa fa-video-camera fa-2x" aria-hidden="true"></i> <br><br> Tutoriales de Aplicaciones <br> de Apoyo Pesdag&oacute;gico </h6>
            </a>
          </div>
          <div class="col">
            <a class="btn btn-primary btn-block mb-3" href="" data-toggle="modal" data-target="#mail" style="border-width: 6px; width: 100%;">
              <h6 class="text-center"> <i class="fas fa-envelope fa-2x"></i> <br><br>Pasos para <br> Activar tu Correo </h6>
            </a>
          </div>
        </div>
      </div>

      <!--
    <div class="col-md-3">
      <a class="btn btn-primary btn-block" href="" data-toggle="modal" data-target="#ingresar" style="border-width: 6px;">
        <h6 class="text-center"> <i class="fas fa-exclamation-circle fa-2x"></i> <br><br>¿ Problemas para <br> Ingresar a Clases ? </h6>
      </a>
      <div class="modal fade" id="ingresar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>¿ Problemas para Ingresar a Clases ? </b></h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                   <img src="img/ingresar/1.png" class="img-responsive" width="100%" alt="">
                </div>
                <div class="col-md-12 text-center">
                  <br>
                    <i class="fas fa-arrow-alt-circle-down fa-4x text-primary"></i>
                  <br><br>
                </div>
                <div class="col-md-12">
                   <img src="img/ingresar/2.png" class="img-responsive" width="100%" alt="">
                </div>
                <div class="col-md-12 text-center">
                  <br>
                    <i class="fas fa-arrow-alt-circle-down fa-4x text-primary"></i>
                  <br><br>
                </div>
                <div class="col-md-12">
                   <img src="img/ingresar/3.png" class="img-responsive" width="100%" alt="">
                </div>
                <div class="col-md-12 text-center">
                  <br>
                    <i class="fas fa-arrow-alt-circle-down fa-4x text-primary"></i>
                  <br><br>
                </div>
                <div class="col-md-12">
                   <img src="img/ingresar/4.png" class="img-responsive" width="100%" alt="">
                </div>

              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
    </div>
  -->
      <div class="modal fade" id="mail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>Pasos para Activar tu Correo </b></h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <img src="img/correo/1.png" class="img-responsive" width="100%" alt="">
                </div>
                <div class="col-md-12 text-center">
                  <br>
                  <i class="fas fa-arrow-alt-circle-down fa-4x text-primary"></i>
                  <br><br>
                </div>
                <div class="col-md-12">
                  <img src="img/correo/2.png" class="img-responsive" width="100%" alt="">
                </div>
                <div class="col-md-12 text-center">
                  <br>
                  <i class="fas fa-arrow-alt-circle-down fa-4x text-primary"></i>
                  <br><br>
                </div>
                <div class="col-md-12">
                  <img src="img/correo/3.png" class="img-responsive" width="100%" alt="">
                </div>
                <div class="col-md-12 text-center">
                  <br>
                  <i class="fas fa-arrow-alt-circle-down fa-4x text-primary"></i>
                  <br><br>
                </div>
                <div class="col-md-12">
                  <img src="img/correo/4.png" class="img-responsive" width="100%" alt="">
                </div>

              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>

      <div class="container text-center mb-3">
        <div class="row align-items-start">
          <div class="col">
            <a class="btn btn-danger btn-block mb-3" href="" data-toggle="modal" data-target="#video_gratuidad" style="border-width: 6px; width: 100%;">
              <h6 class="text-center"> <i class="fab fa-youtube fa-2x"></i> <br><br> Charla Adscripci&oacute;n <br> a la Gratuidad</h6>
            </a>
          </div>
          <div class="col">
            <a class="btn btn-danger btn-block mb-3" href="" data-toggle="modal" data-target="#conf_correo" style="border-width: 6px; width: 100%;">
              <h6 class="text-center"> <i class="fab fa-youtube fa-2x"></i> <br><br> Configurar Gmail <br> en tu Celular</h6>
            </a>
          </div>
          <div class="col">
            <a class="btn btn-danger btn-block mb-3" href="" data-toggle="modal" data-target="#carnet_discapacidad" style="border-width: 6px; width: 100%;q">
              <h6 class="text-center"> <i class="fab fa-youtube fa-2x"></i> <br><br> Trámite de Carnet <br> de Discapacidad </h6>
            </a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="video_gratuidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>Charla Adscripci&oacute;n a la Gratuidad </b></h4>
            </div>
            <div class="modal-body">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/RX9XE56KDdo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="conf_correo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>Configurar Gmail en tu Celular </b></h4>
            </div>
            <div class="modal-body">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/599m4RBpWOQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="carnet_discapacidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>Trámite de Carnet de Discapacidad</b></h4>
            </div>
            <div class="modal-body">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/4WROL4BjzLg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>


      <!--<div class="col-md-6">
      <br>
      <h4> <b><i class="fas fa-exclamation-circle"></i> Importante </b> </h4>
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7aMWV40WDxAptVYCg7veIQl4S7NgHL_IpyR-TS30d96mSWg/viewform" target="_blank"><img class="img-responsive"  src="img/dae.png" alt=""></a>

    </div>-->


      <div class="col-md-12 col-xs-12">
        <h6> <b> <i class="far fa-check-circle"></i> Reglamento Acad&eacute;mico, Modelo Educativo y Formulario FSRF </b> </h6>
        <hr>
      </div>

      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <a href="#" class="btn btn-info btn-block text-white mb-3" style="border-width: 6px; width: 100%; padding: 8px;" data-toggle="modal" data-target="#modelo_educativo"><i class="fas fa-book fa-2x"></i> <br>Modelo Educativo</a>
          </div>
          <div class="col">
            <a href="#" class="btn btn-info btn-block text-white mb-3" style="border-width: 6px; width: 100%; padding: 8px;" data-toggle="modal" data-target="#reglamento_academico"><i class="fas fa-book fa-2x"></i> <br> Reglamento Acad&eacute;mico</a>
          </div>
          <div class="row">
            <a href="login.php?id=10"> <img src="https://estudiantes.cftla.cl/img/banner_instranet_FSRF.png" class="text-center" style="width: 100%;" alt=""> </a>
          </div>
        </div>
      </div>

      <div class="modal fade" id="reglamento_academico" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog " role="document">
          <div class="modal-content modal-lg">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>Reglamento Acad&eacute;mico </b></h4>
            </div>
            <div class="modal-body">
              <div style="text-align: left; border: none;">
                <object type="application/pdf" data="documentos/Reglamento_Academico_20221.pdf" width="100%" height="600" id="pdf">
                  <param name="src" value="documentos/Reglamento_Academico_20221.pdf#toolbar=1&navpanes=1&scrollbar=1" />
                  <p style="text-align:center; width: 60%;">Adobe Reader no se encuentra o la versi&oacute;n no es compatible, utiliza el icono para ir a la p&aacute;gina de descarga <br />
                    <a href="http://get.adobe.com/es/reader/" onclick="this.target='_blank'">
                      <img src="reader_icon_special.jpg" alt="Descargar Adobe Reader" width="32" height="32" style="border: none;" /></a>
                  </p>
                </object>
              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>




      <div class="modal fade" id="modelo_educativo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog " role="document">
          <div class="modal-content modal-lg">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><b>Modelo Educativo </b></h4>
            </div>
            <div class="modal-body">
              <div style="text-align: left; border: none;">
                <object type="application/pdf" data="documentos/Modelo_Educativo.pdf" width="100%" height="600" id="pdf">
                  <param name="src" value="documentos/Modelo_Educativo.pdf#toolbar=1&navpanes=1&scrollbar=1" />
                  <p style="text-align:center; width: 60%;">Adobe Reader no se encuentra o la versi&oacute;n no es compatible, utiliza el icono para ir a la p&aacute;gina de descarga <br />
                    <a href="http://get.adobe.com/es/reader/" onclick="this.target='_blank'">
                      <img src="reader_icon_special.jpg" alt="Descargar Adobe Reader" width="32" height="32" style="border: none;" /></a>
                  </p>
                </object>
              </div>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
      <hr>
      <!--<div class="col-md-12">

          <h5> <b> ¿ Qui&eacute;res Conocer algunas Caracteriscas personales que no hab&iacute;as notado en ti ? </b> <br><br> Contesta los siguientes Test: </h5>

          <a href="https://www.psicoactiva.com/tests/kolb/test-kolb.htm" target="_blank" class="btn btn-warning btn-xs" style="margin: 2px;"><i class="fa fa-check-circle" aria-hidden="true"></i> Test de Estilos de Aprendizaje </a> <br>
          <a href="https://www.psicoactiva.com/tests/test-rosenberg.htm" target="_blank" class="btn btn-warning btn-xs" style="margin: 2px;"><i class="fa fa-check-circle" aria-hidden="true"></i> Test de Autoestima </a>
        </div>-->
    </div>
  </div>

</div>

</div>
</div>
</div>

</div>