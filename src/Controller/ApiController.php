<?php

namespace App\Controller;

class ApiController extends AppController
{
/*    public function index()
    {
        $this->loadModel(Cards);
        $allCards = $this->Cards->find('all')->toArray();
        $this->set(['cards' => $allCards,
            '_serialize' => ['cards']
        ]);
    }*/
    private $Cards;
    public function initialize(): void {
        parent::initialize();
        $this->Cards = $this->getTableLocator()->get('Cards');
    }


    public function index()
    {
        $datas = $this->Cards->find()->all();

        $this->set(['cards' => $datas]);
        $this->viewBuilder()->setOption('serialize', true);
        $this->RequestHandler->renderAs($this, 'json');

    }

    public function viewClasses(): array
    {
        return [JsonView::class];
    }

}
