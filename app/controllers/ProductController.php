<?php
namespace app\controllers;

class ProductController extends Controller {

    public function index(){
        
        $this->view('product');
    }
    
    public function store(){

        var_dump('update product');
    }
}