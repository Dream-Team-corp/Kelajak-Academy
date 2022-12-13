<?php

use yii\bootstrap5\Html;
use yii\helpers\Url;

$img = ($model->teacherInfo->image != '') ? $model->teacherInfo->image : 'user.png';
?>
<div class="card p-2">
    <img class="" src="<?= Yii::getAlias('@defaultImage') . '/' . $img ?>" alt="Card image">
    <div class="card-body">
        <h4 class="h4"><?= $model->first_name . ' ' . $model->last_name ?></h4><br>
        <?= Html::a('To\'liq malumot', Url::to(['user', 'id' => $model->id]), ['class' => 'btn btn-primary']) ?>
    </div>
</div>