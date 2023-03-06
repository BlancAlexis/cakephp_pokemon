<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-md-12">
                <section class="task-panel tasks-widget">
                    <div class="panel-body">
                        <div class="task-content">
                            <ul class="task-list">
                                <?php

                                foreach ($cards as $card) :
                                    ?>
                                   <li><?=$card['namePokemon']?></li>
                                <?php
                                endforeach;
                                ?>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /col-md-12-->
        </div>
    </section>
    <!-- /wrapper -->
</section>
<!--main content end-->
