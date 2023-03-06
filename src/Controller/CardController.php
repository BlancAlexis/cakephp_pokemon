<?php

namespace App\Controller;

class CardController extends AppController {

    public function index(){
   $cards=this->paginate($this->Card->find());
   $this->set(compact('cards'));
    }
}
