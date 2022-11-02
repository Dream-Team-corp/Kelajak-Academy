<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Coursegroupdate $model */

$this->title = Yii::t('app', '{name}: vaqtini o\'zgartirish', [
    'name' => $model->cname,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Coursegroupdates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
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

