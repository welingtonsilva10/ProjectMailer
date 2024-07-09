<?php
namespace app\controllers;

use League\Plates\Engine;

abstract class Controller{


    public function view(string $view, array $data = []){

        $pathViews = dirname(__file__,2).DIRECTORY_SEPARATOR.'views';
        $templates = new Engine($pathViews);
        echo $templates->render($view, ['name' => $data]);

    }
    public function style(string $style, array $data = []){

        $pathStyle = dirname(__file__,3).DIRECTORY_SEPARATOR.'assets/css';
        $templates = new Engine($pathStyle);
        echo $templates->render($style, ['name' => $data]);
        
    }
    
}