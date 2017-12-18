<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            
        </div>

        <!-- search form -->
        
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Usuarios','icon' => ' fa-odnoklassniki', 'url' => ['/usuario']],
                    [
                        'label' => 'Grifos',
                        'icon' => ' fa-map-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Agregar grifo', 'icon' => ' fa-map-o', 'url' => ['/grifo/create'],],
                            ['label' => 'Listar grifos', 'icon' => ' fa-map-o', 'url' => ['/grifo'],],
                            ['label' => 'Ver grifos', 'icon' => ' fa-map-o', 'url' => ['/grifo/milista'],],
                            ],
                    ],
                    ['label' => 'Voluntarios', 'icon' => ' fa-odnoklassniki','url' => ['/voluntario']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Emergencias',
                        'icon' => ' fa-warning',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Agregar emergencia', 'icon' => ' fa-truck', 'url' => ['/emergencia/create'],],
                            ['label' => 'Listar emergencias', 'icon' => ' fa-truck', 'url' => ['/emergencia'],],
                            ['label' => 'Tipo de emergencia', 'icon' => ' fa-truck', 'url' => ['/tipo-emergencia'],],
                            ],
                    ],
                    [
                        'label' => 'Carros',
                        'icon' => ' fa-truck',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Carro', 'icon' => ' fa-truck', 'url' => ['/carro'],],
                            ['label' => 'Tipo de carros', 'icon' => ' fa-truck', 'url' => ['/tipo-carro'],],
                            ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
