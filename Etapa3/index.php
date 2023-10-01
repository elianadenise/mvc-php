<?php
include_once("config/Configuracion.php");
$configuracion = new Configuracion();

$router = $configuracion->getRouter();

$vista = isset($_GET["vista"]) ? $_GET["vista"] : "home" ;
$method = isset($_GET["method"]) ? $_GET["method"] : "listar";

$router->route($vista, $method);

/*switch ($vista) {
    case "songs":
        $controller = $configuracion->getCancionesController();
        $controller->listar();
        break;
    case "tours":
        $controller = $configuracion->getPresentacionesController();
        $controller->listar();
        break;
    default:
        $controller = $configuracion->getHomeController();
        $controller->listar();
        break;
}
*/