<?php

include "Admin.php";

$admin = new Admin("Valeria", "vaalria@gmail.com");

echo "Nombre: " . $admin->getNombre();
echo "<br>";
echo "Correo: " . $admin->getCorreo();
echo "<br>";
echo "Rol: " . $admin->getRol();

?>