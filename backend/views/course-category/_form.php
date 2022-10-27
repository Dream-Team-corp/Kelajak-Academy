<?php

use kartik\select2\Select2;
use kartik\widgets\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\CourseCategory $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="course-category-form">

    <?php $form = ActiveForm::begin([
        'options' => [ 'enctype' => 'multipart/form-data' ]
        ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Sarlavha:') ?>

    <?= $form->field($model, 'image')->widget(FileInput::class,['options' => ['accept' => 'image/']])->label('Rasm:') ?>

    <?= $form->field($model, 'tag')->textInput(['maxlength' => true])->label('Qidiruv malumoti:') ?>

    <?= $form->field($model, 'status')->widget(Select2::class,[
    'name' => 'status',
    'hideSearch' => true,
    'data' => [1 => 'Faol', 0 => 'Nofaol'],
    'options' => ['placeholder' => 'Select status...'],
    'pluginOptions' => [
        'allowClear' => true
    ]])->label('Daraja bering:') ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
