<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Admin $model */

$this->title = 'Yangi qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Qabulxona xodimlari', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <div class="col-md-6 offset-md-3">

        <div class="card card-primary p-3">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>

    </div>

</div>