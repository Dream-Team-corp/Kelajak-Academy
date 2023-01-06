<?php

use yii\helpers\Url;
use yii\helpers\VarDumper;
use yii\widgets\ListView;

$this->title = 'Kurslarim';
?>
<div class="project-wrap">
    <div class="my-goup">
        <?= ListView::widget([
        'dataProvider' => $model,
        'itemView' => '_group',
        'layout' => "{items}",
        'options' => [
            'class' => 'row '
        ],
        'itemOptions' => [
            'class' => 'col-10 my-1 offset-1 col-sm-6 offset-sm-0 col-md-6 offset-md-0 col-lg-6 offset-lg-0 col-xl-3'
        ],
    ]); ?>
    </div>
</div>