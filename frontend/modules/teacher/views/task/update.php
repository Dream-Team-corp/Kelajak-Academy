<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\task $model */

$this->title = Yii::t('app', 'Topshiriq-{name} : o\'zgartirish', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topshiriqlar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="task-update card card-outline card-success p-3">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
