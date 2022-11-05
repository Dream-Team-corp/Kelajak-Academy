<?php

use yii\bootstrap4\LinkPager as Bootstrap4LinkPager;
use yii\widgets\ListView;

$this->title = "Kurslarimiz";

$this->params['breadcrumbs'][] = $this->title;

?>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 sidebar">
                <div class="sidebar-box bg-white ftco-animate">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </div>



            </div>
            <div class="col-lg-9">
                <?= ListView::widget([
                    'dataProvider' => $course,
                    'itemView' => '_courseItem',
                    'layout' => "{items}",
                    'options' => [
                        'class' => 'row'
                    ],
                    'itemOptions' => [
                        'class' => 'col-md-6 col-lg-5 d-flex align-items-stretch ftco-animate'
                    ],
                    'pager' => [
                        'class' => Bootstrap4LinkPager::class,
                    ]
                ]);
                ?>
            </div>
        </div>
</section>