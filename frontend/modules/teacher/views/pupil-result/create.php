<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PupilResult $model */

$this->title = 'Create Pupil Result';
$this->params['breadcrumbs'][] = ['label' => 'Pupil Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pupil-result-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
