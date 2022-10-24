<?php

use kartik\select2\Select2 as Select2Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput() ?>
    <?= $form->field($model, 'last_name')->textInput() ?>
    <?= $form->field($model, 'tel_number')->widget(MaskedInput::class, ['mask' => '\+\9\9\8 99 999-99-99',]) ?>
    <?= $form->field($model, 'status')->widget(Select2Select2::class, [
        'hideSearch' => true,
        'data' => [10 => 'Faol', 9 => 'Nofaol'],
        'options' => ['placeholder' => 'Holatni atmlang...'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ])->label('Holat:') ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>