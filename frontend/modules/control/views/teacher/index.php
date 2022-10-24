<?php

use yii\bootstrap4\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'O\'qituvchilar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index card card-outline card-primary p-2 px-4">


    <p>
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i>', ['create'], ['class' => 'h2 text-white btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <div class="table-responsive">
        <?= GridView::widget([
            'summary' => '',
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                // 'id',
                'first_name',
                'last_name',
                'username',
                [
                    'attribute' => 'photo',
                    'value' => "adminimg",
                    'format' => 'html'
                ],
                [
                    'attribute' => 'password',
                    'value' => 'username',
                    'format' => 'html',
                    'label' => 'Parol'
                ],
                [
                    'class' => ActionColumn::class,
                    'buttons' => [
                        'view' => function ($url) {
                            return Html::a('<i class="fa fa-eye" aria-hidden="true"></i>', $url, ['class' => 'view btn btn-primary py-0']);
                        },
                        'update' => function ($url) {
                            return Html::a('<i class="fa fa-pen text-white" aria-hidden="true"></i>', $url, ['class' => ' update btn btn-warning mx-2 py-0']);
                        },
                        'delete' => function ($url) {
                            return Html::a('<i class="fa fa-trash" aria-hidden="true"></i>', $url, ['class' => 'delete btn btn-danger py-0', 'data-method' => 'post']);
                        },
                    ],
                    'urlCreator' => function ($action, $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ]
            ],
            'pager' => [
                'class' => LinkPager::class,
            ],
        ]) ?>
    </div>


    <?php Pjax::end(); ?>

</div>