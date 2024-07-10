<?php
namespace app\Controllers;

class RegisterController extends Controller {

    public function index(){

        $this->view('register');
        $this->style('color');
        $this->style('standard');
        $this->style('register');
    }
}