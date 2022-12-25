<?php



?>


<div class="card">
  <img class="card-img-top" src="<?=Yii::getAlias('@defaultImage').'/'.$model->image?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$model->title?></h5>
    <p class="card-text"><?=$model->description?></p>
  </div>
</div>