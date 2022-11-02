<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Bil $model */

$this->title = 'Yangi to\'lov';
$this->params['breadcrumbs'][] = ['label' => 'To\'lovlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card card-default p-3">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>


</div>