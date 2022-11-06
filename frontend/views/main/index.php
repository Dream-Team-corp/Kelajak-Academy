<?php

use yii\helpers\Url;
use yii\widgets\ListView;
use common\models\Member;
/**
 * @var $model \common\models\CourseCategory
 * @var $course \yii\data\ActiveDataProvider
 */
$teacher = Member::find()->where(['type' => Member::TEACHER])->count();
$pupils = Member::find()->where(['type' => Member::PUPIL])->count();

$this->title = Yii::$app->name;

?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Bugundan o'qishni boshlang</span>
                <h2 class="mb-4">O'zingizga yoqqan katalogni tanlang</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <?= ListView::widget([
                'dataProvider' => $model,
                'itemView' => '_courseCategory',
                'layout' => "{items}",
                'options' => [
                    'class' => 'row justify-content-center'
                ],
                'itemOptions' => [
                    'class' => 'col-md-3 col-lg-2'
                ],
            ]);
            ?>
            <div class="col-md-12 text-center mt-5">
                <a href="<?= Url::to(['/course/index']) ?>" class="btn btn-secondary">Barcha kurslar</a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Bugundan o'qishni boshlang</span>
                <h2 class="mb-4">Kursingizni tanlang</h2>
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

<section class="ftco-section ftco-counter img" id="section-counter"
         style="background-image: url(<?= Yii::getAlias('@defaultImage') . '/bg_4.jpg' ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span class="flaticon-online"></span></div>
                    <div class="text">
                        <strong class="number" data-number="<?= $course->count ?>">0</strong>
                        <span>Dan Ortiq kurslar</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span class="flaticon-graduated"></span></div>
                    <div class="text">
                        <strong class="number" data-number="<?= $pupils ?>">0</strong>
                        <span>dan ortiq o'quvchilar</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span class="flaticon-instructor"></span></div>
                    <div class="text">
                        <strong class="number" data-number="<?= $teacher ?>">0</strong>
                        <span>malakali o'qituvchilar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<section class="ftco-section testimony-section bg-light">
    <div class="overlay" style="background-image: url(images/bg_2.jpg)"></div>
    <div class="container">
        <div class="row pb-4">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">Biz haqimizdagi fikrlar</h2>
            </div>
        </div>
    </div>
    <div class="container container-2">
        <div class="row ftco-animate">
            <div class="col-md-12">
                <?= ListView::widget([
                    'dataProvider' => $contact,
                    'itemView' => '_contact',
                    'emptyText' => '',
                    'layout' => "{items}",
                    'options' => [
                        'class' => 'carousel-testimony owl-carousel'
                    ],
                    'itemOptions' => [
                        'class' => 'item'
                    ]
                ]); ?>
            </div>
        </div>
    </div>
</section>
<br><br>


