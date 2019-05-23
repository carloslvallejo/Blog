<?php
$titulo = 'Blog';
include_once 'plantilla/header.inc.php';
include_once 'plantilla/navbar.inc.php';
?>
<div class="jumbotron">
    <div class="container text-center">
        <h5 class="display-3">HOLA PEQUEÑO</h5>
        <p class="font-italic">Vacilate los temas que me salen del corazon</p>
    </div>
</div>
<section class="bg-primary my-3">
    <h1 class="display-3 text-white text-center">Mi Blog</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <h1 class="h5 text-center">Entradas</h1>
                <div class="contenedor rounded bg-light overflow-auto mb-2" style="height:500px;">
                    <div class="list-grop">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-none d-md-block">
                <h6 class="h6">Registrate y Comenta!</h6>
                <a href="<?php echo RUTA_LOGIN; ?>" class="btn btn-sm btn-success">Login</a>
                <a href="<?php echo RUTA_REGISTRO; ?>" class="btn btn-sm btn-danger">Register</a>
            </div>
        </div>
    </div>
</section>
<?php
include_once 'plantilla/footer.inc.php';
?>