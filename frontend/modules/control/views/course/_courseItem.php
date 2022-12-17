<?php

use yii\helpers\Url;

?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title"><?= $model->title ?></h3>
    </div>
    <div class="card-body p-0">
        <div class="ribbon-wrapper ribbon-lg ribbon">
            <div class="ribbon bg-warning text-sm">
                <?= $model->category->title ?>
            </div>
        </div>
        <img src="<?= Yii::getAlias('@defaultImage') . '/' . $model->image ?>" class="card-img img-fluid" alt="<?= $model->title ?>">
        <div class="p-1">
            <p><?= substr($model->description, 0, 30) ?>...</p>
            <p><b>Narxi:</b> <?= number_format($model->price, 0, ' ', ' ') ?> so'm</p>
            <b>O'qituvchi: </b> <span><?= $model->user->first_name.' '.$model->user->last_name ?></span>
        </div>
    </div>
    <div class="card-footer">
        <div class="btn-group">
            <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Boshqarish</button>
            <div class="dropdown-menu bg-success rounded-0" role="menu">
                <a class="dropdown-item bg-info" href="<?= Url::to(['view', 'id' => $model->id]) ?>"> <i class="fa fa-eye"></i> Ko'rish</a>
            </div>
        </div>
    </div>
</div>