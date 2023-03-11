<?php

namespace App\Controller;

class BasketsController
{
    public function index(){
        $baskets=$this->getSession()->read('Basket');
        if($baskets){
            foreach ($baskets as $basket){
                $this->set(compact('baskets'));
            }

        }else{
            echo "Panier vide";
        }
    }

    public function delete($cartID){

    }
    public function click(){
        return $this->redirect('http://www.example.com');
    }
    public function add(){

    }
}
