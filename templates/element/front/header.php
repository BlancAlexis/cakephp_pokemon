<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">PokeShop</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Carte</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ajouter Carte</a>
        </li>
        <li class="nav-item">
          <?php echo $this->Html->link("panier",['url'=> ['controller'=> 'Baskets', 'action' => 'index' , ['class'=> 'nav-link text-danger' ]]]); ?>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Connexion</a>
        </li>
        </ul>
    </div>
</nav>
</header>
