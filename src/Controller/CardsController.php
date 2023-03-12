<?php

namespace App\Controller;

class CardsController extends AppController
{

    public function index()
    {
        $this->loadComponent('Paginator');
        $cards = $this->Paginator->paginate($this->Cards->find());
        $this->set(compact('cards'));
    }


    public function click()
    {
        $basket = $this->request->getSession()->read('Basket') ?? [];
        $cardID = $this->request->getData('id');
        if(array_key_exists($cardID, $basket)) {
            $basket[$cardID]++;
            $this->request->getSession()->write('Basket', $basket);
        } else {
            $basket[$cardID]=1;
            $this->request->getSession()->write('Basket', $basket);

        }
        $this->redirect($this->referer());
    }
}
