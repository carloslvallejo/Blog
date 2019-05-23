<?php
    $titulo = 'Blog - Personal';
    include_once 'plantilla/header.inc.php';
    include_once 'plantilla/navbar.inc.php';
?>
<!-------------------- seccion quien soy ------------------------>
<section class="quien-soy py-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center">
                <img src="<?php echo RUTA_IMAGENES; ?>/picture-1.jpg" alt="carlosv" class="img-fluid rounded mb-4 mb-md-0">
            </div>
            <div class="col-12 col-md-6 text-center my-4">
                <h1 class="display-4 font-weight-bold text-primary">¿Quien Soy?</h1><br>
                <p>Soy Carlos Luis Velásquez Vallejo, tengo 26 años. Ingeniero de Sistemas. 
                    Programador Junior de Desarrollo Web. Me apasiona el futbol y la musica.
                </p><br>
                <a href="#" class="btn btn-primary btn-lg">Leer Más</a>
            </div>
        </div>
    </div>
</section>
<!------------------------- seccion mensaje ------------------------->
<section class="mensaje bg-primary py-4 mb-4 text-center text-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="<?php echo RUTA_IMAGENES; ?>/picture-2.jpg" alt="carlosv2" class="rounded-circle img-fluid mb-4" width="240" height="auto">
                <p class="h3">Ama todo lo que hagas.<br> Esfuerzate cada día y <br>dedicate a mejorar cada mañana.
                </p><br>
                <p class="h5 font-italic">- Carlos Velásquez</p>
            </div>
        </div>
    </div>
</section>
<!---------------------------- seccion blog -------------------------->
<section class="bg-primary py-5">
    <div class="container">
        <h1 class="display-3 text-center text-white">Mi Blog</h1>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h5>Titulo</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis magnam vitae, elige.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <small class="text-muted">Last Update 3 days ago</small>
                            <a href="#" class="btn btn-sm btn-primary">Leer más</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5>Titulo</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis magnam vitae, elige.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <small class="text-muted">Last Update 3 days ago</small>
                            <a href="#" class="btn btn-sm btn-primary">Leer más</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5>Titulo</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis magnam vitae, elige.</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <small class="text-muted">Last Update 3 days ago</small>
                            <a href="#" class="btn btn-sm btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------------------- seccion proyectos --------------------->
<section class="proyecto pt-3 text-center">
    <div class="container">
        <h1 class="display-3 pb-2">Mis proyectos</h1>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-2">
                <div class="card">
                    <img src="<?php echo RUTA_IMAGENES; ?>/proyecto-1.png" alt="PETSHOP" class="card-img-top img-fluid" id="card1">
                    <div class="card-body">
                        <h1 class="card-title">Pet Shop</h1>
                        <p class="card-text">Tienda para Mascotas en proceso...</p>
                        <a href="proyectos/petshop/index.html" class="btn btn-primary btn-md">Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-2">
                <div class="card">
                    <img src="<?php echo RUTA_IMAGENES; ?>/prueba.png" alt="proyecto prueba" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h1 class="card-title">Proyecto 2</h1>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary btn-md">Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-2">
                <div class="card">
                    <img src="<?php echo RUTA_IMAGENES; ?>/prueba.png" alt="proyecto prueba" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h1 class="card-title">Proyecto 3</h1>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary btn-md">Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-2">
                <div class="card">
                    <img src="<?php echo RUTA_IMAGENES; ?>/prueba.png" alt="proyecto prueba" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h1 class="card-title">Proyecto 4</h1>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        <a href="#" class="btn btn-primary btn-md">Ver Proyecto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    include_once 'plantilla/footer.inc.php';
?>