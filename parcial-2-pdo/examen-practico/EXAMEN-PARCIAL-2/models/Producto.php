<?php
namespace App\Models;

// Valeria Salas Felix 3-03

class Producto {
    private $id;
    private $nombre;
    private $descripcion;
    private $existencia;
    private $precio;

    public function __construct($id = null, $nombre = "", $descripcion = "", $existencia = 0, $precio = 0.00) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->existencia = $existencia;
        $this->precio = $precio;
    }

    // Getter y Setter para ID
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    // Getter y Setter para Nombre
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Getter y Setter para Descripción
    public function getDescripcion() {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    // Getter y Setter para Existencia
    public function getExistencia() {
        return $this->existencia;
    }
    public function setExistencia($existencia) {
        $this->existencia = $existencia;
    }

    // Getter y Setter para Precio
    public function getPrecio() {
        return $this->precio;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
}
