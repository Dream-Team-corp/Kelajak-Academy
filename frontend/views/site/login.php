<?php

use yii\bootstrap5\ActiveForm;


?>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-7"></div> -->
            <div class="col-md-6 offset-md-3 order-md-last">
                <div class="login-wrap p-4 p-md-5">
                    <h3 class="mb-4">Kirish</h3>
                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'class' => 'signup-form'
                        ]
                    ]) ?>
                    <?= $form->field($model, 'username')->textInput() ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
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