<?php

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Routing\Router;
use Cake\Http\Session;

class CardsTable extends Table{
    public function initialize(array $config) : void {
        parent::initialize($config);
        $this->addBehavior('Timestamp');
    }

}

