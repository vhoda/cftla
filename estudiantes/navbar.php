<?php include 'base.php'; ?>
<nav class="navbar navbar-expand-sm shadow-sm navbar-dark" style="background-color: #225588; color: #fff;">
    <div class="container-fluid" style="margin: 8px;">
        <div class="container">
            <span class="navbar-brand logo-image text-white mb-2">
                <img class="img-responsive" src="https://estudiantes.cftla.cl/img/logos/cftb.png" alt="">
            </span>
            <br>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <h5 class="text-center ">Plataforma Estudiantes <br>
            <small  style="color: #B7AEA8;">(Demo Técnica)</small>
        </h5>
    </div>
    <div class="container">
        <ul class="nav ms-auto">
            <a class="nav-link text-white" href="../estudiantes"><i class="bi bi-house-fill"></i> Inicio</a>
            <!--dropdown usuario--->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown"><i class="bi bi-person-circle"></i> Nombre Apellido</a>
                <div class="dropdown-menu dropdown-menu-end shadow-sm">
                    <a href="" class="dropdown-item"><i class="bi bi-person-gear"></i> Editar Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a href="../" id="btn_exit" class="dropdown-item text-danger"><i class="bi bi-x-square"></i> Cerrar Sesión</a>
                </div>
            </li>
        </ul>
    </div>
    </div>
    </div>
</nav>
<div class="col-md-12" style="background-color: #F59F19; color: #fff; padding: 2px;"></div>
<div class="container-xxl bd-gutter mt-3 my-md-3 bd-layout"></div>