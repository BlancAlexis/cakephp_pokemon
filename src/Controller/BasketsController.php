<?php

namespace App\Controller;

class BasketsController
{
    public function index(){
        $this->loadComponent('Paginator');
        $cards=$this->Paginator->paginate($this->Cards->find());
        $this->set(compact('cards'));
    }

    public function delete($cartID){

    }
    public function click(){
        return $this->redirect('http://www.example.com');
    }
    public function add(){

    }
}
