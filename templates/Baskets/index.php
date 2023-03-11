<div class="card col-lg pl-1">
    <div class="card-img-top img-thumbnail">
        <?php foreach($tabCards as $cards): ?>

        <?= $this->Html->image($cards->urlPokemon, array('class' => 'img-fluid')) ?>
    </div>
    <div class="card-body text-center">
        <div class="card-text">
            <!-- Product name-->
            <h5 class="fw-bolder"><?php echo $cards->namePokemon?></h5>

            <?php echo $cards->prix."€" ?>
        </div>
    </div>
    <?php endforeach; ?>

</div>
