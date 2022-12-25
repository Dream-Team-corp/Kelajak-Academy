<?php

$this->title = 'Kategoriyalar';
use yii\widgets\ListView;

?>
<div>
        <?= ListView::widget([
            'dataProvider' => $model,
            'itemView' => '_courseItem',
            'layout' => "{items}",
            'emptyText' => '',
            'options' => [
                'class' => 'row'
            ],
            'itemOptions' => [
                'class' => 'col-6 col-md-4 col-lg-3'
            ]
            
        ]);
        ?> 
</div>