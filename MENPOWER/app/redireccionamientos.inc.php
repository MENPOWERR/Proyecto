<?php

class Redireccion{
    
    public static function Redirigir($url){
        
         header('Location: ' . $url, true, 301);
        exit();        
    }
    
}

