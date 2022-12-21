<?php
use frontend\models\Faq;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
$mod = new Faq();
$img = ($model->image == null) ? '' : $model->image;
?>
<div class="row bg-white rounded m-3 border border-info p-3">
    <div class="card col-4 p-0 rounded">
        <img class="img-fluid" src="<?=Yii::getAlias('@defaultImage').'/'.$model->image?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Savol :</h5>
            <p class="card-text border p-2"><?=$model->savol?></p>
            <h5>Javob :</h5>
            <div class="border p-2 mb-2">
                <?=$model->javob?>
            </div>
            <a href="<?=Url::to(['javob', 'id'=> $model->id])?>" class="btn btn-primary"><?=($model->javob == null) ? 'Javob yozish' : 'Javobni o\'zgartirish' ?></a>
        </div>
    </div>
</div>