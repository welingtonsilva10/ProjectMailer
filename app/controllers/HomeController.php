<?php
namespace app\controllers;

class HomeController extends Controller {

    public function index(){
        
        $this->view('home');
        $this->style('color');
        $this->style('standard');
        $this->style('home');
    }
}