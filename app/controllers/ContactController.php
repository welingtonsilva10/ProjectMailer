<?php
namespace app\controllers;

class ContactController extends Controller {

    public function index(){
        
        $this->view('contact');
        $this->style('standard');
    }
    
    public function store(){

        var_dump('Enviado');
    }
}