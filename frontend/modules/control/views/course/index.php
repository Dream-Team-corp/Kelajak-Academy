<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var common\models\search\CourseQuery $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kurs reklamalari';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-outline card-primary p-2">

   <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_courseItem',
        'layout' => "{items}",
        'options' => [
            'class' => 'row fade-left'
        ],
        'itemOptions' => [
            'class' => 'col-10 my-1 offset-1 col-sm-6 offset-sm-0 col-md-6 offset-md-0 col-lg-6 offset-lg-0 col-xl-3'
        ],
        'emptyText' => ''
    ]); ?>

</div>
