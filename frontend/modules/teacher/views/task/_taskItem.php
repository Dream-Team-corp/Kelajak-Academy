<?php

use yii\helpers\Html as HelpersHtml;
use yii\helpers\StringHelper;
use yii\helpers\VarDumper;
?>
<div class="card" style="width: 18rem;">
        <div class="card-body p-2">
          <img src="<?=Yii::getAlias('@defaultImage').'/'.$model->image?>" class="w-100">
          <h5 class=""><?=StringHelper::truncateWords($model->text,12,'...')?></h5>
          <!-- <embed src="<?=$model->video?>" type=""> -->
          <?=HelpersHtml::a(Yii::t('app', 'Batafsil'), ['view'], ['class' => 'btn btn-success'])?>
        </div>
      </div>