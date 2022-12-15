<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;

$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="ftco-section ftco-about img">

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1><?= Html::encode($this->title) ?></h1>

                <div class="alert alert-danger">
                    <?= nl2br(Html::encode($message)) ?>
                </div>

                <p>
                    Sayt xatoliklari bo'yicha jamoa : <a href="https://t.me/kelajakeducommunity" target="_blank"><i class="fab fsx fa-telegram text-primary"></i> Telegram</a>
                </p>
            </div>
        </div>
    </div>

</div>