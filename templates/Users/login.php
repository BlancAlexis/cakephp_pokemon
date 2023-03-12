<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-md-12">
                <section class="task-panel tasks-widget">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h5><i class="fa fa-tasks"></i> Créer un compte</h5>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                        <div class="task-content">
                            <?php echo $this->Form->create(null, ['type' => 'post', 'class' => "form-horizontal style-form", 'enctype'=>'multipart/form-data']); ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="email">Email</label>
                                <div class="col-sm-10">
                                    <?php
                                    echo $this->Form->control('title', [
                                        'label' => false,
                                        "class" => "form-control",
                                        "name" => "email",
                                        "id" => "email"
                                    ]);
                                    ?>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label" for="password">Mot de passe</label>
                                    <div class="col-sm-10">
                                        <?php
                                        echo $this->Form->control('title', [
                                            'label' => false,
                                            "class" => "form-control",
                                            "name" => "password",
                                            "id" => "password",
                                            "type" => "password"
                                        ]);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right">
                                <?php
                                echo $this->Form->button('Login', ['type' => 'submit', 'class' => 'btn btn-primary']);
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
