<?php
	include_once '../app/Controlsesion.inc.php';
	include_once '../app/redireccionamientos.inc.php';
	include_once '../app/config.inc.php';
	
	Control_Sesion :: cerrar_sesion();
	Redireccion :: redirigir(RUTA_INICIO);


