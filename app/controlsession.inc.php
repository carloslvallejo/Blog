<?php

class ControlSesion {

    public static function iniciar_sesion($id, $username) {
        if(session_id() == '') {
            session_start();
        }
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
    }
    public static function cerrar_sesion() {
        if(session_id() == '') {
            session_start();
        }
        if(isset($_SESSION['id'])) {
            unset($_SESSION['id']);
        }
        if(isset($_SESSION['username'])) {
            unset($_SESSION['username']);
        }
        session_destroy();
    }
    public static function sesion_iniciada() {
        if(session_id() == '') {
            session_start();
        }
        if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
            return true;
        } else {
            return false;
        }
    }
}
?>