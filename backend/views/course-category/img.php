<?php

use kartik\select2\Select2;
use kartik\widgets\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\CourseCategory $model */
/** @var yii\widgets\ActiveForm $form */
$this->title = 'Kategoriyani rasmini o\'zgartirish';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-6 offset-3">
        <div class="card card-outline card-info p-3">

            <?php $form = ActiveForm::begin([
                'options' => [ 'enctype' => 'multipart/form-data' ]
                ]); ?>

            <?= $form->field($model, 'image')->widget(FileInput::class,['options' => ['accept' => 'image/']])->label('Rasm:') ?>

            <div class="form-group">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-info']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>        
    </div>
</div>

