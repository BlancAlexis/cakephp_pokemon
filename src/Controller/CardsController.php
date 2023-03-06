<?php

namespace App\Controller;

class CardsController extends AppController
{
    public function listing(){

        $cards = $this->Cards->find()->order(['created' => 'DESC'])->all();
        $this->set(compact('cards'));
    }

    public function new() {

        if (!empty($this->request->getData())) {
            $card = $this->Cards->newEmptyEntity();
            $card = $this->Cards->patchEntity($card, $this->request->getData());
            if ($this->Cards->save($card)) {
                $this->Flash->success('Le ticket a bien été crée');
                return $this->redirect(['action' => 'listing']);
            } else {
                $this->Flash->error('Le ticket n\'a pas pu être crée');
            }
        }
        return;
    }

}
