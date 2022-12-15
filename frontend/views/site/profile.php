<?php

use kartik\file\FileInput;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TeacherAbout $model */
/** @var ActiveForm $form */

$this->title = "Profilni to'ldirish";
$this->params['breadcrumbs'][] = $this->title;

?>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php $form = ActiveForm::begin([
                    'options' => [
                        'enctype' => 'multipart/form-data'
                    ]
                ]); ?>
                <?= $form->field($model, 'job')->textInput(['placeholder' => 'Masalan: Matetimatik']) ?>
                <?= $form->field($model, 'about')->textarea(['rows' => 6, 'placeholder' => 'O\'zingiz haqingizda boshqalarga so\'zlab bering!']) ?>
                <?= $form->field($model, 'education')->textarea(['rows' => 6, 'placeholder' => 'Ta\'lim olgan joylaringiz haqida!']) ?>
                <?= $form->field($model, 'experience')->textarea(['rows' => 6, 'placeholder' => 'Ish tajribangiz haqida!']) ?>
                <?= $form->field($model, 'image')->widget(FileInput::class, [
                    'resizeImages' => true
                ]) ?>
                <?= $form->field($model, 'telegram')->textInput(['placeholder' => 'Masalan: https://t.me/example']) ?>
                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Masalan: example@gmail.com']) ?>
                <?= $form->field($model, 'instagram')->textInput(['placeholder' => 'Masalan: https://www.instagram.com/example/']) ?>
                <?= $form->field($model, 'youtube')->textInput(['placeholder' => 'Masalan: https://www.youtube.com/channel/yourchannel']) ?>
                <?= $form->field($model, 'facebook')->textInput(['placeholder' => 'Masalan: https://www.facebook.com/profile.php?id=100069217808703']) ?>
                <div class="form-group">
                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>