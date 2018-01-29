<aside class="main-sidebar">

    <section class="sidebar">
        

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
