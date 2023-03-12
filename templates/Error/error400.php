<div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <img src="img/404.jpg" alt="" width="500">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                <p class="lead">
                    The page you’re looking for doesn’t exist.
                  </p>
                <?php echo $this->Html->link('Go home', ['controller' => 'Cards', 'action' => 'index'], ['escapeTitle' => false, 'class' => 'btn btn-primary']);?>
            </div>
        </div>