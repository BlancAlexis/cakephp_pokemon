<div class="container">
    <div class="row">
        <?php
            $cpt =0;
            foreach($cards as $card):
                if($cpt != 4){
        ?>
            <div class="card col-lg pl-1">
                <div class="card-img-top img-thumbnail">
                    <?php echo '<img src="' . $card->urlPokemon . '" class="img-fluid">'; ?>
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
            <div class="card col-lg pl-1">
                <div class="card-img-top img-thumbnail">
                    <?php echo '<img src="' . $card->urlPokemon . '" class="img-fluid">'; ?>
                </div>
                <div class="card-body text-center">
                    <div class="card-text">
                        <!-- Product name-->
                        <h5 class="fw-bolder"><?= $this->Html->Link($card->namePokemon, ['action' => 'view', $card->namePokemon]) ?></h5>
                        <!-- Product price-->
                        <?= $this->Html->link($card->prix, ['action' => 'view', $card->prix]) . "€" ?>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-outline-dark mt-auto" href="#">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        <?php }endforeach;?>
        <div class="d-flex align-items-center justify-content-between mt-12">
            <?= $this->Form->create(null, ['url' => ['controller' => 'cards', 'action' => 'export']]) ?>
            <?= $this->Form->submit('Export JSON', ["class" => 'btn btn-outline-dark mt-auto']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
