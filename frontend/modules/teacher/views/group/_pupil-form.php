<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Yangi o\'quvchi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">

    <div class="col-md-6 offset-md-3">
        <div class="card card-outline card-primary p-2">
            <div class="user-form">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'first_name')->textInput() ?>
                <?= $form->field($model, 'last_name')->textInput() ?>
                <?= $form->field($model, 'tel_number')->widget(MaskedInput::class, ['mask' => '\+\9\9\8 99 999-99-99',]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>

</div>