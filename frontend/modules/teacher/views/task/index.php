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

   
<?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_taskItem',
        'layout' => "{items}",
        'options' => [
            'class' => 'row fade-left'
        ],
        'itemOptions' => [
            'class' => 'col-10 my-1 offset-1 col-sm-6 offset-sm-0 col-md-6 offset-md-0 col-lg-6 offset-lg-0 col-xl-3'
        ],
        'emptyText' => ''
    ]); ?>

<h3>Kurslar :</h3>
    <?php foreach ($course as $key => $v) {
        echo '<div class="card" style="width: 18rem;">
        <div class="card-body p-2">
          <img src="'.Yii::getAlias('@defaultImage').'/'.$v['image'].'" class="w-100">
          <h5 class="">'.$v['title'].'</h5>
          <div class="h6 text-muted">'.$v['description'].'</div>
          '.Html::a('Topshiriq berish', Url::to(['task','id'=>$v['id']]),['class'=>'btn btn-success']).'
        </div>
      </div>';
    } ?>


</div>
