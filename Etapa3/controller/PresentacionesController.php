<?php

class PresentacionesController
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
        $datos["presentaciones"] = $this->model->getPresentaciones();
        $this->render->printView("presentaciones", $datos);
    }

    public function alta()
    {
        $this->render->printView("altaPresentaciones");
    }
}