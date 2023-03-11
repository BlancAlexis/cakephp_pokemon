<div class="container">
    <div class="row">
        <?php
            $cpt =0;
            foreach($cards as $card):
                if($cpt != 4){
        ?>
            <div class="card col-lg pl-1">
                <div class="card-img-top img-thumbnail">
                    <?= $this->Html->image($card->urlPokemon, array('class' => 'img-fluid')) ?>
                </div>
                <div class="card-body text-center">
                    <div class="card-text">
                        <!-- Product name-->
                       <h5 class="fw-bolder"><?php echo $card->namePokemon?></h5>

                        <?php echo $card->prix."€" ?>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <?= $this->Form->create(null, ['url' => ['controller' => 'Cards', 'action' => 'click']]) ?>
                        <?= $this->Form->hidden('id', ['value' => $card->id]) ?>
                        <?= $this->Form->submit('Ajouter au panier', ["class" => 'btn btn-outline-dark mt-auto']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
            <?php $cpt++;}else{$cpt=0; ?>
            <div class="w-100"></div>
        <?php }endforeach;?>
    </div>
</div>
