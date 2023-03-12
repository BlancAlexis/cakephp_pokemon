<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <img src="img/404.jpg" alt="" width="500">
        <h1 class="display-1 fw-bold">Plantage</h1>
        <p class="fs-3"> <span class="text-danger">Opps!</span> Rien à afficher ici.</p>
        <p class="lead">
            Votre panier est vide!
        </p>
        <?php echo $this->Html->link('Go home', ['controller' => 'Cards', 'action' => 'index'], ['escapeTitle' => false, 'class' => 'btn btn-primary']);?>
    </div>
</div>
