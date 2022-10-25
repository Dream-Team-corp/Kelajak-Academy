<?php

use yii\helpers\Url;

$route = Yii::$app->controller->route;
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?= Url::home() ?>"><span>Kelajak </span>Academy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?= ($route == '/' || $route == 'main/index') ? 'active' : '' ?>">
                    <a href="<?= Url::home() ?>" class="nav-link">Asosiy</a>
                </li>
                <li class="nav-item <?= ($route == 'site/about') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/site/about']) ?>" class="nav-link">Biz haqimizda</a>
                </li>
                <li class="nav-item">
                    <a href="course.html" class="nav-link">Kurslar</a>
                </li>
                <li class="nav-item">
                    <a href="instructor.html" class="nav-link">O'qituvchilar</a>
                </li>
                <li class="nav-item <?= ($route == 'site/contact') ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/site/contact']) ?>" class="nav-link">Bo'g'lanish</a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['/site/login']) ?>" class="nav-link">
                        <?php
                        if (!Yii::$app->user->isGuest) {
                            echo Yii::$app->user->identity->first_name;
                        } else {
                            echo "Profilim";
                        }
                        ?>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>