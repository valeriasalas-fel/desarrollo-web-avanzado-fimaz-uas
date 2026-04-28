<?php

// se incluye la clase usuario
require_once "Usuario.php";

// clase alumno que hereda de usuario
class Alumno extends Usuario {

    // atributo adicional matricula
    private $matricula;

    // constructor del alumno
    public function __construct($nombre, $correo, $matricula) {

        // se llama al constructor de la clase padre
        parent::__construct($nombre, $correo);

        // se asigna la matricula
        $this->matricula = $matricula;
    }

    // metodo para obtener la matricula
    public function getMatricula() {
        return $this->matricula;
    }

    // metodo que devuelve el rol
    public function getRol() {
        return "alumno";
    }

}