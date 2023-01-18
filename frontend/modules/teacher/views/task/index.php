<?php

use common\models\Course;
use common\models\task;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\VarDumper;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */
$course = Course::find()->all();
$this->title = Yii::t('app', 'Topshiriqlar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <p>
        <?= Html::a(Yii::t('app', 'Yaratish'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php foreach ($course as $key => $v) {
        echo '<div class="card" style="width: 18rem;">
        <div class="card-body p-2">
          <img src="'.Yii::getAlias('@defaultImage').'/'.$v['image'].'" class="w-100">
          <h5 class="card-title">'.$v['title'].'</h5>
          <div class=" text-muted">'.$v['description'].'</div>
          '.Html::a('Topshiriq berish', Url::to('_task',['id'=>$v['id']]),['class'=>'btn btn-success']).'
        </div>
      </div>';
    } ?>


</div>
