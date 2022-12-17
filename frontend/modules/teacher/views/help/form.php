<?php

use kartik\widgets\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Yordam';
/** @var yii\web\View $this */
/** @var common\models\PupilResult $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="card card-outline card-success p-3">

    <?php $form = ActiveForm::begin([
        'options'=> ['enctype' => 'multipart/form-data']
        ]); ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label('') ?>

    <?= $form->field($model, 'savol')->textInput() ?>

    <?= $form->field($model, 'image')->widget(FileInput::class,['options' => ['accept' => 'image/']]) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

