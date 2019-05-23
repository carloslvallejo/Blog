<?php
include_once 'app/controlsession.inc.php';
include_once 'app/redireccion.inc.php';

ControlSesion::cerrar_sesion();
Redireccion::redirigir(SERVIDOR);

?>