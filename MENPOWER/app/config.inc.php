<?php

//configuracion de la base de datos

define('NOMBRE_SERVIDOR', 'localhost');
define('NOMBRE_USUARIO', 'root');
define('PASSWORD', '');
define('NOMBRE_BD', 'MENPOWER');

//guias de redireccionamientos

//define("SERVIDOR", "http://127.0.0.1:81/MENPOWER");
define("SERVIDOR", "http://localhost/MENPOWER");
define("SERVIDOR2", "http://localhost/MENPOWER/vistas" );


define("RUTA_REGISTRO", SERVIDOR."/Registro.php");
define("RUTA_REGISTRO_CORRECTO", SERVIDOR2."/RegistroCorrecto.php");
define("RUTA_INICIO", SERVIDOR."/index.php");


// redireccion vistas

define("RUTA_INICIO_ADMIN", SERVIDOR2."/PaginaPrincipal.php");
define("RUTA_LOGOUT", SERVIDOR2."/logout.php");

//recursos

