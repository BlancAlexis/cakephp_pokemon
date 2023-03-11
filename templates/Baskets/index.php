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

</div>
