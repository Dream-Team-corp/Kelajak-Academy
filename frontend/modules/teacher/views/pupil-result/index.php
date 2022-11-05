<?php

use common\models\PupilResult;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'O\'quvchilar natijalari';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-outline card-primary p-1">


    <p>
        <?= Html::a('Yangi qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_groupItem',
        'layout' => "{items}",
        'options' => [
            'class' => 'row fade-left'
        ],
        'itemOptions' => [
            'class' => 'col-12 col-md-6'
        ],
        'emptyText' => ''
    ]); ?>


</div>
