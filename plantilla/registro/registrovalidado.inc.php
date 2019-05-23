<div class="form-group">
    <label for="correo">CORREO ELECTRÓNICO</label>
    <input type="email" id="correo" name="correo" class="form-control" <?php $validador -> setCorreo(); ?>>
    <?php $validador -> setErrorCorreo(); ?>
</div>
<div class="form-group">
    <label for="username">NOMBRE USUARIO</label>
    <input type="text" id="username" name="username" class="form-control" <?php $validador -> setUsername(); ?>>
    <?php $validador -> setErrorUsername(); ?>
</div>
<div class="form-group">
    <label for="pwd1">CONTRASEÑA</label>
    <input type="password" id="pwd1" name="pwd1" class="form-control">
    <?php $validador -> setErrorPwd(); ?>
</div>
<div class="form-group">
    <label for="pwd2">REPITA CONTRASEÑA</label>
    <input type="password" id="pwd2" name="pwd2" class="form-control">
    <?php $validador -> setErrorPwd2(); ?>
</div>
<button type="submit" class="btn btn-success btn-block" name="registro">REGISTRARSE</button>
<hr>
<span>¿Ya esta Registrado? <a href="<?php echo RUTA_LOGIN; ?>">Iniciar Sesión</a></span>