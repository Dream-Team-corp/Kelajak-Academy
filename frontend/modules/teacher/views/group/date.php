<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Group $model */

$this->title = 'Yangi guruh vaqtini yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Guruhim', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card card-outline card-primary">
            <?= $this->render('_date', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>