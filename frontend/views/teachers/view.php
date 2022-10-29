<?php
$this->title = 'O\'qituvchi - ' . $model->teacher->first_name . ' ' . $model->teacher->last_name;

$this->params['breadcrumbs'][] = ['label' => 'O\'qituvchilar', 'url' => ['index']];

?>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ftco-animate d-flex align-items-center align-items-stretch">
                <div class="staff-2 w-100">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch d-flex align-items-end" style="background-image: url(<?= Yii::getAlias('@defaultImage').'/'.$model->image ?>);">
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
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-1.jpg);">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-2.jpg);">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-3.jpg);">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-4.jpg);">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-5.jpg);">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url(images/work-6.jpg);">
                        <span class="price">Software</span>
                    </a>
                    <div class="text p-4">
                        <h3><a href="#">Design for the web with adobe photoshop</a></h3>
                        <p class="advisor">Advisor <span>Tony Garret</span></p>
                        <ul class="d-flex justify-content-between">
                            <li><span class="flaticon-shower"></span>2300</li>
                            <li class="price">$199</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>