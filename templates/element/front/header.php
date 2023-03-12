<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">PokeShop</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a href="/" class="nav-link">Accueil</a>
        </li>
        <li class="nav-item">
            <?php echo $this->Html->link('Ajouter Carte', ['controller' => 'Cards', 'action' => 'add'], ['escapeTitle' => false, 'class' => 'nav-link']);?>
        </li>
        <li class="nav-item">
        <?php echo $this->Html->link('Panier', ['controller' => 'Baskets', 'action' => 'index'], ['escapeTitle' => false, 'class' => 'nav-link']);?>
        </li>
        <li class="nav-item">
        <?php 
            //echo $this->Auth->user('email');
            echo $this->Html->link('Connexion ', ['controller' => 'Users', 'action' => 'login'], ['escapeTitle' => false, 'class' => 'nav-link']);
        ?>
        <h4 class="centered" style="color: white;">
        </li>
        <li class="nav-item">
        <h4 class="nav-link">
            <?php
                $username = $this->Identity->get('email');
                echo (isset($username) ? $username : "Non connecté");
            ?>
        </h4>
        </li>
        </ul>
    </div>
</nav>
</header>
