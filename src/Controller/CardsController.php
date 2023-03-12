<?php

namespace App\Controller;

class CardsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->allowUnauthenticated(['index']);
    }

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
    public function export()
    {
        $this->loadComponent('Paginator');
        $allCards = $this->Paginator->paginate($this->Cards->find('all'));
        $this->autoRender=false;
        $this->response->getBody()->write(json_encode($allCards));
        $this->response=$this->response->withDownload('card.json');

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
