<?php
namespace app\controllers;

class ContactController extends Controller {

    public function index(){
        
        $this->view('contact');
        $this->style('color');
        $this->style('standard');
        $this->style('contact');
    }
    
    public function store(){

        var_dump('Enviado');
    }
}