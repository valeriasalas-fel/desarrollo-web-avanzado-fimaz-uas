<?php

include "Usuario.php";

// crear objeto
$usuario = new Usuario("Valeria", "valeria@email.com");

// mostrar datos
echo "Nombre: " . $usuario->getNombre();
echo "<br>";
echo "Correo: " . $usuario->getCorreo();

?>