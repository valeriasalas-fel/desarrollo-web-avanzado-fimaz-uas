<?php

// se cargan las clases
require_once "clases/Admin.php";
require_once "clases/Alumno.php";

// arreglo donde se guardaran los usuarios
$usuarios = [];

$error = "";

try {

    // creacion de un administrador valido
    $admin = new Admin("Valeria Salas ", "valeriasalas@gmail.com");
    $usuarios[] = $admin;

    // creacion de alumno valido
    $alumno = new Alumno("Rossy Nallely", "rossynallely@gmail.com", "20509530");
    $usuarios[] = $alumno;

     $alumno = new Alumno("Arleth de los Angeles", "arlethgonzal@gmail.com", "20509538");
    $usuarios[] = $alumno;

    // usuario con correo invalido 
    $usuarioError = new Alumno("Valeria Jaqueline", "valeriajaquegamil.com", "20509534");

} catch (Exception $e) {

    // captura del error
    $error = $e->getMessage();

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Lista de usuarios</title>
</head>

<body>

<h2>Lista de usuarios</h2>

<table border="1">

<tr>
<th>nombre</th>
<th>correo</th>
<th>rol</th>
<th>matricula</th>
</tr>

<?php foreach ($usuarios as $u) { ?>

<tr>

<td><?php echo $u->getNombre(); ?></td>

<td><?php echo $u->getCorreo(); ?></td>

<td><?php echo $u->getRol(); ?></td>

<td>
<?php

if ($u instanceof Alumno) {
    echo $u->getMatricula();
} else {
    echo "-";
}
?>
</td>

</tr>

<?php } ?>

</table>

<br>

<?php

if ($error) {
    echo "error detectado: " . $error;
}
?>

</body>
</html>