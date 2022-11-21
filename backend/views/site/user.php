<?php

use yii\helpers\Url;
use yii\helpers\VarDumper;

$this->title = 'Foydalanuvchi';
if($user->type == 10){
    ?>
    <div class="row">
    <div class="col-md-12">
        <div class="card card-widget widget-user">
            <div class="widget-user-header bg-primary fpos">
                <h3 class="widget-user-username">
                    <?= $user->first_name ?>
                    <?= $user->last_name ?>
                </h3>
                <h5 class="widget-user-desc">
                    <?= $teacherabout->job ?>
                </h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?= Yii::getAlias('@defaultImage') ?>/<?= $teacherabout->image ?>" alt="User Avatar">
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block  text-justify">
                            <h3 class="text-center">Men haqimda</h3>
                            <span class="text-left">
                                <?= $teacherabout->about ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-right">
                        <div class="description-block  text-justify">
                            <h3 class=" text-center">Ta'lim</h3>
                            <span class="text-left">
                                <?= $teacherabout->education ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="description-block text-justify">
                            <h3 class="text-center">Tajribam</h3>
                            <span>
                                <?= $teacherabout->experience ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around mt-3">
                    <?= $teacherabout->socialLink ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
else if ($user->type == 5){
    echo 'children';
}
?>
