<?php
include_once 'repositorioUsuario.inc.php';
class ValidarLogin {

    private $usuario;
    private $error;
    private $avisa_i;
    private $avisa_c;

    public function __construct($username, $pwd, $conexion) {
        $this -> avisa_i = '<br><div class="alert alert-danger" role="alert">';
        $this -> avisa_c = '</div>';
        $this -> error = '';

        if(!$this -> variable_iniciada($username) || !$this -> variable_iniciada($pwd)) {
            $this -> usuario = null;
            $this -> error = 'DEBE INGRESAR LOS DATOS';
        } else {
            $this -> usuario = RepositorioUsuario::obtener_usuario($conexion, $username);
            if(is_null($this -> usuario) || !password_verify($pwd, $this -> usuario -> getPwd())) {
                $this -> error = 'DATOS INCORRECTOS';
            }
        }
    }
    private function variable_iniciada($var) {
        if(isset($var) && !empty($var)) {
            return true;
        } else {
            return false;
        }
    }
    public function getUsuario() {
        return $this -> usuario;
    }
    public function getError() {
        return $this -> error;
    }
    public function setError() {
        if($this -> error !== '') {
            echo $this -> avisa_i . $this -> error . $this -> avisa_c;
        }
    }
}
?>