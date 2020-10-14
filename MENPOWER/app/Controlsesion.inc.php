<?php

class Control_Sesion {

    public static function Iniciar_Sesion($id_usuario, $Username, $id_rol, $rol) {
        if(session_id() == ''){
            session_star();
        }
        $_SESSION['id_usuario'] = $id_usuario;$_SESSION['Username'] = $Username;
        $_SESSION['id_rol'] = $id_rol;$_SESSION['rol'] = $rol;
    }
    
    public static function cerrar_sesion() {
        if (session_id() == '') {
            session_start();
        }
        
        if (isset($_SESSION['id_usuario'])) {
            unset($_SESSION['id_usuario']);
        }
        
        if (isset($_SESSION['Username'])) {
            unset($_SESSION['Username']);
        }
        
        session_destroy();
    }
    
    public static function sesion_iniciada() {
        if (session_id() == '') {
            session_start();
        }
        
        if (isset($_SESSION['id_usuario']) && isset($_SESSION['Username'])) {
            return true;
        } else {
            return false;
        }
    }
}
