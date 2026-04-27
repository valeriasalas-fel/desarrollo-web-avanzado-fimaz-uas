<?php

// clase base usuario
class Usuario {

    // atributos protegidos
    protected $nombre;
    protected $correo;

    // constructor de la clase
    public function __construct($nombre, $correo) {

        // validacion del formato del correo
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("el correo '$correo' no es valido");
        }

        // asignacion de valores
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    // metodo para obtener el nombre
    public function getNombre() {
        return $this->nombre;
    }

    // metodo para obtener el correo
    public function getCorreo(){
        return $this->correo;
    }

}