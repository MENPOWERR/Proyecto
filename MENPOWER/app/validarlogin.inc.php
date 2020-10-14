<?php

include_once 'localstorage.inc.php';

class Validar_Login{
    
    private $usuario;
    private $error;
    
    public function __construct($Correo, $Clave, $conexion ){
        $this->error ="";
        
        if(!$this -> Variable_iniciada($Correo) || !$this-> Variable_iniciada($Clave)){
            $this -> usuario = null;
            $this -> error = "Debes Ingresar tus datos";            
        } else {
            $this -> usuario = localstorage::Obtener_usuariol($conexion, $Correo);
            
            if(is_null($this -> usuario) || !password_verify($Clave, $this -> usuario -> Obtener_Clave())){
                $this -> error = "Datos Incorrectos";
            }
        }
    }
    
     private function Variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function Obtener_usuariol(){
        return $this -> usuario;
    }
    
    public function  Obtener_Error(){
        return $this -> error;
    }
    
    public function Mostrar_Error(){
        if($this -> error !==''){
            echo "<br><div class='alert alert-success' rol='alert'>";
            echo $this -> error;
            echo "</div><br>";
            
        }
    }
    
}
