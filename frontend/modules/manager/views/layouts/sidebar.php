<?php

use yii\helpers\Url;
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
                <a href="#" class="d-block text-uppercase ml-1"><i class="fa fa-user mr-2"></i><?= Yii::$app->user->identity->username ?></a>
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
                    ['label' => 'Bosh sahifa', 'icon' => 'home', 'url' => ['/manager/default/index']],
                    ['label' => 'Aktiv o\'qituvchilar' , 'icon' => 'circle', 'iconClassAdded' => 'text-info', 'url' => ['/manager/member/index']],
                    ['label' => 'Qabuldagi o\'quvchilar' , 'icon' => 'circle', 'iconClassAdded' => 'text-warning', 'url' => ['/control/main/index']],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>