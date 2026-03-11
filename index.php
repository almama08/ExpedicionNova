<?php
require_once 'autoload.php';
session_start();

$action = $_GET['action'] ?? 'listar';

$controller = new Controller();

switch ($action) {
    case 'mostrarFormulario':
        $controller->mostrarFormulario();
        break;
    case 'guardarVida':
        $controller->guardarVida();
        break;
    case 'guardarMineral':
        $controller->guardarMineral();
        break;
    case 'guardarArtefacto':
        $controller->guardarArtefacto();
        break;
    case 'eliminar':
        $controller->eliminar();
        break;
    case 'listar':
    default:
        $controller->listar();
        break;
}
?>