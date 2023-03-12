<div class="container py-5">

    <!-- For demo purpose -->

    <!-- End -->

    <div class="row">
        <div class="col-lg-8 mx-auto">

            <!-- List group-->
            <ul class="list-group shadow">
                <?php foreach($tabCards as $cards): ?>
                <!-- list group item-->
                <li class="list-group-item">
                    <!-- Custom content-->
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                            <h5 class="mt-0 font-weight-bold mb-2"><?php echo $cards->namePokemon?></h5>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6 class="font-weight-bold my-2"><?php echo $cards->prix."€" ?></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6 class="font-weight-bold my-2"><?php echo "Stock : ".$cards->stock?></h6>
                            </div>
                           <!-- <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6 class="font-weight-bold my-2"><?php /*echo "Quantité demandé : ".$basket[1]++;*/?></h6>
                            </div>-->
                        </div>
                    </div>
                        <div class="col-lg-4 mx-auto">
                        <?= $this->Html->image($cards->urlPokemon, array('class' => 'img-fluid', 'width'=>'200px')) ?>
                    </div>

                    <!-- End -->
                </li>
                <!-- End -->
                <?php endforeach; ?>

            </ul>
            <!-- End -->
        </div>
    </div>
</div>
