<?php
require_once 'autoload.php';
session_start();

$action = $_GET['action'] ?? 'listar';

$controller = new Controller();

switch ($action) {
    case 'nuevo':
        $controller->mostrarFormulario();
        break;
    case 'guardar':
        $controller->guardar();
        break;
    case 'eliminar':
        $controller->eliminar();
        break;
    default:
        $controller->listar();
        break;
}
?>