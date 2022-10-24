<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CourseCategory $model */

$this->title = 'Create Course Category';
$this->params['breadcrumbs'][] = ['label' => 'Course Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
