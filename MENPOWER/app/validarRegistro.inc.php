<?php
include_once 'localstorage.inc.php';

class Validar_Registro {

    private $aviso_inicio;
    private $aviso_cierre;
    private $Correo;
	private $clave;

    
   
	private $Error_Correo;
    private $Error_Clave1;
    private $Error_Clave2;

    public function __construct( $Correo, $Clave1, $Clave2, $conexion) {

        $this->aviso_inicio = "<br><div class='alert alert-success' rol='alert'>";
        $this->aviso_cierre = "</div>";

        
        $this->Correo = "";
        $this->clave = "";

		$this->Error_Correo = $this->Validar_Correo($conexion, $Correo);
        $this->Error_Clave1 = $this->Validar_Clave1($Clave1);
        $this->Error_Clave2 = $this->Validar_Clave2($Clave1, $Clave2);

        if ($this->Error_Clave1 === "" && $this->Error_Clave2 === "") {
            $this->clave = $Clave1;
        }
    }

    private function Variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }

   
    private function Validar_Correo($conexion, $Correo) {
        if (!$this->Variable_iniciada($Correo)) {
            return "Debes Ingresar tu Correo";
        } else {
            $this->Correo = $Correo;
        }
        
        if(localstorage :: Verificar_Email_Existe($conexion, $Correo)){
            return "Este Correo ya esta registrado por favor intente con otro coreo o <a href='#'>Recupere su contraseña</a>";
        }
        return "";
    }
    
      
    private function Validar_Clave1($Clave1) {
        if (!$this->Variable_iniciada($Clave1)) {
            return "Debes Ingresar tu Contraseña";
        }
        return "";
    }

    private function Validar_Clave2($Clave1, $Clave2 ) {
        if (!$this->Variable_iniciada($Clave1)) {
            return "Ingresa Primero tu Contraseña";
        }
        if (!$this->Variable_iniciada($Clave2)) {
            return "Debes Repetir tu Contraseña";
        }
        if ($Clave1 !== $Clave2) {
            return "Las Contraseñas no Coinsiden";
        }
        return "";
    }

    //obtener
    

    public function obtener_Correo() {
        return $this->Correo;
    }
    
      
    public function obtener_Clave() {
        return $this->clave;
    }

    //obtener Error
   
    public function obtener_Error_Correo() {
        return $this->Error_Correo;
    }    
        
    
    public function obtener_Error_Clave1() {
        return $this->Error_Clave1;
    }

    public function obtener_Error_Clave2() {
        return $this->Error_Clave2;
    }

    //mostrar

   

    public function mostrar_correo() {
        if ($this->Correo !== "") {
            echo 'value="' . $this->Correo . '"';
        }
    }
        
    
    //mostrar error

  
    public function mostrar_error_correo() {
        if ($this->Error_Correo !== "") {
            echo $this->aviso_inicio . $this->Error_Correo . $this->aviso_cierre;
        }
    }    
    
    
    public function mostrar_error_clave1() {
        if ($this->Error_Clave1 !== "") {
            echo $this->aviso_inicio . $this->Error_Clave1 . $this->aviso_cierre;
        }
    }

    public function mostrar_error_clave2() {
        if ($this->Error_Clave2 !== "") {
            echo $this->aviso_inicio . $this->Error_Clave2 . $this->aviso_cierre;
        }
    }

    public function Registro_Validado() {
        if (
              
                $this->Error_Correo === "" &&
                $this->Error_Clave1 === "" &&
                $this->Error_Clave2 === "") {
            
            return true;
        } else {
            return false;
        }
    }

}
