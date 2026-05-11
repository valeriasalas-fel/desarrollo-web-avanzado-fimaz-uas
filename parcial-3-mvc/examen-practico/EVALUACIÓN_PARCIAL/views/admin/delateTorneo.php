<?php
// Valeria Salas Felix
    
    require_once("../../controller/torneosController.php");
    $objTorneosController = new torneosController();

    $objTorneosController->delete($_GET['id']);
    
?>