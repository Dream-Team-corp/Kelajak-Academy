<?php

use common\models\GroupPupilList;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\search\BilQuery $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($model, 'pupil_id')->widget(Select2::class, [
        'data' => ArrayHelper::map(GroupPupilList::findAll(['']), 'id', 'last_name')
    ]) ?>

    <?= $form->field($model, 'group_id')->widget(Select2::class, [
        'data' =>  ArrayHelper::map($model->group, 'id', 'name')
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Qidirish', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Tozalash', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
