<?php

/**
 * @var $model \common\models\Course
 * @var $otherCourse \common\models\Course
 * @var $categories \common\models\CourseCategory
 */

use yii\helpers\Url;

$this->title = $model->title;

$this->params['breadcrumbs'][] = ['label' => 'Kurslar', 'url' => ['course/index']];

?>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">

                <h1 class="mb-3"><?= $model->title ?></h1>
                <p>
                    <img src="<?= Yii::getAlias('@defaultImage') . '/' . $model->image ?>" alt="<?= $model->title ?>"
                         class="img-fluid">
                </p>
                <p><?= $model->description ?></p>
                <div class="d-flex justify-content-between">
                    <p class="advisor">O'qituvchi: <span><a
                                    href="<?= Url::to(['teachers/view', 'id' => $model->user->id]) ?>"><?= $model->user->first_name ?> <?= $model->user->last_name ?></a></span>
                    </p>
                    <p>
                        Kurs narxi: <b class="text-dark"><?= number_format($model->price, '0', ' ', ' ') ?> so'm</b>
                    </p>
                </div>
                <a href="<?= Url::to(['/course/online-apply', 'id' => $model->id, 't_id' => $model->user->id]) ?>" class="btn btn-block btn-flat btn-outline-primary mt-3">Qabulga yozilish</a>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate pl-md-4 py-md-5 mt-5">
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Kataloglar</h3>
                        <?php foreach ($categories as $category) : ?>
                        <li><a href="<?= Url::to(['course/index']) ?>"><?= $category->title ?> <span>(<?= count($category->course) ?>)</span></a></li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Ommabop kurslar</h3>
                    <?php foreach ($otherCourse as $course) : ?>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(<?= Yii::getAlias('@defaultImage') . '/' . $course->image ?>);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="<?= Url::to(['course/view', 'id' => $course->id]) ?>"><?= $course->title ?></a></h3>
                            <div class="meta">
                                <div><span class="fa fa-calendar"></span> <?= date('M.d, Y', $course->created_at) ?></div>
                                <div><a href="<?= Url::to(['teachers/view', 'id' => $course->user->id]) ?>"><span class="fa fa-user"></span> <?= $course->user->first_name. ' '. $course->user->last_name ?></a></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>

        </div>
    </div>
</section> <!-- .section -->

