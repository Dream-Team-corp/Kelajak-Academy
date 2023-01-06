<?php

use kartik\file\FileInput;
use kartik\form\ActiveForm;
use yii\helpers\Html;
use yii\helpers\VarDumper;
$this->title = 'Akkauntim';
?>
<div class="p-2">
    <div class="card p-3 card-outline card-success">
 <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data'
        ]
    ]); ?>

    <?= $form->field($model, 'first_name')->textInput() ?>

    <?= $form->field($model, 'last_name')->textInput() ?>

    <?= $form->field($model, 'photo')->widget(FileInput::class) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>        
    </div>
</div>

