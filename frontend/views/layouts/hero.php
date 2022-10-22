<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= Url::base() ?>/images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Certified Instructor <i class="fa fa-chevron-right"></i></span></p> -->
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'tag' => 'p',
                    'itemTemplate' => "<span class='mr-2'>{link} <i class='fa fa-chevron-right'></i></span>\n",
                    'activeItemTemplate' => "<span>{link} <i class='fa fa-chevron-right'></i></span>\n",
                    'options' => [
                        'class' => 'breadcrumbs'
                    ]
                ]); ?>
                <h1 class="mb-0 bread"><?= Html::encode($this->title, $doubleEncode = true) ?></h1>
            </div>
        </div>
    </div>
</section>