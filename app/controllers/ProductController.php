<?php
namespace app\controllers;

class ProductController extends Controller {

    public function index(){
        
        $this->view('product');
        $this->style('standard');
    }
    
    public function store(){

        var_dump('update product');
    }
}