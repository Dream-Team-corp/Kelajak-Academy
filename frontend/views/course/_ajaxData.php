<?php

use yii\bootstrap4\LinkPager as Bootstrap4LinkPager;
use yii\widgets\ListView;
?>

<?php
ListView::widget([
    'dataProvider' => $model,
    'itemView' => '_courseItem',
    'layout' => "{items}",
    'options' => [
        'class' => 'row'
    ],
    'itemOptions' => [
        'class' => 'col-md-6 col-lg-4 d-flex align-items-stretch ftco-animate'
    ],
    'pager' => [
        'class' => Bootstrap4LinkPager::class,
    ]
]) ?>