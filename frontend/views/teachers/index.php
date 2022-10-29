<?php

/** @var yii\web\View $this */

use yii\widgets\ListView;

$this->title = 'O\'qituvchilar';

$this->params['breadcrumbs'][] = $this->title;

?>


<section class="ftco-section bg-light">
    <div class="container">
        
        <?=
        ListView::widget([
            'dataProvider' => $teachers,
            'itemView' => '_teacherItem',
            'layout' => "{items}",
            'options' => [
                'class' => 'row'
            ],
            'itemOptions' => [
                'class' => 'col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch'
            ]
        ])
        ?>
       
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>