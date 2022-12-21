<?php

use yii\helpers\Url;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::home() ?>" class="brand-link">
        <span class="brand-text font-weight-light">Kelajak Academy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $assetDir ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->user->identity->username ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
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

                    ['label' => 'Asosiy', 'url' => Url::to(['site/index']), 'icon' => 'fas fa-home',],
                    ['label' => 'Sozlamalar', 'url' => Url::to(['site/setting']), 'icon' => 'fas fa-cog',],
                    ['label' => 'Foydalanuvchilar', 'url' => Url::to(['site/users']), 'icon' => 'fas fa-user',],
                    ['label' => 'Bog\'lanish', 'url' => Url::to(['site/help']), 'icon' => 'fas fa-folder',],
                    ['label' => 'Yordam', 'url' => Url::to(['site/faq']), 'icon' => 'fas fa-plus',],
                    ['label' => 'Katigoriyalar', 'url' => Url::to(['course-category/index']), 'icon' => 'fas fa-book-medical',],
                    ['label' => 'Login', 'url' => Url::to(['site/login']), 'icon' => 'fas fa-sign-out-alt',],

                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>