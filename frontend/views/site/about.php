<?php

use common\models\Member;
use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = "Biz haqimizda";
$this->params['breadcrumbs'][] = $this->title;
$teacher = Member::find()->where(['type' => Member::TEACHER])->count();
$pupils = Member::find()->where(['type' => Member::PUPIL])->count();
$course = \common\models\Course::find()->where(['status' => \common\models\Course::STATUS_ACTIVE])->count();
?>


<section class="ftco-section ftco-about img">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 about-intro">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="d-flex about-wrap">
                            <div class="img d-flex align-items-center justify-content-center"
                                 style="background-image:url(<?= Yii::getAlias('@defaultImage') ?>/about-1.jpg);">
                            </div>
                            <div class="img-2 d-flex align-items-center justify-content-center"
                                 style="background-image:url(<?= Yii::getAlias('@defaultImage') ?>/about.jpg);">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-5 py-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-4">Kelajakka xush kelibsiz!</h2>
                                <p>Kelajakda kim bo'lishingiz bugungi harakatingizga bog'liq. Agar siz shifokor
                                    bo'lmoqchi bo'lsangiz albatta biologiya, kimyo fanlarini yaxshi bilishingiz kerak.
                                    IT mutaxassisi bo'lishni istasangiz, buni avvalo kompyuter savodxonligidan
                                    boshlashingiz kerak. Xo'sh, bu bilim va ko'nikmalarni qayerda o'rganish mumkin
                                    deysizmi?
                                    Albatta Kelajak Academyda!</p>
                                <p><a href="<?= Url::to(['course/index']) ?>" class="btn btn-primary mt-2">O'z
                                        kursingizni tanlang</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter"
         style="background-image: url(<?= Yii::getAlias('@defaultImage') ?>/bg_4.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 d-flex align-items-center">
                    <div class="icon"><span class="flaticon-online"></span></div>
                    <div class="text">
                        <strong class="number" data-number="<?= $course ?>">0</strong>
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


<section class="ftco-section testimony-section bg-light">
    <div class="overlay" style="background-image: url(<?= Yii::getAlias('@defaultImage') ?>/bg_2.jpg);"></div>
    <div class="container">
        <div class="row pb-4">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-4">What Are Students Says</h2>
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

<section class="ftco-intro ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="img" style="background-image: url(<?= Yii::getAlias('@defaultImage') ?>/bg_4.jpg);">
                    <div class="overlay"></div>
                    <h2>We Are StudyLab An Online Learning Center</h2>
                    <p>We can manage your dream building A small river named Duden flows by their place</p>
                    <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Enroll Now</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section services-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-8 heading-section pr-md-5 ftco-animate d-flex align-items-center">
                <div class="w-100 mb-4 mb-md-0">
                    <span class="subheading">Kelajakka xush kelibsiz!</span>
                    <h2 class="mb-4">Kelajak Academy - ishonchli va sifatli ta'lim!</h2>
                    <p>Malakali ustozlardan ta'lim olishni istaysizmi? Ajoyib atmosferada rivojlanishnichi? Sifatli
                        bilim va ko'nikmalarni qayerdan topish mumkin deb o'ylaysiz?
                        ✅ Albatta Kelajak Academyda!</p>
                    <p>Eng yaxshi bilimlarni olishni istasangiz, kelajakda "Katta" odam bo'lishni xohlasangiz Kelajak
                        Academyga kelavering!</p>
                    <div class="d-flex video-image align-items-center mt-md-4">
                        <a href="#" class="video img d-flex align-items-center justify-content-center"
                           style="background-image: url(<?= Yii::getAlias('@defaultImage') ?>/about.jpg);">
                            <span class="fa fa-play-circle"></span>
                        </a>
                        <h4 class="ml-4">Kelajagingizni Kelajak Academy bilan quring! <br> <small><a href="#">Videoni ko'rish</a></small></h4>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-tools"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Top Quality Content</h3>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services">
                            <div class="icon icon-2 d-flex align-items-center justify-content-center"><span
                                        class="flaticon-instructor"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Highly Skilled Instructor</h3>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services">
                            <div class="icon icon-3 d-flex align-items-center justify-content-center"><span
                                        class="flaticon-quiz"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">World Class &amp; Quiz</h3>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services">
                            <div class="icon icon-4 d-flex align-items-center justify-content-center"><span
                                        class="flaticon-browser"></span></div>
                            <div class="media-body">
                                <h3 class="heading mb-3">Get Certified</h3>
                                <p>A small river named Duden flows by their place and supplies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>