<?php

use yii\widgets\ListView;

$this->title = 'O\'qituvchi - ' . $model->teacher->first_name . ' ' . $model->teacher->last_name;

$this->params['breadcrumbs'][] = ['label' => 'O\'qituvchilar', 'url' => ['index']];

?>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ftco-animate d-flex align-items-center align-items-stretch">
                <div class="staff-2 w-100">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch d-flex align-items-end" style="background-image: url(<?= Yii::getAlias('@defaultImage') . '/' . $model->image ?>);">
                            <div class="text mb-4 text-md-center">
                                <h3><?= $model->teacher->first_name . ' ' . $model->teacher->last_name ?></h3>
                                <span class="position mb-2"><?= $model->job ?></span>
                                <div class="faded">
                                    <!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
                                    <ul class="ftco-social">
                                        <?= $model->socialLinkFront ?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 d-flex align-items-center">
                <div class="staff-detail w-100 pl-md-5">
                    <h3>O'qituvchi haqida</h3>
                    <p><?= $model->about ?></p>
                    <h3>Ta'lim</h3>
                    <p><?= $model->about ?></p>
                    <h3>Ish tajribasi</h3>
                    <p><?= $model->experience ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light ftco-no-pt">
    <div class="container">
        <div class="row pb-4">
            <div class="col-md-12 heading-section ftco-animate">
                <h2 class="mb-4"><?= $model->teacher->first_name . ' ' . $model->teacher->last_name ?> ning kurslari</h2>
            </div>
        </div>
        <?=
        ListView::widget([
            'dataProvider' => $course,
            'itemView' => '_courseItem',
            'layout' => "{items}",
            'options' => [
                'class' => 'row'
            ],
            'itemOptions' => [
                'class' => 'col-md-4 ftco-animate'
            ]
        ])
        ?>
    </div>
</section>