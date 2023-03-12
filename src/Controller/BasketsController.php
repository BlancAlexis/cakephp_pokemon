<?php

namespace App\Controller;
use App\Model\Entity\Card;

/**
 *
 */
class BasketsController  extends AppController
{
    /**
     * @var \Cake\Datasource\RepositoryInterface|null
     */
    /**
     * @var \Cake\Datasource\RepositoryInterface|null
     */
    private $Card;


    /**
     * @var \Cake\Datasource\RepositoryInterface|null
     */


    public function initialize(): void
    {
        parent::initialize();
        $this->Card = $this->getTableLocator()->get('Cards');
    }

    public function supp()
    {
        $basket = $this->request->getSession()->read('Basket');
        $cardID = $this->request->getData('id');
        $temp = $basket[$cardID];
        if (--$temp == 0) {
            $this->redirect(['action' => 'index']);
        } else {
            $basket[$cardID]--;
            $this->request->getSession()->write('Basket', $basket);
            $this->redirect($this->referer());
        }
    }

    public function ajout()
    {
        $basket = $this->request->getSession()->read('Basket');
        $cardID = $this->request->getData('id');
/*        $temp=$basket[$cardID];
        if (++$temp > $this->Card->stock) {
            echo 'Aucune autre carte de disponible';
        } else {*/
            $basket[$cardID]++;
            $this->request->getSession()->write('Basket', $basket);
            $this->redirect($this->referer());
        }
  //  }


    public function index()
    {
        $baskets = $this->request->getSession()->read('Basket');
        if ($baskets) {
            $key_baskets = array_keys($baskets);
            $tabCards = array();
            foreach ($key_baskets as $key) {
                $cards = $this->Card->get($key);
                array_push($tabCards, $cards);

            }
            $this->set(compact('baskets'));
            $this->set(compact('tabCards'));
        } else {
            $this->redirect(['action' => 'emptyBasket']);
        }
    }

}
