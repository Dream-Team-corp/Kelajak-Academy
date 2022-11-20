<?php
$this->title = 'Yordam';
$this->params['breadcrumbs'][] = $this->title;

use yii\widgets\LinkPager;
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
                'class' => 'row'
            ],
            'itemOptions' => [
                'class' => 'col-6 col-md-4 col-lg-3'
            ]
            
        ]);
        ?> 
        <div class="text-center">
            <?=LinkPager::widget([
                'pagination'=>$help->pagination,
                'firstPageLabel' => 'Boshi',
                'lastPageLabel' => 'Oxiri',
                'options'=>[
                    'class'=>'btn-group'
                ],
                'linkContainerOptions'=>[
                    'class'=>'btn btn-outline-info'
                ],
            ])?>
        </div>   
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
         <div class="text-center">
            <?=LinkPager::widget([
                'pagination'=>$help->pagination,
                'firstPageLabel' => 'Boshi',
                'lastPageLabel' => 'Oxiri',
                'options'=>[
                    'class'=>'btn-group'
                ],
                'linkContainerOptions'=>[
                    'class'=>'btn btn-outline-info'
                ],
            ])?>
        </div> 
    </div>
</div>
