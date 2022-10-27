<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\CourseCategory $model */

$this->title = $model->title.': kategoriyasini o\'zgartirish';
$this->params['breadcrumbs'][] = ['label' => 'Kurs kategoriyalari', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-8 offset-2">
        <div class="card card-outline card-primary p-3">

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
</div>

