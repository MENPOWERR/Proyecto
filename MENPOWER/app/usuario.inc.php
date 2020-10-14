<?php

class usuario {

    private $id_usuario;
    private $correo;
    private $idrol;
    private $seltiporol;
    private $clave;

    public function __construct($id_usuario, $Correo, $idrol, $seltiporol, $clave) {

        $this->id_usuario = $id_usuario;
        $this->correo = $Correo;
        $this->idrol = $idrol;
        $this->seltiporol = $seltiporol;
        $this->clave = $clave;
        
    }

    //obtener

    public function Obtener_ususario() {
        return $this->id_usuario;
    }

    public function Obtener_Correo() {
        return $this->correo;
    }
    
    public function Obtener_Id_Rol() {
        return $this->idrol;
    }

    public function Obtener_Seltiporol() {
        return $this->seltiporol;
    }

    public function Obtener_Clave() {
        return $this->clave;
    }

    //mostrar

    
    public function mostrar_correo() {
        if ($this->Correo !== "") {
            echo 'value="' . $this->Correo . '"';
        }
    }
    
    //cambiar

   
    public function Cambiar_Correo($correo) {
        $this->correo = $correo;
    }

    public function Cambiar_Seltiporol($seltiporol) {
        $this->seltiporol = $seltiporol;
    }

    public function Cambiar_Clave($clave) {
        $this->clave1 = $clave;
    }

}
