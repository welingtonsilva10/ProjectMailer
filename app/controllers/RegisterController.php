<?php
namespace app\Controllers;

class RegisterController extends Controller {

    public function index(){

        $this->view('register');
        $this->style('standard');
        $this->style('register');
    }
}