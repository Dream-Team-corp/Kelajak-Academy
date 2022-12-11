<?php

use kartik\form\ActiveForm;
use yii\bootstrap5\Html;

$this->title = "Sayt sozlamari";

?>


<div class="row">
    <div class="col-md-6">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Qidiruv so'zlari</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="form-container">
                    <?php $form = ActiveForm::begin() ?>
                    <?= $form->field($model, 'keyword')->textarea(['rows' => 4]) ?>
                    <?= $form->field($model, 'description')->textarea(['rows' => 8]) ?>
                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success btn-flat']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6"></div>
</div>
