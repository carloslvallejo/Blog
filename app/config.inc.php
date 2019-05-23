<?php

 //informacion de la base de datos PostGreSQL

 define('servername', 'localhost');
 define('dbname', 'blog');
 define('dbuser', 'postgres');
 define('dbpwd', '20420115');

 // rutas de las vistas
  
define("SERVIDOR", "http://localhost/blog");
define("RUTA_BLOG", SERVIDOR. "/inicio");
define("RUTA_REGISTRO", SERVIDOR. "/registro");
define("RUTA_LOGIN", SERVIDOR. "/login");
define("RUTA_GESTOR", SERVIDOR. "/gestor");
define("LOGOUT", SERVIDOR. "/logout");
define("RUTA_CUENTA", SERVIDOR. "/cuenta");


// rutas de los recursos

define("RECURSOS", SERVIDOR. "/recursos");
define("RUTA_CSS", RECURSOS . "/css/");
define("RUTA_JS", RECURSOS . "/js/");
define("RUTA_IMAGENES", RECURSOS . "/images/");
?>