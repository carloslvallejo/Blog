<?php

include_once 'app/config.inc.php';
include_once 'app/conexion.inc.php';

$components_url = parse_url($_SERVER['REQUEST_URI']);
$ruta = $components_url['path'];
$part_rutas = explode('/', $ruta);
$part_rutas = array_filter($part_rutas);
$part_rutas = array_slice($part_rutas, 0);

$ruta_directa = 'vistas/404.php';

if($part_rutas[0] == 'blog') {
    if(count($part_rutas) == 1) {
        $pagina_actual = 'inicio';
        $ruta_directa = 'vistas/inicio.php';
    } else if(count($part_rutas) == 2) {
        switch($part_rutas[1]) {
            case 'inicio':
                $pagina_actual = 'blog';
                $ruta_directa = 'vistas/blog.php';
                break;
            case 'registro':
                $pagina_actual = 'registro';
                $ruta_directa = 'vistas/registro.php';
                break;
            case 'login':
                $pagina_actual = 'login';
                $ruta_directa = 'vistas/login.php';
                break;
            case 'gestor':
                $pagina_actual = 'gestor';
                $ruta_directa = 'vistas/gestion.php';
                break;
            case 'logout':
                $ruta_directa = 'vistas/logout.php';
                break;
            case 'cuenta':
                $pagina_actual = 'Perfil';
                $ruta_directa = 'vistas/perfil.php';
                break;
        }
    }
}

include_once $ruta_directa;
?>