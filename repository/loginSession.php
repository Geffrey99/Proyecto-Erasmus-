<?php 

class Sesion {

    public function inicia_sesion() {
        session_start();
    }

    public function guarda_session($clave, $valor) {
        $_SESSION[$clave] = $valor;
    }

    public function cierra_sesion() {
        session_destroy();
    }

    public function estaLogeado() {
        return isset($_SESSION['nombre']);
    }

    public function comprobar($clave) {
        if(empty($clave)) {
            return "";
        } else {
            return isset($_SESSION[$clave]) ? $_SESSION[$clave] : "";
        }
    }

    public function login($nombre) {
        $this->inicia_sesion();
        $this->guarda_session('nombre', $nombre);
    }
}





// public function __construct()
// {
//     session_start();
// }

// public function setCurrentUser($user){
//     $_SESSION['user']=$user;
// }

// public function getCurrentUser(){
//     return $_SESSION['user'];

// }

// public function closeSession(){
//     session_unset(); //borra el valor de la session 
//     session_destroy(); //destruye la session 
// }
?>
