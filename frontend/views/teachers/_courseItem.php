<?php

?>


<div class="project-wrap">
    <a href="#" class="img" style="background-image: url(<?= Yii::getAlias('@defaultImage') . '/' . $model->image ?>)">
        <span class="price"><?= $model->category->title ?></span>
    </a>
    <div class="text p-4">
        <h3><a href="#"><?= $model->title ?></a></h3>
        <p class="advisor">O'qituvchi: <span><?= $model->user->first_name ?></span></p>
        <ul class="d-flex justify-content-between">
            <li class="price"><?= number_format($model->price, '0', ' ', ' ') ?> so'm</li>
        </ul>
    </div>
</div>