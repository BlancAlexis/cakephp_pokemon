<?php

namespace App\Controller;

class BasketsController  extends AppController
{
    public function index(){
        $baskets=$this->request->getSession()->read('Basket');
        if($baskets){
            foreach ($baskets as $basketID){
                $cards=$this->Cards->get($basketID);
                $this->set(compact('cards'));
            }

        }else{
            echo "Panier vide";
        }
    }

    public function delete($cartID){

    }

    public function add(){

    }
}
