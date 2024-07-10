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
        $templates = new Engine($pathStyle,'css');
        echo '<style>'.$templates->render($style, ['name' => $data]).'</style>';
        
    }
    public function script(string $script, array $data = []){

        $pathScript = dirname(__file__,3).DIRECTORY_SEPARATOR.'assets/script';
        $templates = new Engine($pathScript,'js');
        echo $templates->render($script, ['name' => $data]);

    }
    // public function image(string $image, array $data = []){

    //     $pathImage = dirname(__file__,3).DIRECTORY_SEPARATOR.'assets/images';
    //     $templates = new Engine($pathImage,'svg');
    //     echo $templates->render($image, ['name' => $data]);

    // }
    
}