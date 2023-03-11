<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-md-12">
                <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h5><i class="fa fa-tasks"></i> Ajouter une carte</h5>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="task-content">
                            <?php echo $this->Form->create(null, ['type' => 'post', 'class' => "form-horizontal style-form", 'enctype'=>'multipart/form-data']); ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputName">Nom du Pokemon</label>
                                <div class="col-sm-10">
                                    <?php
                                    echo $this->Form->control('title', [
                                        'label' => false,
                                        "class" => "form-control",
                                        "name" => "namePokemon",
                                        "id" => "inputName"
                                    ]);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputSelect">Type primaire du pokemon</label>
                                <div class="col-sm-10">
                                    <?php
                                    $types = [
                                        "Acier" => "Acier",
                                        "Combat" => "Combat",
                                        "Dragon" => "Dragon",
                                        "Eau" => "Eau",
                                        "Electrique" => "Electrique",
                                        "Fée" => "Fée",
                                        "Feu" => "Feu",
                                        "Glace" => "Glace",
                                        "Insecte" => "Insecte",
                                        "Normal" => "Normal",
                                        "Plante" => "Plante",
                                        "Poison" => "Poison",
                                        "Psy" => "Psy",
                                        "Roche" => "Roche",
                                        "Sol" => "Sol",
                                        "Spectre" => "Spectre",
                                        "Tenèbres" => "Tenèbres",
                                        "Vol" => "Vol",
                                        "Inconnu" => "Inconnu",
                                        "Obscur" => "Obscur",
                                    ];

                                    echo $this->Form->select('types', $types, [
                                        'default' => '1',
                                        'id' => 'type1Pokemon',
                                        'class' => 'form-control',
                                        'name' => 'type1Pokemon',
                                        'label' => false,
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputSelect">Type secondaire du pokemon</label>
                                <div class="col-sm-10">
                                    <?php
                                    $types = [
                                        "Acier" => "Acier",
                                        "Combat" => "Combat",
                                        "Dragon" => "Dragon",
                                        "Eau" => "Eau",
                                        "Electrique" => "Electrique",
                                        "Fée" => "Fée",
                                        "Feu" => "Feu",
                                        "Glace" => "Glace",
                                        "Insecte" => "Insecte",
                                        "Normal" => "Normal",
                                        "Plante" => "Plante",
                                        "Poison" => "Poison",
                                        "Psy" => "Psy",
                                        "Roche" => "Roche",
                                        "Sol" => "Sol",
                                        "Spectre" => "Spectre",
                                        "Tenèbres" => "Tenèbres",
                                        "Vol" => "Vol",
                                        "Inconnu" => "Inconnu",
                                        "Obscur" => "Obscur",
                                    ];

                                    echo $this->Form->select('types', $types, [
                                        'default' => '1',
                                        'id' => 'type2Pokemon',
                                        'class' => 'form-control',
                                        'name' => 'type2Pokemon',
                                        'label' => false,
                                    ]);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label" for="inputPrice">Prix de la carte</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo $this->Form->control('title', [
                                            'label' => false,
                                            "class" => "form-control",
                                            "name" => "prix",
                                            "id" => "inputPrice",
                                            "type" => "number"
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label" for="urlPokemon">Image de la carte</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo $this->Form->control('title', [
                                            'label' => false,
                                            "class" => "form-control",
                                            "name" => "urlPokemon",
                                            "id" => "urlPokemon",
                                            "type" => "file"
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right">
                                <?php
                                echo $this->Form->button('Enregistrer', ['type' => 'submit', 'class' => 'btn btn-primary']);
                                ?>
                            </div>
                            <?= $this->Form->end();?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
