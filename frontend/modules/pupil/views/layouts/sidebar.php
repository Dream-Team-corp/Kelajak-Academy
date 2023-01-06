<?php

use yii\helpers\Url;

$name = Yii::$app->user->identity->first_name. ' ' . Yii::$app->user->identity->last_name;
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
            <div class="info">
                <a href="#" class="d-block text-uppercase ml-1"><?=(Yii::$app->user->identity->photo != 'user.png')? '<img class="rounded-circle mr-2" src="'.Yii::getAlias('@defaultImage').'/'.Yii::$app->user->identity->photo.'" width="30px">'.substr($name, '0', 18): '<i class="fa fa-user mr-2"></i>'. substr($name, '0', 18)?>...</a>
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
                    ['label' => 'Bosh sahifa', 'icon' => 'home', 'url' => ['/pupil/main/index']],
                    ['label' => 'Kurslarim', 'icon' => 'bookmark', 'url' => ['/pupil/main/course']],
                    ['label' => 'Natijalarim', 'icon' => 'chevron-up', 'url' => ['/pupil/main/natija']],
                    ['label' => 'Topshiriqlar', 'icon' => 'thumbtack', 'url' => ['/pupil/main/task']],
                    ['label' => 'Akkauntni o\'zgartirish', 'icon' => 'pen', 'url' => ['/pupil/main/singin']]
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>