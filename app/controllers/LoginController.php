<?php
namespace app\controllers;

class LoginController extends Controller {

    public function index(){
        
        $this->view('login');
    }
}