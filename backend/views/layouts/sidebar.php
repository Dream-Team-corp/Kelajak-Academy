<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Kelajak Edu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php

                            use yii\bootstrap5\Html;
                            use yii\helpers\Url;

            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    
                    ['label' => 'Asosiy','url'=>Url::to(['site/index']), 'icon' => 'fas fa-home',],
                    ['label' => 'Sozlamalar', 'url'=>'site/setting', 'icon' => 'fas fa-cog',],
                    ['label' => 'Foydalanuvchilar', 'url'=>Url::to(['site/users']), 'icon' => 'fas fa-user',],
                    ['label' => 'Yordam', 'url'=>Url::to(['site/help']), 'icon' => 'fas fa-question',],
                    ['label' => 'Katigoriyalar', 'url'=>Url::to(['course-category/index']), 'icon' => 'fas fa-category',],
                    ['label' => 'Login', 'url'=>Url::to(['site/login']), 'icon' => 'fas ',],
                    
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>