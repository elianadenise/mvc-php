<?php
class MustacheRender
{
    private $mustache;

    public function __construct(){
        Mustache_Autoloader::register();
        $this->mustache = new Mustache_Engine(
            array(
                'partials_loaders' => new Mustache_Loader_FilesystemLoader("/")
            )
        );
    }

    public function printView($contenido, $datos = null){
        echo $this->generateHTML($contenido, $datos);
    }

    private function generateHTML($contentFile, $data = array())
    {
        $contentAsString = file_get_contents('view/headerView.mustache');
        $contentAsString .= file_get_contents('view/'. $contentFile . 'View.mustache');
        $contentAsString .= file_get_contents('view/footerView.mustache');
        return $this->mustache->render($contentAsString, $data);

    }


}