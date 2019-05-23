<?php
include_once 'app/controlsession.inc.php';
include_once 'app/redireccion.inc.php';

if(!ControlSesion::sesion_iniciada()) {
    Redireccion::redirigir(RUTA_LOGIN);
}
$titulo = 'Gestion de Cuenta';
include_once 'plantilla/header.inc.php';
include_once 'plantilla/navbar.inc.php';
?>

<div class="container mt-5 py-4">
    <div class="jumbotron">
        <h1 class="display-2">Hola, <?php echo $_SESSION['username'];?></h1>
        <p class="font-italic">En esta seccion puedes administrar tu cuenta</p>
    </div>
</div>

<div class="container my-3 py-2">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="list-group" role="tablist">
                <a href="#perfil" role="tab" data-toggle="list" class="list-group-item list-group-item-action active">Datos Personales</a>
                <a href="#entrada" role="tab" data-toggle="list" class="list-group-item list-group-item-action">Crear Nueva Entrada</a>
                <a href="#clave" role="tab" data-toggle="list" class="list-group-item list-group-item-action">Cambiar Clave</a>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="tab-content">
                <div class="tab-pane" id="entrada" role="tabpanel">
                    <form action="">
                        <div class="form-row">
                            <div class="col-12 col-md-4">
                                <label for="titulo">Titulo</label>
                                <input type="text" class="form-control" id="titulo">
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="url">Url</label>
                                <input type="text" class="form-control" id="url">
                            </div>
                        </div>
                        <div class="form-row mt-2">
                            <div class="col-12 col-md-8">
                                <label for="contenido">Contenido</label>
                                <textarea class="form-control" name="contenido" id="contenido" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="mt-1">
                            <button type="submit" name="newentrada" id="newentrada" class="btn btn-success">Crear Entrada</button>
                            <button type="reset" class="btn btn-danger">Limpiar</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane active" id="perfil" role="tabpanel">
                    <form action="">
                        <fieldset disabled>
                            <div class="form-row">
                                <div class="col-12 col-md-4">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" id="nombre" class="form-control">
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" id="apellido" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-4">
                                    <label for="profesion">Profesion</label>
                                    <input type="text" id="profesion" class="form-control">
                                </div>
                                <div class="col-12 col-md-4">
                                    <label for="sexo">Sexo</label>
                                    <select class="custom-select" name="sexo" id="sexo">
                                        <option value="x" selected>---</option>
                                        <option value="0">Masculino</option>
                                        <option value="1">Femenino</option>
                                        <option value="2">Indefinido</option>                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12 col-md-8">
                                    <label for="email">Correo</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                        </fieldset>
                        <div class="mt-2">
                            <button type="button" class="btn btn-danger" id="editarperfil">Editar</button>
                            <button disabled="disabled" class="btn btn-success" type="submit" id="guardarperfil">Guardar Cambios</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="clave" role="tabpanel">
                    <div class="col-12 col-md-4 offset-md-2">
                        <form action="">
                            <div class="form-group">
                                <label for="oldpass">Clave Actual</label>
                                <input type="password" name="oldpass" id="oldpass" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="newpass">Nueva Clave</label>
                                <input type="password" name="newpass" id="newpass" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="newpass2">Repetir Clave</label>
                                <input type="password" name="newpass2" id="newpass2" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Cambiar Clave</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>