<?php
?>
<div class="card">
  <img class="" src="<?=Yii::getAlias('@defaultImage').'/'.$model->photo?>" alt="Card image">
  <div class="card-body">
    <h4 class="h4"><?=$model->first_name.' '.$model->last_name?></h4><br>
    <a href="#" class="btn btn-primary">To'liq malumot</a>
  </div>
</div>