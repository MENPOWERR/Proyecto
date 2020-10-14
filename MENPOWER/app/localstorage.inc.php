<?php

class localstorage {

    public static function Insertar_Usuario($conexion, $usuario) {

        $usuario_insertado = false;
        if (isset($conexion)) {

            try {

                $sql = "INSERT INTO usuarios (Username, userpass, idrol_fk) VALUES (:correo,  :clave, :tiporol)";

                $sentencia = $conexion->prepare($sql);

                $correo = $usuario->Obtener_Correo();
                $tiporol = $usuario->Obtener_Seltiporol();
                $clave = $usuario->Obtener_Clave();
                
                
                $sentencia->bindParam(':correo', $correo, PDO::PARAM_STR);
                $sentencia->bindParam(':tiporol', $tiporol, PDO::PARAM_INT);
                $sentencia->bindParam(':clave', $clave, PDO::PARAM_STR);

               $usuario_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $usuario_insertado;
    }

   
    public static function Verificar_Email_Existe($conexion, $Correo) {
        $email_existe = true;
        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM usuarios WHERE username = :email";

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':email', $Correo, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchALL();

                if (count($resultado)) {
                    $email_existe = true;
                } else {
                    $email_existe = false;
                }
            } catch (PDOException $ex) {
                print "ERROR" . $ex->getMessage();
            }
        }
        return $email_existe;
    }

    public static function Obtener_usuariol($conexion, $correo) {
        $Usuario = null;

        try {
            include_once 'usuario.inc.php';
            $sql = "SELECT i.id_usuario, i.Username, r.id_rol, r.rol, i.userpass FROM usuarios i INNER JOIN rol r ON r.id_rol = i.idrol_fk WHERE Username = :email";

            $sentencia = $conexion->prepare($sql);

            $sentencia->bindParam(':email', $correo, PDO::PARAM_STR);
            $sentencia->execute();
            $resultado = $sentencia->fetch();

            if (!empty($resultado)) {
                $Usuario = new Usuario($resultado['id_usuario'], $resultado['Username'], $resultado['id_rol'], $resultado['rol'], $resultado['userpass']);
            }
        } catch (PDOException $ex) {
            print "ERROR" . $ex->getMessage();
        }
        return $Usuario;
    }

	
    
    

}
