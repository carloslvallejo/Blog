<?php
include_once 'conexion.inc.php';
include_once 'repositorioUsuario.inc.php';

class ValidarUsuario {

    private $errorUsername;
    private $errorPwd;
    private $errorPwd2;
    private $errorCorreo;

    private $username;
    private $pwd;
    private $correo;

    private $avisa_i;
    private $avisa_c;

    public function __construct($username, $correo, $pwd, $pwd2, $conexion) {
        $this -> avisa_i = '<br><div class="alert alert-danger" role="alert">';
        $this -> avisa_c = '</div>';
        $this -> username = '';
        $this -> correo = '';
        $this -> pwd = '';

        $this -> errorUsername = $this -> validarUsuario($conexion, $username);
        $this -> errorCorreo = $this -> validarCorreo($conexion, $correo);
        $this -> errorPwd = $this -> validarClave($pwd);
        $this -> errorPwd2 = $this -> validarClave2($pwd, $pwd2);
        

        if($this -> errorPwd === '' && $this -> errorPwd2 === '') {
            $this -> pwd = $pwd;
        }
    }
    private function variableIniciada($var) {
        if(isset($var) && !empty($var)) {
            return true;
        } else {
            return false;
        }
    }
    private function validarUsuario($conexion, $username) {
        if(!$this -> variableIniciada($username)) {
            return 'DEBE INGRESAR UN USUARIO';
        } 
        if(strlen($username) < 6 || strlen($username) > 25) {
            return 'EL NOMBRE DE USUARIO NO CUMPLE CON LOS REQUISITOS';
        }
        if(RepositorioUsuario::usuario_existe($conexion, $username)) {
            return 'ESTE NOMBRE DE USUARIO YA EXISTE';
        } else {
            $this -> username = $username;
        }
        return '';
    }
    private function validarCorreo($conexion, $correo) {
        if(!$this -> variableIniciada($correo)) {
            return 'DEBE INGRESAR UN CORREO';
        }
        if(strlen($correo) > 255) {
            return 'EL CORREO EXCEDE EL LIMITE DE CARACTERES';
        }
        if(RepositorioUsuario::correo_existe($conexion, $correo)) {
            return 'ESTE CORREO YA ESTA REGISTRADO';
        } else {
            $this -> correo = $correo;
        }
        return '';
    }
    private function validarClave($pwd) {
        if(!$this -> variableIniciada($pwd)) {
            return 'DEBE INGRESAR UNA CLAVE';
        }
        if(strlen($pwd) < 6 || strlen($pwd) > 25) {
            return 'LA CONTRASEÑA NO CUMPLE CON LOS REQUISITOS';
        }
        return '';
    }
    private function validarClave2($pwd, $pwd2) {
        if(!$this -> variableIniciada($pwd2)) {
            return 'DEBE INGRESAR NUEVAMENTE LA CLAVE';
        }
        if($pwd != $pwd2) {
            return 'LAS CLAVES NO COINCIDEN';
        }
        return '';
    }
    public function registroValido() {
        if($this -> errorUsername === '' && $this -> errorCorreo === '' && $this -> errorPwd === '' && $this -> errorPwd2 === '') {
            return true;
        } else {
            return false;
        }
    }
    //SETTERS AND GETTERS
    public function getUsername() {
        return $this -> username;
    }
    public function getCorreo() {
        return $this -> correo;
    }
    public function getPwd() {
        return $this -> pwd;
    }
    public function getErrorUsername() {
        return $this -> errorUsername;
    }
    public function getErrorCorreo() {
        return $this -> errorCorreo;
    }
    public function getErrorPwd() {
        return $this -> errorPwd;
    }
    public function getErrorPwd2() {
        return $this -> errorPwd2;
    }
    public function setUsername() {
        if($this -> username !== ''){
            echo 'value="' . $this -> username . '"';
        }
    }
    public function setCorreo() {
        if($this -> correo !== ''){
            echo 'value="' . $this -> correo . '"';
        }
    }
    public function setErrorUsername() {
        if($this -> errorUsername !== '') {
            echo $this -> avisa_i . $this -> errorUsername . $this -> avisa_c;
        }
    }
    public function setErrorCorreo() {
        if($this -> errorCorreo !== '') {
            echo $this -> avisa_i . $this -> errorCorreo . $this -> avisa_c;
        }
    }
    public function setErrorPwd() {
        if($this -> errorPwd !== '') {
            echo $this -> avisa_i . $this -> errorPwd . $this -> avisa_c;
        }
    }
    public function setErrorPwd2() {
        if($this -> errorPwd2 !== '') {
            echo $this -> avisa_i . $this -> errorPwd2 . $this -> avisa_c;
        }
    }
}


?>