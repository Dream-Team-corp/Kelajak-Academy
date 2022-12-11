<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Bil $model */

$this->title = 'Update Bil: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
