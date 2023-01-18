<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\task $model */

$this->title = Yii::t('app', 'Topshiriq yaratish');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topshiriqlar'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-create card card-outline card-success p-3">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
