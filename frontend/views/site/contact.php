<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use himiklab\yii2\recaptcha\ReCaptcha2;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
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
                                <h3 class="mb-4">Get in touch</h3>
                                <?php $form = ActiveForm::begin(['id' => 'contact-form', 'class' => 'contactForm']); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?= $form->field($model, 'email') ?>
                                    </div>
                                    <div class="col-md-12">
                                        <?= $form->field($model, 'subject') ?>
                                    </div>
                                    <div class="col-md-12">
                                        <?= $form->field($model, 'body')->textarea(['rows' => 6, 'cols' => '30']) ?>
                                    </div>
                                    <div class="col-md-12">
                                        <?= $form->field($model, 'verifyCode')->widget(ReCaptcha2::class, [
                                            'siteKey' => '6Lez8qkiAAAAAEI1iklQ2bZQ29fQmeeXdMWoL-Oc'
                                        ]) ?>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                            <div class="submitting"></div>
                                        </div>
                                    </div>
                                </div>

                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                <h3>Let's get in touch</h3>
                                <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
    </div>
</section>