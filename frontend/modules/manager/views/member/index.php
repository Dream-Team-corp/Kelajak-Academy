<?php

use common\models\UseMember;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = $title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-outline card-primary p-2">
    <?php
    if ($title == "Qabuldagi o'quvchilar") {
        echo '<p> ' . Html::a('<i class="fa fa-plus" aria-hidden="true"></i>', ['create'], ['class' => 'h2 text-white btn btn-success']) . '</p>';
    }
    ?>
    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => [
            'id' => 'all-pupil',
            'class' => 'table table-bordered'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
//            'username',
            // 'auth_key',
            //'password_hash',
            'tel_number',
            //'photo',
            [
                'attribute' => 'status',
                'value' => 'statusLabel',
                'format' => 'html'
            ],
            //'type',
            //'token',
            'created_at:date',
            //'updated_at',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, UseMember $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'template' => "{view}",
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>