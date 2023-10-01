<?php

class CancionesController
{

    private $model;
    private $render;

    public function __construct($model, $render)
    {
        $this->model = $model;
        $this->render = $render;
    }

    public function listar()
    {
        $datos["canciones"] = $this->model->getCanciones();
        $this->render->printView("canciones", $datos);
    }
}