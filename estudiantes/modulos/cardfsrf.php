<div class="card panel-default fade-in shadow-sm">
    <div class="card-body">
        <div class="py-1"></div>
        <div class="container">
            <h5> <b><i class="fa fa-book" aria-hidden="true"></i> &nbsp;&nbsp; Sistema de Sugerencias, Reclamos y Felicitaciones (FSRF) </b> </h5>
            <hr>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label> Motivo </label>
                    <select class="form-control" name="motivo" required="">
                        <option value=""> --Seleccione una Opcion-- </option>
                        <option value="Sugerencia">Sugerencia</option>
                        <option value="Reclamo">Reclamo</option>
                        <option value="Felicitacion">Felicitacion</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label> Destinatario (Departamento o Unidad) </label>
                    <select class="form-control" name="destino" required="">
                        <option value=""> --Seleccione una Opcion-- </option>
                        <option value="40"> Administrativos Cañete </option>
                        <option value="6"> Centro de Emprendimiento </option>
                        <option value="61"> Centro de Emprendimiento Cañete </option>
                        <option value="5"> Departamento de Asuntos Estudiantiles </option>
                        <option value="60"> Departamento de Asuntos Estudiantiles Cañete </option>
                        <option value="4"> Departamento de Calidad </option>
                        <option value="23"> Departamento de Computación e Informática </option>
                        <option value="10"> Departamento de Contabilidad y Finanzas </option>
                        <option value="1"> Departamento de Docencia </option>
                        <option value="12"> Departamento de Logística y Abastecimiento </option>
                        <option value="7"> Departamento de Personal </option>
                        <option value="30"> Departamento de Proyectos </option>
                        <option value="2"> Departamento de Registro Académico </option>
                        <option value="3"> Departamento de Sistemas </option>
                        <option value="13"> Departamento Prevención de Riesgos </option>
                        <option value="25"> Departamento Relaciones Institucionales </option>
                        <option value="33"> Jefe de Carrera (Administración) </option>
                        <option value="38"> Jefe de Carrera (Administración/Educación Cañete) </option>
                        <option value="34"> Jefe de Carrera (Comercio) </option>
                        <option value="35"> Jefe de Carrera (Construcción) </option>
                        <option value="37"> Jefe de Carrera (Educación) </option>
                        <option value="31"> Jefe de Carrera (Industrial) </option>
                        <option value="36"> Jefe de Carrera (Sociales) </option>
                        <option value="39"> Jefe de Carrera (Sociales Cañete) </option>
                        <option value="32"> Jefe de Carrera (Tecnológica) </option>
                        <option value="47"> Jefe de Carrera TNS Educación Diferencial (Lota) </option>
                        <option value="42"> Jefe de Carrera TNS en Administración de Empresas (Lota) </option>
                        <option value="55"> Jefe de Carrera TNS en Administración Pública (Cañete) </option>
                        <option value="43"> Jefe de Carrera TNS en Administración Pública (Lota) </option>
                        <option value="44"> Jefe de Carrera TNS en Computación e Informática (Lota) </option>
                        <option value="45"> Jefe de Carrera TNS en Construccion (Lota) </option>
                        <option value="46"> Jefe de Carrera TNS en Educación De Párvulos (Lota) </option>
                        <option value="56"> Jefe de Carrera TNS en Educación Diferencial (Cañete) </option>
                        <option value="48"> Jefe de Carrera TNS en Electricidad Industrial y Sistemas Eléctricos (Lota) </option>
                        <option value="49"> Jefe de Carrera TNS en Gestión Portuaria y Pesquera (Lota) </option>
                        <option value="50"> Jefe de Carrera TNS en Instrumentación y Automatización Industrial (Lota) </option>
                        <option value="51"> Jefe de Carrera TNS en Logística (Lota) </option>
                        <option value="52"> Jefe de Carrera TNS en Mecánica Industrial (Lota) </option>
                        <option value="57"> Jefe de Carrera TNS en Trabajo Social (Cañete) </option>
                        <option value="53"> Jefe de Carrera TNS en Trabajo Social (Lota) </option>
                        <option value="54"> Jefe de Carrera TNS en Turismo y Gastronomía (Lota) </option>
                        <option value="15"> Jefes de Carreras (COMPUTACIÓN E INFORMÁTICA) </option>
                        <option value="58"> Registro Académico Cañete </option>
                        <option value="9"> Unidad Biblioteca </option>
                        <option value="62"> Unidad Biblioteca Cañete </option>
                        <option value="11"> Unidad de Comunicaciones </option>
                        <option value="14"> Unidad de Difusión y Extensión </option>
                        <option value="29"> Unidad de Educación Contínua </option>
                        <option value="28"> Unidad de Empleabilidad y Titulados </option>
                        <option value="59"> Unidad de Prácticas Laborales Cañete </option>
                        <option value="22"> Unidad Desarrollo Organizacional </option>
                        <option value="41"> Unidad Equidad de Genero </option>
                        <option value="24"> Unidad Industrial Tecnológica (UNITEC) </option>
                        <option value="8"> Unidad Prácticas Laborales y Titulación </option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label> Telefono Contacto </label>
                    <input type="tel" name="fono" class="form-control" min="0" value="" required="">
                </div>
                <div class="col-md-12">
                    <br>
                    <label>Descripción</label>
                    <textarea name="descripcion" class="form-control mb-4" rows="8" cols="80" required=""></textarea>
                </div>
                <div class="col-md-12">
                    <p class="float-end"> <button type="submit" class="btn btn-success" name="enviar_formulario">Enviar</button> </p>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <h5> <b> <i class="bi bi-chat-right-quote-fill"></i> &nbsp;&nbsp; Historial de Registros FSRF</b> </h5>
            <div class="overflow-x-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Tipo </th>
                        <th> Descripción</th>
                        <th> Fecha </th>
                        <th> Estado </th>
                        <th> Destinatario </th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="font-size: 12px;">
                        <td> 8 </td>
                        <td><span class="badge bg-secondary"> Sugerencia </span> </td>
                        <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus justo mauris, convallis tempus aliquet id, suscipit non dui. Morbi a volutpat dui, nec elementum lectus. Morbi eu lacinia sapien, sed aliquam urna. Sed sodales non tellus vel vehicula. Phasellus tellus urna, consequat vitae odio eu, vestibulum molestie lectus. Quisque lobortis, felis vel scelerisque rhoncus, ex purus rutrum risus, sit amet pharetra odio ante id leo. Pellentesque iaculis turpis vel leo varius, quis accumsan erat molestie. Mauris rhoncus dignissim massa, nec ullamcorper eros gravida eu. Phasellus et est in ex iaculis volutpat ut blandit nulla. Nam tincidunt, purus vel elementum interdum, metus enim convallis velit, vitae viverra ante ligula quis nisi. Phasellus tristique iaculis orci vel tempor. Pellentesque hendrerit finibus velit ut pretium. Mauris iaculis viverra elit et semper. Suspendisse dapibus tempor augue. Proin scelerisque lacus a lorem eleifend lobortis. Vestibulum vitae est dictum, accumsan nisl vel, vestibulum nisi. </td>
                        <td> 2020-07-03 </td>
                        <td>
                            <span class="badge bg-success"> Finalizado <i class="bi bi-check-circle-fill"></i> </span>
                        </td>
                        <td> Departamento de Computación e Informática </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>