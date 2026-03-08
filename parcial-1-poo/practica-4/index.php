<?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";

$usuarios = [];
$error = "";

try {

    $usuarios[] = new Admin("Carlos Lopez", "admin@gmail.com");

    $usuarios[] = new Alumno("Ana Torres", "ana__@gmail.com", "23742923");

    $usuarios[] = new Invitado("Luis Garcia", "luis@hotmail.com", "Microsoft");

    // Usuario con correo inválido
    $usuarios[] = new Alumno("Error Usuario", "correo-malo", "A99999");

} catch (Exception $e) {

    $error = $e->getMessage();

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Usuarios</title>
</head>

<body>

<h2>Lista de Usuarios</h2>

<?php
if($error){
    echo "<p>Error controlado: $error</p>";
}
?>

<table border="1">

<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matrícula</th>
<th>Empresa</th>
</tr>

<?php foreach($usuarios as $u): ?>

<tr>

<td><?php echo $u->getNombre(); ?></td>
<td><?php echo $u->getCorreo(); ?></td>
<td><?php echo $u->getRol(); ?></td>

<td>
<?php
if(method_exists($u, "getMatricula")){
    echo $u->getMatricula();
}else{
    echo "-";
}
?>
</td>

<td>
<?php
if(method_exists($u, "getEmpresa")){
    echo $u->getEmpresa();
}else{
    echo "-";
}
?>
</td>

</tr>

<?php endforeach; ?>

</table>

</body>
</html>