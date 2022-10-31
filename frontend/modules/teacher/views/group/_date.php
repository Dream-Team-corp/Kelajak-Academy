<?php

use kartik\select2\Select2;
use kartik\widgets\SwitchInput;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/** @var yii\web\View $this */
/** @var common\models\Group $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="p-2">

    <?php $f = ActiveForm::begin();
        echo $f->field($model, 'dushanba')->widget(MaskedInput::class, 
        [
         'clientOptions' => [
             'alias' => 'hh:mm',
             'separator' => ":",
         ],
         'mask' => 'h:s',
         'options' => [
             'placeholder' => '___:___'
         ]
         ]);
         echo $f->field($model, 'seshanba')->widget(MaskedInput::class, 
        [
         'clientOptions' => [
             'alias' => 'hh:mm',
             'separator' => ":",
         ],
         'mask' => 'h:s',
         'options' => [
             'placeholder' => '___:___'
         ]
         ]);
         echo $f->field($model, 'chorshanba')->widget(MaskedInput::class, 
        [
         'clientOptions' => [
             'alias' => 'hh:mm',
             'separator' => ":",
         ],
         'mask' => 'h:s',
         'options' => [
             'placeholder' => '___:___'
         ]
         ]);
         echo $f->field($model, 'payshanba')->widget(MaskedInput::class, 
        [
         'clientOptions' => [
             'alias' => 'hh:mm',
             'separator' => ":",
         ],
         'mask' => 'h:s',
         'options' => [
             'placeholder' => '___:___'
         ]
         ]);
         echo $f->field($model, 'juma')->widget(MaskedInput::class, 
        [
         'clientOptions' => [
             'alias' => 'hh:mm',
             'separator' => ":",
         ],
         'mask' => 'h:s',
         'options' => [
             'placeholder' => '___:___'
         ]
         ]);
         echo $f->field($model, 'shanba')->widget(MaskedInput::class, 
        [
         'clientOptions' => [
             'alias' => 'hh:mm',
             'separator' => ":",
         ],
         'mask' => 'h:s',
         'options' => [
             'placeholder' => '___:___'
         ]
         ]);
         echo $f->field($model, 'yakshanba')->widget(MaskedInput::class, 
        [
         'clientOptions' => [
             'alias' => 'hh:mm',
             'separator' => ":",
         ],
         'mask' => 'h:s',
         'options' => [
             'placeholder' => '___:___'
         ]
         ]);
    ?>


    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>