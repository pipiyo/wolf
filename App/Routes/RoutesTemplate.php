<?php
namespace App\Routes;



class RoutesTemplate
{
    protected $router;
    protected $loader;
    protected $twig;
    protected $template;

    public function __construct()
    {
        
        $this->router = new \Bramus\Router\Router();
        $this->loader = new \Twig_Loader_Filesystem('Resources/Views');
        $this->twig = new \Twig_Environment($this->loader);

    }

/*
    protected function render($view, $array)
    {
        echo $this->twig->render($view, $array);
    }
*/


}
