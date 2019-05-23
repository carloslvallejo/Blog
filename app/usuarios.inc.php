<?php

class Usuarios {
    private $id;
    private $username;
    private $correo;
    private $pwd;
    private $estado;

    public function __construct($id, $username, $correo, $pwd, $estado) {
        $this -> id = $id;
        $this -> username = $username;
        $this -> correo = $correo;
        $this -> pwd = $pwd;
        $this -> estado = $estado;

    }
    public function getId() {
        return $this -> id;
    }
    public function getUsername() {
        return $this -> username;
    }
    public function getCorreo() {
        return $this -> correo;
    }
    public function getPwd() {
        return $this -> pwd;
    }
    public function getEstado() {
        return $this -> estado;
    }
    public function setId($id) {
        return $this -> id = $id;
    }
    public function setUsername($username) {
        return $this -> username = $username;
    }
    public function setCorreo($correo) {
        return $this -> correo = $correo;
    }
    public function setPwd($pwd) {
        return $this -> pwd = $pwd;
    }
    public function setEstado($estado) {
        return $this -> estado = $estado;
    }
}
?>