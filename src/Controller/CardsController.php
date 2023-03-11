<?php

namespace App\Controller;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

class CardsController extends AppController {

    public function index(){
         $this->loadComponent('Paginator');
         $cards=$this->Paginator->paginate($this->Cards->find());
         $this->set(compact('cards'));
    }

    public function addToCart($cartID){

    }

    public function add(){
        if (!empty($this->request->getData())) {
            $cards = $this->Cards->newEmptyEntity();
            $cards = $this->Cards->patchEntity($cards, $this->request->getData());
            $cards->stock = 1;
            $img = $this->request->getUploadedFile('urlPokemon');
            $cards->urlPokemon = '/img/' . $img->getClientFilename();
            if ($this->Cards->save($cards)) {
                $this->Flash->success('La carte a bien été crée');
                if($img != null){
                    $uploadPath = WWW_ROOT . '/img/';
                    $destination = $uploadPath . $img->getClientFilename();
                    $img->moveTo($destination);
                }
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error($cards);
            }
        }
        return;
    }

}
