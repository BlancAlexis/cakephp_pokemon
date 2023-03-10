<?php

namespace App\Controller;

class CardsController extends AppController {

    public function index(){
         $this->loadComponent('Paginator');
         $cards=$this->Paginator->paginate($this->Cards->find());
         $this->set(compact('cards'));
    }

    public function addToCart($cartID){

    }
    public function click(){
        return $this->redirect('http://www.example.com');
    }
    public function add(){

    }
}
