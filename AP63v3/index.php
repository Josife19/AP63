<?php
require_once "autoload.php";
session_start();


$gestor=new GestorPublicacion();

$controller = new PublicacionController($gestor);

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case "crear":
        $controller->crear();
        break;
    case 'editarLibro':
        $controller->editarLibro();
        break;
    case 'editarRevista':
        $controller->editarRevista();
        break;
    case "eliminar":
        $controller->eliminar();
        break;
    default:
        $controller->index();
} 