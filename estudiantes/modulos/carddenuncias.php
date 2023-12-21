<div class="card panel-default fade-in shadow-sm">
    <div class="card-body">
    <div class="py-1"></div>
    <div class="container">
        <h5> <b><i class="fa fa-book" aria-hidden="true"></i> &nbsp;&nbsp; Denuncias </b> </h5>
        <hr>
    </div>
    <div class="container">
        <div class="alert alert-warning" style="letter-spacing: -0.7px;">
            <h5><b><i class="bi bi-exclamation-triangle-fill"></i> ¡Atención!</b> </h5>
            Considere que una denuncia es un hecho gravísimo, que será conocido por el Rector y Vicerrector del Centro.
            Las denuncias están relacionadas a hechos de violencia, acoso sexual, acoso laboral u otros delitos que deban ser investigados y sancionados según la normativa vigente interna o,
            si la situación lo amerita, puestos en conocimiento de Carabineros o la Policía de Investigaciones. Si su requerimiento no coincide, por favor ingréselo como reclamo o sugerencia.
        </div>
    </div>
    <div class="container">

        <form class="" action="login.php" method="post">
            <div class="row">
                <div class="col-md-4">
                    <label> Motivo </label>
                    <select class="form-control" name="motivo" required="">
                        <option value="Denuncia">Denuncia</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label> Telefono Contacto </label>
                    <input type="number" name="fono" class="form-control" min="0" value="" required="">
                </div>
                <div class="col-md-12">
                    <br>
                    <label>Descripción</label>
                    <textarea name="descripcion" class="form-control" rows="8" cols="80" required=""></textarea>
                </div>
                <div class="col-md-12">
                    <br>
                    <p class="float-end"> <button type="submit" class="btn btn-success" name="enviar_formulario_denuncias">Enviar</button> </p>
                </div>
            </div>
        </form>
        <hr>
    </div>
    <div class="container">
        <h5 class="mb-4"> <b> <i class="bi bi-chat-right-quote-fill"></i> &nbsp;&nbsp; Historial de Denuncias</b> </h5>

        <div class="alert alert-primary" role="alert">
            <i class="fas fa-exclamation-circle" aria-hidden="true"></i> No se encuentran denuncias registradas.
        </div>
        
    </div>

</div>