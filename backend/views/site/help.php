<?php

use yii\widgets\ListView;


echo ListView::widget([
    'dataProvider' => $help,
    'itemView' => '_helpItem',
    'layout' => "{items}",
    'options' => [
        'class' => 'row'
    ],
    'itemOptions' => [
        'class' => 'col-6 col-md-4 col-lg-3'
    ]
]);
?>
