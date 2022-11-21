<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;

?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><?= $model->title ?></h3>
    </div>
    <div class="card-body p-0">
        <div class="ribbon-wrapper ribbon-lg ribbon">
            <div class="ribbon bg-warning text-sm">
                <a href="<?= Url::to(['index', 'caty_id' => $model->category->id]) ?>"><?= $model->category->title ?></a>
            </div>
        </div>
        <img src="<?= Yii::getAlias('@defaultImage') . '/' . $model->image ?>" class="card-img img-fluid" alt="<?= $model->title ?>">
        <div class="p-1">
            <p><?= StringHelper::truncateWords($model->description, 10, '...', true) ?></p>
            <p><b>Narxi:</b> <?= number_format($model->price, 0, ' ', ' ') ?> so'm</p>
        </div>
    </div>
    <div class="card-footer">
        <div class="btn-group">
            <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Boshqarish</button>
            <div class="dropdown-menu bg-success rounded-0" role="menu">
                <a class="dropdown-item bg-primary" href="<?= Url::to(['update', 'id' => $model->id]) ?>"> <i class="fa fa-pen"></i> Tahrirlash</a>
                <a class="dropdown-item bg-info" href="<?= Url::to(['view', 'id' => $model->id]) ?>"> <i class="fa fa-eye"></i> Ko'rish</a>
                <a class="dropdown-item bg-danger" href="<?= Url::to(['delete', 'id' => $model->id]) ?>" data-method="post"> <i class="fa fa-trash"></i> O'chirish</a>
            </div>
        </div>
    </div>
</div>