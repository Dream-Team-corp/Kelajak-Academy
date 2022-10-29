<?php

use yii\helpers\Url;
use yii\helpers\VarDumper;

$this->title = "O'qituvchi - " . Yii::$app->user->identity->first_name;
$assetDir = Yii::getAlias('@defaultImage');;

?>
<style>
    .fpos{
        position: relative !important;
    }
    .pos{
        position: absolute !important;
        top: 0;
        right: 0;
    }
    .fsx{
        font-size: 25px !important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card card-widget widget-user">
            <div class="widget-user-header bg-primary fpos">
                <a href="<?= Url::to(['/teacher/default/profile-setting']) ?>" class="btn btn-warning btn-sm pos" title="tahrirlash"> <i class="fa fa-pen"></i> </a>
                <h3 class="widget-user-username">
                    <?= Yii::$app->user->identity->first_name ?>
                    <?= Yii::$app->user->identity->last_name ?>
                </h3>
                <h5 class="widget-user-desc">
                    <?= $about->job ?>
                </h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?= $assetDir ?>/<?= $about->image ?>" alt="User Avatar">
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block  text-justify">
                            <h3 class="text-center">Men haqimda</h3>
                            <span class="text-left">
                                <?= $about->about ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-right">
                        <div class="description-block  text-justify">
                            <h3 class=" text-center">Ta'lim</h3>
                            <span class="text-left">
                                <?= $about->education ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="description-block text-justify">
                            <h3 class="text-center">Tajribam</h3>
                            <span>
                                <?= $about->experience ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around mt-3">
                    <?= $about->socialLink ?>
                </div>
            </div>
        </div>
    </div>
</div>