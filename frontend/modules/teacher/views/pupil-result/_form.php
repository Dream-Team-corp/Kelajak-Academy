<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\PupilResult $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pupil-result-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pupil_id')->textInput() ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <?= $form->field($model, 'group_id')->textInput() ?>

    <?= $form->field($model, 'numbers_of_question')->textInput() ?>

    <?= $form->field($model, 'correct_answer')->textInput() ?>

    <?= $form->field($model, 'incorrect_answer')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
