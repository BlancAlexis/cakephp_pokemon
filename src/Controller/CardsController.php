<?php

namespace App\Controller;

class CardsController extends AppController {

    public function index(){
         $this->loadComponent('Paginator');
         $cards=$this->Paginator->paginate($this->Cards->find());
         $this->set(compact('cards'));
    }


    public function click()
    {
        $basket = $this->request->getSession()->read('Basket') ?? [];
        $cardID = $this->request->getData('id');
        if (in_array($cardID, $basket)) {
            $key = array_search($cardID, $basket);
            $basket[$key]++;
        }
        else {
            array_push($basket, $cardID);
            $this->request->getSession()->write('Basket', $basket);

        }
        $this->redirect($this->referer());
    }

}
