<?php

use common\models\UseMember;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'O\'quvchilar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-outline card-primary p-2">

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
            'username',
            'tel_number',
            [
                'attribute' => 'status',
                'value' => 'statusLabel',
                'format' => 'html'
            ],
            'created_at:date',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, UseMember $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
