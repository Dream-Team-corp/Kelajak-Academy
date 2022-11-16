<?php

/**
 * @var $model \common\models\OnlineApply
 */

$this->title = "O'quvchi hohishlari";

use kartik\form\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

?>


<div class="row">

    <div class="col-md-6 offset-md-3">
        <div class="card card-outline card-primary p-2">
            <?php $f = ActiveForm::begin() ?>

            <?php echo $f->field($model, 'location')->textInput() ?>

            <?php echo $f->field($model, 'course_id')->widget(Select2::class, [
                'data' => ArrayHelper::map($model->courseList, 'id', 'title'),
                'options' => [
                        'placeholder' => 'Kursni tanlang:'
                ]
            ]) ?>
            <button type="submit" class="btn btn-primary">Saqlash</button>
            <?php ActiveForm::end() ?>

        </div>
    </div>

</div>