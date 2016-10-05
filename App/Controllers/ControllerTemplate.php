<?php
namespace App\Controllers;

class ControllerTemplate
{
        private $loader;
        private $twig;

    public function __construct()
    {

        $this->loader = new \Twig_Loader_Filesystem('Resources/Views');
        $this->twig = new \Twig_Environment($this->loader);

    }

    public function render($path, $array = array())
    {
        echo $this->twig->render($path, $array);
    }

}
