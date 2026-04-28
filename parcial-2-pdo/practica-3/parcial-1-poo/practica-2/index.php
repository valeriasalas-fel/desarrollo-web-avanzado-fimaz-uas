<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";

try {

    echo "<h3>Creando Admin válido</h3>";

    $admin = new Admin("Valeria", "vaalriasal@gmail.com");

    echo "Nombre: " . $admin->getNombre() . "<br>";
    echo "Correo: " . $admin->getCorreo() . "<br>";
    echo "Rol: " . $admin->getRol() . "<br><br>";


    echo "<h3>Creando Alumno valido</h3>";

    $alumno = new Alumno("Rossy Nallely", "rossyNay@gmail.com", "2514789");

    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Correo: " . $alumno->getCorreo() . "<br>";
    echo "Matrícula: " . $alumno->getMatricula() . "<br>";
    echo "Rol: " . $alumno->getRol() . "<br><br>";


    echo "<h3>Probando correo invalido</h3>";

    $usuarioError = new Admin("Pedro", "pedro_fimazgamil.com");

} catch (Exception $e) {

    echo "<b>Error:</b> " . $e->getMessage();

}

?>