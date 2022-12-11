<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use himiklab\yii2\recaptcha\ReCaptcha2;
use kartik\file\FileInput;
use kartik\rating\StarRating as RatingStarRating;
use yii\bootstrap5\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Biz bilan Bog\'lanish';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Aloqa qiling</h3>
                                <?php $form = ActiveForm::begin(['id' => 'contact-form', 'class' => 'contactForm']); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Ismingiz:') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= $form->field($model, 'email')->label('Elektron pochta:') ?>
                                    </div>
                                    <div class="col-md-12">
                                        <?= $form->field($model, 'subject')->label('Mavzusi:') ?>
                                    </div>
                                    <div class="col-md-12">
                                        <?= $form->field($model, 'body')->textarea(['rows' => 6, 'cols' => '30'])->label('Asosiy qism:') ?>
                                    </div>
                                    <div class="col-md-12">
                                    <?= $form->field($model, 'rating')->widget(RatingStarRating::class, [
                                        'pluginOptions' => [
                                            'min' => 0,
                                            'max' => 10,
                                            'step' => 2,
                                            'size' => 'lg',
                                            'starClear' => '',
                                            'starCaptions' => [
                                                0 => 'Reting berilmadi!!!',
                                                2 => 'Juda yomon',
                                                4 => 'Yomon',
                                                6 => 'Yaxshi',
                                                8 => 'Zo\'r',
                                                10 => 'Juda zo\'r',
                                            ],
                                            'starCaptionClasses' => [
                                                0 => 'text-danger',
                                                2 => 'text-danger',
                                                4 => 'text-warning',
                                                6 => 'text-info',
                                                8 => 'text-primary',
                                                10 => 'text-success',
                                            ],
                                        ],
                                    ])->label('Xizmatimizni baholang:')?>
                                    </div>
                                    <div class="col-md-12">
                                        <?= $form->field($model, 'verifyCode')->widget(ReCaptcha2::class, [
                                            'siteKey' => '6LcCjW8jAAAAAC4PBY1F6q6KBv_CZ6BjsGQqp4Ao'
                                        ])->label('Tasdiqlash kodi:') ?>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Xabar yuborish" class="btn btn-primary">
                                            <div class="submitting"></div>
                                        </div>
                                    </div>
                                </div>

                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                <h3>Keling, aloqaga chiqamiz</h3>
                                <p class="mb-4">Biz har qanday savollar yoki takliflarga e'tibor qaratamiz</p>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Joylashuv:</span> MP5R+V64 To'yhona KELAJAK (Yoshlar Markazi), Karatepa, Oʻzbekiston</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Telefon raqamimiz:</span> <br><a href="tel://1234567920">+ 1235 2355 98</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Elektron pochta:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
            <iframe class="bg-white" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1826.5133481303533!2d71.74062129922618!3d40.65984657658428!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb6f6d630931cd%3A0xe441e0f6f7f4a2d9!2sTo&#39;yhona%20KELAJAK%20(Yoshlar%20Markazi)!5e1!3m2!1suz!2s!4v1666962086661!5m2!1suz!2s" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>