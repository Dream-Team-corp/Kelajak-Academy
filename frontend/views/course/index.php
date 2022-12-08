<?php

use yii\bootstrap4\LinkPager as Bootstrap4LinkPager;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\widgets\Pjax;

$this->title = "Kurslarimiz";

$this->params['breadcrumbs'][] = $this->title;

$query = Yii::$app->request->get('q');

?>

<section class="ftco-section bg-light" id="course_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 sidebar">
                <div class="sidebar-box bg-white ftco-animate">
                    <form method="get" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" value="<?= $query ?>" autocomplete="off" name="q" placeholder="Qidirish...">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <?=
                ListView::widget([
                    'dataProvider' => $course,
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
                ]);
                ?>
            </div>
        </div>
</section>