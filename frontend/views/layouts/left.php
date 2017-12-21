<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Joel Salgado</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Inicio', 'icon' => 'home', 'url' => ['/']],
                    ['label' => 'Solicitante', 'url' => ['/metadato'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Solicitantes',
                        'icon' => 'group',
                        'url' => 'metadato',
                        'items' => [
                            ['label' => 'Solicitante', 'icon' => 'group', 'url' => ['/metadato/index'],],
                            ['label' => 'Nuevo Solicitante', 'icon' => 'plus-square-o', 'url' => ['/metadato/municipio'],]
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
