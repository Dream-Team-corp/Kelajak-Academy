<?php

use common\models\Admin;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Qabulxona xodimlari';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-outline card-success p-3">

    <p>
        <?= Html::a('Yangi qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <div class="table-responsive">

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'tableOptions' => [
                'class' => 'table table-bordered',
                'id' => 'all-pupil'
            ],
            'summary' => false,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                
                'id',
                'username',
                [
                    'attribute' => 'password_hash',
                    'value' => 'username',
                    'label' => 'Parol'
                ],
                // 'password_hash',
                // 'auth_key',
                [
                    'attribute' => 'status',
                    'value' => 'statusLabel',
                    'format' => 'html'
                ],
                //'type',
                'created_at:date',
                'updated_at:date',
                [
                    'class' => ActionColumn::class,
                    'urlCreator' => function ($action, $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
    </div>

    <?php Pjax::end(); ?>

</div>