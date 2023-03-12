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


    public function initialize(): void {
        parent::initialize();
        $this->card = $this->getTableLocator()->get('Cards');
    }

    public function index(){
        $baskets=$this->request->getSession()->read('Basket');
        if($baskets){
            $tabCards=array();
            foreach ($baskets as $basketID){
                $cards=$this->card->get($basketID);
                array_push($tabCards, $cards);
            }
            $this->set(compact('baskets'));
            $this->set(compact('tabCards'));
        }else{

            echo "Panier vide";
        }
    }

    public function delete($cartID){

    }

    public function add(){

    }
}
