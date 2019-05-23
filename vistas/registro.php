<?php 
include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';
include_once 'app/redireccion.inc.php';
include_once 'app/usuarios.inc.php';
include_once 'app/repositorioUsuario.inc.php';
include_once 'app/validarUsuario.inc.php';

if(isset($_POST['registro'])) {
    conexion::open_conex();
    $validador = new ValidarUsuario($_POST['username'], $_POST['correo'], 
        $_POST['pwd1'], $_POST['pwd2'], conexion::get_conex());
    if($validador -> registroValido()) {
        $nuevo_usuario = new Usuarios('', $validador -> getUsername(), $validador -> getCorreo(), password_hash($validador -> getPwd(), PASSWORD_DEFAULT), '');
        $user_insert = RepositorioUsuario::insertar_usuario(conexion::get_conex(), $nuevo_usuario);
        if($user_insert) {
            Redireccion::redirigir(SERVIDOR);
        } 
    }
    conexion::close_conex();
}

$titulo = 'Registro';
include_once 'plantilla/header.inc.php';
include_once 'plantilla/navbar.inc.php';

?>
<div class="container mt-5 pt-3">
    <div class="jumbotron">
        <h1 class="display-1">Area de Registro</h1>
        <p class="font-italic">Registrate y comentanos tu opinion!</p>
    </div>
</div>

<div class="container">
    <div class="col-12 col-md-5 offset-md-4 bg-dark rounded my-3 py-3">
        <form method="post" action="<?php echo RUTA_REGISTRO; ?>">
            <?php 
            if(isset($_POST['registro'])) {
                include_once 'plantilla/registro/registrovalidado.inc.php';
            } else {
                include_once 'plantilla/registro/registrovacio.inc.php';
            }
            ?>
        </form>
    </div>
</div>

<?php

include_once 'plantilla/footer.inc.php';
?>