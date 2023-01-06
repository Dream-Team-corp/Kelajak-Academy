<?php

use common\models\Member;
use yii\helpers\VarDumper;
$teacher = Member::findOne($model->teacher_id);

?>
<div class="card">
  <h5 class="card-header"><?=$model->name?></h5>
  <div class="card-body">
    <div class=" h5"><?=$teacher->first_name .' '.$teacher->last_name?></div>
    <div class=" h6">Telefon raqami: <?=$teacher->tel_number?></div>
    <a href="#" class="btn btn-primary disabled">Kurs</a>
  </div>
</div>