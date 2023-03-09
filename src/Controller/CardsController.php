<?php

namespace App\Controller;

class CardsController extends AppController {

    public function index(){
         $this->loadComponent('Paginator');
s
         $cards=$this->Paginator->paginate($this->Cards->find());
         $this->set(compact('cards'));


    }
}
