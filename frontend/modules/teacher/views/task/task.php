<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\VarDumper;

$this->title = 'Topshiriqlar';
$this->params['breadcrumbs'][] = $this->title;

?>
<div>
<?php foreach ($model as $key => $v) {
        echo '<div class="card" style="width: 18rem;">
        <div class="bg-primary">
            <h5 class="text-white p-2">'.Yii::$app->user->identity->first_name.' '.Yii::$app->user->identity->last_name.'</h5>
        </div>
        <div class="p-2 card-body">
          <h5 class="pl-2">Guruh nomi: '.$v['name'].'</h5>
          <h5 class="pl-2">Yaratilgan vaqti: '.date('Y-m-d',$v['created_at']).'</h5>
          '.Html::a(Yii::t('app', 'Yaratish'), ['create','course_id'=>$course_id,'id'=>$v['id']], ['class' => 'btn btn-success']).'
        </div>
      </div>';
    } ?>
</div>