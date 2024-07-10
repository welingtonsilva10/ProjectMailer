<?php
namespace app\controllers;

class LoginController extends Controller {

    public function index(){
        
        $this->view('login');
        $this->style('color');
        $this->style('standard');
        $this->style('login');
        
    }
}