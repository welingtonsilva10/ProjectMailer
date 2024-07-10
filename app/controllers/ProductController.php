<?php
namespace app\controllers;

class ProductController extends Controller {

    public function index(){
        
        $this->view('product');
        $this->style('color');
        $this->style('standard');
        $this->style('product');
    }
    
    public function store(){

        var_dump('update product');
    }
}