<?php

// se incluye la clase usuario
require_once "Usuario.php";

// clase admin que hereda de usuario
class Admin extends Usuario {

    // metodo que devuelve el rol del usuario
    public function getRol() {
        return "Administrador";
    }

}