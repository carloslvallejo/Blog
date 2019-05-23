<?php
include_once 'app/validarLogin.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/controlsession.inc.php';

if(isset($_POST['login'])) {
    conexion::open_conex();
    $validar = new ValidarLogin($_POST['username'], $_POST['pwd'], conexion::get_conex());

    if($validar -> getError() === '') {
        ControlSesion::iniciar_sesion($validar -> getUsuario() -> getId(), $validar -> getUsuario() -> getUsername());
        Redireccion::redirigir(RUTA_BLOG);
    }
    conexion::close_conex();
}
$titulo = 'Inicio de Sesion';
include_once 'plantilla/header.inc.php';
include_once 'plantilla/navbar.inc.php';

?>

<div class="container mt-5 mb-3 pt-5">
    <div class="jumbotron">
        <h1 class="display-1">Inicio de Sesion</h1>
        <p class="font-weight-bold">come on dude!</p>
    </div>
</div>
<div class="container">
    <div class="col-12 col-md-5 offset-md-4 bg-dark py-2 mb-5">
        <form action="<?php echo RUTA_LOGIN; ?>" method="post">
            <?php
            if(isset($_POST['login'])) {
                include_once 'plantilla/login/loginvalidado.inc.php';
            } else {
                include_once 'plantilla/login/loginvacio.inc.php';
            }
            ?>
        </form>
    </div>
</div>
<?php

include_once 'plantilla/footer.inc.php';

?>