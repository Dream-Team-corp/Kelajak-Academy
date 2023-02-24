<?php
use kartik\widgets\FileInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */
/** @var common\models\task $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data']
    ]); ?>
    <?= $form->field($model, 'text')->textarea(['rows'=>6]) ?>


    <?='<div class="row"> <img class="col-6 " style="height: 380px;widht:200px !important" src="'. Yii::getAlias('@defaultImage').'/'.$model->image.'" >'. '<div class="col-6">'. $form->field($model, 'image')->widget(FileInput::class).'</div></div>' ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>    

