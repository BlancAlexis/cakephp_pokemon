<div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <img src="img/500.webp" alt="" width="500">
                <h1 class="display-1 fw-bold">500</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Server Error.</p>
                <p class="lead">
                    It's not you, it's me.
                  </p>
                <?php echo $this->Html->link('Go home', ['controller' => 'Cards', 'action' => 'index'], ['escapeTitle' => false, 'class' => 'btn btn-primary']);?>
            </div>
        </div>