<?php

use kartik\form\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput;

$this->title = 'Qabulga yozilish';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-7"></div> -->
            <div class="col-md-6 offset-md-3 order-md-last">
                <div class="login-wrap p-4 p-md-5">
                    <h3 class="mb-4"><?= Html::encode($this->title) ?></h3>
                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'class' => 'signup-form'
                        ]
                    ]) ?>
                    <?= $form->field($model, 'name')->textInput() ?>

                    <?= $form->field($model, 'surname')->textInput() ?>

                    <?= $form->field($model, 'location')->textInput() ?>

                    <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                        'mask' => '\+\9\9\8 99 999-99-99'
                    ]) ?>

                    <div class="form-group d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary submit">
                            <span class="fa fa-paper-plane"></span>
                        </button>
                    </div>
                    <?php ActiveForm::end();  ?>
                </div>
            </div>
        </div>
    </div>
</section>