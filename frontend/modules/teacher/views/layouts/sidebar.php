<?php

use yii\helpers\Url;
$image = Yii::$app->user->identity->teacherInfo->image;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::home() ?>" class="brand-link">
        <span class="brand-text font-weight-light ml-2"><strong><?= Yii::$app->name ?></strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= Yii::getAlias('@defaultImage') .'/'. ($image == null) ? Yii::$app->user->identity->photo : $image  ?>" class="img-circle elevation-2" width="250" height="250">
            </div>
            <div class="info">
                <a href="#" class="d-block text-uppercase ml-1"><?= Yii::$app->user->identity->first_name ?></a>
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
                    ['label' => 'Bosh sahifa', 'icon' => 'home', 'url' => ['/teacher/default/index']],
                    ['label' => 'Guruhlarim', 'icon' => 'users', 'iconClassAdded' => 'text-info', 'url' => ['/teacher/group/index']],
                    ['label' => 'Kurs reklamalari', 'icon' => 'ad', 'iconClassAdded' => 'text-info', 'url' => ['/teacher/course/index']],
                    ['label' => 'To\'lovlar', 'icon' => 'money-bill-wave', 'iconClassAdded' => 'text-info', 'url' => ['/teacher/bil/index']],
                    // ['label' => 'O\'quvchilar natijasi', 'icon' => 'poll', 'iconClassAdded' => 'text-info', 'url' => ['/teacher/pupil-result/index']],
                    // ['label' => 'Chat', 'icon' => 'comments', 'iconClassAdded' => 'text-info', 'url' => ['/teacher/']],
                    ['label' => 'Yordam', 'icon' => 'question-circle', 'iconClassAdded' => 'text-info', 'url' => ['/teacher/help/index']],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
