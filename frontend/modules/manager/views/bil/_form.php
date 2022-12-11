<?php

use kartik\widgets\DepDrop;
use kartik\widgets\Select2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use yii\widgets\MaskedInput;

/** @var yii\web\View $this */
/** @var common\models\Bil $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_id')->widget(Select2::class, [
        'data' => \yii\helpers\ArrayHelper::map($model->teacherList, 'id', 'name'),
        'options' => [
            'placeholder' => 'O\'qituvchini tanlang:'
        ]
    ]) ?>

    <?= $form->field($model, 'group_id')->widget(DepDrop::class, [
        'options' => [
            'placeholder' => 'Guruhni tanlang:'
        ],
        'type' => DepDrop::TYPE_SELECT2,
        'select2Options' => ['pluginOptions' => ['allowClear' => false]],
        'pluginOptions' => [
            'depends' => ['bil-teacher_id'],
            'url' => Url::to(['/manager/bil/group']),
            'loadingText' => "Ro`yhat yuklanmoqda ...",
        ]
    ]) ?>

    <?= $form->field($model, 'pupil_id')->widget(DepDrop::class, [
        'options' => ['placeholder' => 'O\'quvchini tanlang:'],
        'type' => DepDrop::TYPE_SELECT2,
        'select2Options' => ['pluginOptions' => ['allowClear' => false]],
        'pluginOptions' => [
            'depends' => ['bil-group_id'],
            'url' => Url::to(['/manager/bil/pupil']),
            'loadingText' => "Ro`yhat yuklanmoqda ...",
        ]
    ]) ?>

    <?= $form->field($model, 'how_much')->widget(MaskedInput::class, [
        'mask' => '999999'
    ]) ?>

    <?= $form->field($model, 'type')->widget(Select2::class, [
        'data' => [
            '1' => 'Naqd Pul',
            '0' => 'Online'
        ],
        'hideSearch' => true,
        'options' => [
            'placeholder' => 'To\'lov turini tanlang'
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>