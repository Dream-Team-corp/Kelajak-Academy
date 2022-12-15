<?php

use yii\helpers\Url;

?>

<div class="staff">
    <div class="img-wrap d-flex align-items-stretch">
        <div class="img align-self-stretch" style="background-image: url(<?= Yii::getAlias('@defaultImage') ?>/<?= $model->image ?>);"></div>
    </div>
    <div class="text pt-3">
        <h3><a href="<?= Url::to(['/teachers/view', 'id' => $model->teacher_id]) ?>"><?= $model->teacher->first_name . ' ' . $model->teacher->last_name ?></a></h3>
        <span class="position mb-2 text-capitalize"><?= $model->job ?></span>
        <div class="faded">
            <p><?= substr($model->about, 0, 50) ?>...</p>
            <ul class="ftco-social text-center bg-white <?= (!empty($model->socialLinkFront)) ? '' : 'd-none' ?>">
                <?= $model->socialLinkFront ?>
            </ul>
        </div>
    </div>
</div>