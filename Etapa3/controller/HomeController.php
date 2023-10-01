<?php
class HomeController
{

    private $render;

    public function __construct($render)
    {
        $this->render = $render;
    }

    public function listar()
    {
        $this->render->printView("home");
    }
}