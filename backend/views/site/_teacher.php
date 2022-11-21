<?php

use yii\bootstrap5\Html;
use yii\helpers\Url;


?>
<div class="card p-2">
    <img class="" src="<?= Yii::getAlias('@defaultImage') . '/' . $model->teacherInfo->image ?>" alt="Card image">
    <div class="card-body">
        <h4 class="h4"><?= $model->first_name . ' ' . $model->last_name ?></h4><br>
        <?= Html::a('To\'liq malumot', Url::to(['user', 'id' => $model->id]), ['class' => 'btn btn-primary']) ?>
    </div>
</div>