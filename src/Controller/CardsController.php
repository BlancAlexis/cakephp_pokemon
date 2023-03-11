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
    public function click()
    {
        $basket = $this->request->getSession()->read('Basket') ?? [];
        $cardID = $this->request->getData('id');
        array_push($basket,$cardID);
        $this->request->getSession()->write('Basket', $basket);
        print_r($basket);
    }
    public function add(){

    }
}
