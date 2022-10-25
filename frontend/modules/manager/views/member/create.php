<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Yangi o\'quvchi';
$this->params['breadcrumbs'][] = ['label' => 'Qabuldagi O\'quvchilar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <div class="col-md-6 offset-md-3">
        <div class="card card-outline card-primary p-2">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

</div>