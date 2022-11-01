<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Coursegroupdate $model */

$this->title = Yii::t('app', 'Kurs vaqtini kiritish:');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kurs vaqtini kiritish'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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

