<?php

class RepositorioUsuario {

    public static function insertar_usuario($conexion, $usuario) {
        $usuario_insertado = false;
        if(isset($conexion)) {
            try {
                include_once 'usuarios.inc.php';

                $sql = "INSERT INTO usuarios (username, correo, pwd, estado) VALUES (:username, :correo, :pwd, 0)";

                $sentencia = $conexion -> prepare($sql);

                $username = $usuario -> getUsername();
                $correo = $usuario -> getCorreo();
                $pwd = $usuario -> getPwd();

                $sentencia -> bindParam(':username', $username, PDO::PARAM_STR);
                $sentencia -> bindParam(':correo', $correo, PDO::PARAM_STR);
                $sentencia -> bindParam(':pwd', $pwd, PDO::PARAM_STR);

                $usuario_insertado = $sentencia -> execute();

            } catch (PDOException $th) {
                echo 'ERROR AL INSERTAR USUARIO: ' . $th -> getMessage();
            }
        }
        return $usuario_insertado;
    }
    public static function obtener_usuario($conexion, $username) {
        $usuario = null;
        if(isset($conexion)) {
            try {
                include_once 'usuarios.inc.php';

                $sql = "SELECT * FROM usuarios WHERE username = :username";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':username', $username, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();
                
                if(!empty($resultado)) {
                    $usuario = new Usuarios($resultado['id'], $resultado['username'], $resultado['correo'],
                    $resultado['pwd'], $resultado['estado']);
                }
            } catch (PDOException $th) {
                echo 'ERROR AL OBTENER USUARIO: ' . $th -> getMessage();
            }
        }
        return $usuario;
    }
    public static function usuario_existe($conexion, $username) {
        $usuario = false;
        if(isset($conexion)) {
            try {

                $sql = "SELECT * FROM usuarios WHERE username = :username";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':username', $username, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();
                
                if(count($resultado)) {
                    $usuario = true;
                }
            } catch (PDOException $th) {
                echo 'ERROR AL OBTENER USUARIO EXISTENTE: ' . $th -> getMessage();
            }
        }
        return $usuario;
    }
    public static function correo_existe($conexion, $correo) {
        $correo_existe = false;
        if(isset($conexion)) {
            try {

                $sql = "SELECT * FROM usuarios WHERE correo = :correo";
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> bindParam(':correo', $correo, PDO::PARAM_STR);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();
                
                if(count($resultado)) {
                    $correo_existe = true;
                }
            } catch (PDOException $th) {
                echo 'ERROR AL OBTENER CORREO EXISTENTE: ' . $th -> getMessage();
            }
        }
        return $correo_existe;
    }

}

?>