<?php

use yii\widgets\ListView;

$this->title = 'Yordam';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <?=ListView::widget([
        'dataProvider'=> $model,
        'itemView' => '_faqItem',
            'layout' => "{items}",
            'emptyText' => '',
            'options' => [
                'class' => 'row'
            ],
            'itemOptions' => [
                'class' => 'col-4'
            ]
    ])?>
</div>