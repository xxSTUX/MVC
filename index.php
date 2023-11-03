<?php
global $db;
require_once 'config/config.php';
require_once 'controllers/CreatureController.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list';
}

$controller = new CreatureController($db);

if ($action === 'list') {
    $controller->listCreatures();
} elseif ($action === 'create') {
    $controller->createCreature();
} elseif ($action === 'edit' && isset($_GET['idCreature'])) {
    $controller->editCreature($_GET['idCreature']);
} elseif ($action === 'update' && isset($_GET['idCreature'])) {
    $controller->updateCreature($_GET['idCreature']);
} elseif ($action === 'delete' && isset($_GET['idCreature'])) {
    $controller->deleteCreature($_GET['idCreature']);
} elseif ($action === 'details' && isset($_GET['idCreature'])) {
    $creatureId = $_GET['idCreature'];
    $creature = $controller->getCreatureDetails($creatureId);
    include('views/creatures/detail.php');
} else {
    echo 'Acción no válida.';
}