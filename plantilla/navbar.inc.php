<?php
include_once 'app/controlsession.inc.php';
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'app/usuarios.inc.php';
include_once 'app/repositorioUsuario.inc.php';
include_once 'app/validarUsuario.inc.php';
include_once 'app/validarLogin.inc.php';
if(isset($_POST['login'])) {
    conexion::open_conex();
    $validar = new ValidarLogin($_POST['username'], $_POST['password'], conexion::get_conex());

    if($validar -> getError() === '') {
        ControlSesion::iniciar_sesion($validar -> getUsuario() -> getId(), $validar -> getUsuario() -> getUsername());
        Redireccion::redirigir(SERVIDOR);
    }
    conexion::close_conex();
}
if(isset($_POST['registro'])) {
    conexion::open_conex();
    $validador = new ValidarUsuario($_POST['usuario'], $_POST['correo'], 
        $_POST['pwd'], $_POST['pwd2'], conexion::get_conex());
    if($validador -> registroValido()) {
        $nuevo_usuario = new Usuarios('', $validador -> getUsername(), $validador -> getCorreo(), password_hash($validador -> getPwd(), PASSWORD_DEFAULT), '');
        $user_insert = RepositorioUsuario::insertar_usuario(conexion::get_conex(), $nuevo_usuario);
        if($user_insert) {
            Redireccion::redirigir(SERVIDOR);
        } 
    }
    conexion::close_conex();
}
$iniciada = false;
if(ControlSesion::sesion_iniciada()) {
    $iniciada = true;
}
?>

<!---------------- menu de navegacion --------------------------->
<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo SERVIDOR; ?>" ><strong>CV</strong> Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <div class="navbar-nav">
            <a href="<?php echo SERVIDOR ?>" class="nav-item nav-link <?php if($pagina_actual == 'inicio') {echo 'active';}?>">Inicio</a>
            <a href="<?php echo RUTA_BLOG ?>" class="nav-item nav-link <?php if($pagina_actual == 'blog') {echo 'active';}?>">Blog</a>
            <a href="#" class="nav-item nav-link">Proyectos</a>
        </div>
        <div class="navbar-nav">
        <?php
            if($iniciada) {
                ?>
                <div class="nav-item dropdown <?php if($pagina_actual == 'gestor'){echo 'active';}?>">
                    <a id="navDropdown" href="#" class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" role="button" data-toggle="dropdown">Gestionar</a>
                    <div class="dropdown-menu" aria-labelledby="navDropdown">
                        <a href="<?php echo RUTA_GESTOR ?>" class="dropdown-item">Cuenta</a>
                    </div>
                </div>
                <a href="<?php echo LOGOUT; ?>" class="nav-item nav-link">Logout</a>
                <?php
            } else {
                ?>
                <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#modalregistro" id="modalLogin">Iniciar sesion</a>
                <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#modalregistro"  id="modalRegistro">Registrarse</a>
                <?php
            }
            ?>
        </div>
    </div>
</nav>
<div class="modal modal-center modal-md" role="dialog" tabindex="-1" id="modalregistro" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <div class="list-group list-group-horizontal" id="lista" role="tablist">
                    <a class="list-group-item" role="tab" href="#login" data-toggle="list" id="modal1">Iniciar Sesion</a>
                    <a class="list-group-item" role="tab" href="#registro" data-toggle="list" id="modal2">Registrarse</a>
                </div>
            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane" id="login" role="tabpanel">
                        <form action="<?php RUTA_LOGIN ?>" method="post">
                            <div class="form-group">
                                <label for="username">USUARIO</label>
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">CONTRASEÑA</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success mr-2" id="login" name="login">INICIAR</button>
                                <button class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="registro" role="tabpanel">
                        <form action="<?php RUTA_REGISTRO ?>" method="post">
                            <div class="form-group">
                                <label for="usuario">NOMBRE USUARIO</label>
                                <input type="text" id="usuario" name="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="correo">CORREO ELECTRÓNICO</label>
                                <input type="email" name="correo" id="correo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pwd">CONTRASEÑA</label>
                                <input type="password" name="pwd" id="pwd" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pwd2">REPITA CONTRASEÑA</label>
                                <input type="password" name="pwd2" id="pwd2" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success btn-block" id="registro" name="registro">REGISTRARSE</button>
                            <button class="btn btn-danger btn-block" data-dismiss="modal">CANCELAR</button>
                        </form>
                        <br>
                        <p>¿Olvido su contraseña? Pulse <a href="#">Aquí</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>