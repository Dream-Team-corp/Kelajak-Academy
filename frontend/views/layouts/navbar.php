<?php

use yii\helpers\Url;

$route = Yii::$app->controller->route;
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= Url::home() ?>"><span>Kelajak </span>Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menyu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= ($route == '/' || $route == 'main/index') ? 'active' : '' ?>">
                    <a href="<?= Url::home() ?>" class="nav-link">Asosiy</a>
                </li>
                <li class="nav-item <?= ($route == 'site/about') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/site/about']) ?>" class="nav-link">Biz haqimizda</a>
                </li>
                <li class="nav-item <?= ($route == 'course/index') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/course/index']) ?>" class="nav-link">Kurslar</a>
                </li>
                <li class="nav-item <?= ($route == 'teachers/index') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/teachers/index']) ?>" class="nav-link">O'qituvchilar</a>
                </li>
                <li class="nav-item <?= ($route == 'site/contact') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/site/contact']) ?>" class="nav-link">Fikringiz</a>
                </li>
                <?php if (!Yii::$app->user->isGuest) : ?>
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link">
                            <?php
                            if (!Yii::$app->user->isGuest) {
                                echo Yii::$app->user->identity->first_name;
                            } else {
                                echo "Profilim";
                            }
                            ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm">
                            <a href="<?= Url::to(['/site/login']) ?>" class="dropdown-item">Profilga o'tish</a>
                            <a href="<?= Url::to(['/site/logout']) ?>" data-method="post" class="dropdown-item"> <b class="text-danger">Chiqish</b> </a>
                        </div>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a href="<?= Url::to(['/site/login']) ?>" class="nav-link">Kirish</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>