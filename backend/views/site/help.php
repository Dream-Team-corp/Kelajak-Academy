<?php
$this->title = 'Yordam';
$this->params['breadcrumbs'][] = $this->title;
use yii\widgets\ListView;

?>
<div class="pl-4">
    <div>
        <div class="h4 my-3">
            Nofaol komentlar:
        </div>
        <?= ListView::widget([
            'dataProvider' => $help,
            'itemView' => '_helpItem',
            'layout' => "{items}",
            'emptyText' => '',
            'options' => [
                'class' => 'carousel-testimony owl-carousel'
            ],
            'itemOptions' => [
                'class' => 'item'
            ]
            
        ]);
        ?>    
    </div>
    <div>
        <div class="h4 my-3">
            Faol komentlar:
        </div>
        <?= ListView::widget([
            'dataProvider' => $active,
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
    </div>
</div>
