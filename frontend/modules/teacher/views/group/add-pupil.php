<?php

use kartik\form\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\VarDumper;

VarDumper::dump($model->pupilList, 10, true);
?>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card p-3">
            <?php $form = ActiveForm::begin() ?>
            <?= $form->field($model, 'pupil_id')->widget(Select2::class, [
                'data' => $model->pupilList,
                'size' => Select2::SMALL,
                'theme' => Select2::THEME_KRAJEE_BS5,
                'maintainOrder' => true,
                'options' => [
                    'multiple' => true,
                    'placeholder' => 'O\'quvchini tanlang...'
                ]
            ])  ?>
            <button type="submit" class="btn btn-success">Saqlash</button>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>