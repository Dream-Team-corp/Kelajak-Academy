<?php

use common\models\GroupPupilList;


$this->title = Yii::$app->user->identity->first_name;
$kurs = GroupPupilList::findOne(Yii::$app->user->identity->id);

?>

<div class="family-default-index container-fluid">
    <div class="row my-3">
        <div class="col-4 offset-2 text-center">
            <div class="row align-items-center my-2">
                <div class="col-4">
                    <img class="rounded-circle mt-3 w-100" src="<?=Yii::getAlias('@defaultImage').'/'. Yii::$app->user->identity->photo?>" alt="">
                    <div>
                        <?= (Yii::$app->user->identity->type == 5) ? 'O\'quvchi': ''?>
                    </div>
                </div>
                <div class="col-8">
                    <div class="mt-3 h4">
                        <?=Yii::$app->user->identity->first_name.' '.Yii::$app->user->identity->last_name?>
                    </div>   
                    <div class="text-primary">
                        <?=Yii::$app->user->identity->tel_number?>
                    </div> 
                </div>
            </div>
            <div class="row" style="background-image: url('<?=Yii::getAlias('@defaultImage').'/image_2.jpg'?>'); background-repeat: no-repeat;background-size: 100%;height:350px;">

            </div>
        </div>
    </div>
    
</div>
