<?php
include_once ("helper/Database.php");
include_once ("helper/Render.php");
include_once ("helper/MustacheRender.php");
include_once ("helper/Router.php");

include_once ("controller/HomeController.php");
include_once ("controller/PresentacionesController.php");
include_once ("controller/CancionesController.php");

include_once ("model/CancionesModel.php");
include_once ("model/PresentacionesModel.php");

include_once ("third-party/mustache/src/Mustache/Autoloader.php");

class Configuracion
{
    public function __construct()
    {
    }

    public function getDatabase()
    {
        $config = parse_ini_file("configuracion.ini");
        $database = new Database(
            $config["servername"],
            $config["username"],
            $config["password"],
            $config["dbname"]
        );
        return $database;
    }

    public function getRender()
    {
        //return new Render("view/headerView.mustache", "view/footerView.mustache");
        return new MustacheRender();
    }

    public function getCancionesController()
    {
        $cancionesModel = new CancionesModel($this->getDatabase());
        return new CancionesController($cancionesModel, $this->getRender());
    }

    public function getPresentacionesController()
    {
        $presentacionesModel = new PresentacionesModel($this->getDatabase());
        return new PresentacionesController($presentacionesModel, $this->getRender());
    }

    public function getHomeController()
    {
        return new HomeController($this->getRender());
    }

    public function getRouter()
    {
        return new Router($this, "getHomeController", "list");
    }
}