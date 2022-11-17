<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light ml-2"><strong><?= Yii::$app->name ?></strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= Yii::getAlias('@defaultImage') . '/user.png' ?>" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block text-uppercase ml-1"><?= Yii::$app->user->identity->username ?></a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'ASOSIY MENULAR', 'header' => true],
                    ['label' => 'Bosh sahifa', 'icon' => 'home', 'url' => ['/control/main/index']],
                    ['label' => 'O\'qituvchilar', 'icon' => 'chalkboard-teacher', 'url' => ['/control/teacher/index']],
                    ['label' => 'O\'quvchilar', 'icon' => 'graduation-cap', 'url' => ['/control/member/index']],
                    ['label' => 'Kurslar reklamalari', 'icon' => 'book', 'url' => ['/control/course/index']],
                    ['label' => 'Qabulxona xodimlari', 'icon' => 'circle', 'url' => ['/control/manager/index']]
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>