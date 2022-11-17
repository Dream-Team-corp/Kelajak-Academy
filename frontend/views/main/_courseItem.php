<?php

use yii\helpers\Url; ?>


<div class="project-wrap">
    <a href="<?= Url::to(['course/view', 'id' => $model->id]) ?>" class="img" style="background-image: url(<?= Yii::getAlias('@defaultImage') . '/' . $model->image ?>)">
        <span class="price"><?= $model->category->title ?></span>
    </a>
    <div class="text p-4">
        <h3><a href="<?= Url::to(['course/view', 'id' => $model->id]) ?>"><?= $model->title ?></a></h3>
        <p class="advisor">O'qituvchi: <span><a href="<?= Url::to(['teachers/view', 'id' => $model->user->id]) ?>"><?= $model->user->first_name ?></a></span></p>
        <ul class="d-flex justify-content-between">
            <li class="price"><?= number_format($model->price, '0', ' ', ' ') ?> so'm</li>
        </ul>
    </div>
</div>